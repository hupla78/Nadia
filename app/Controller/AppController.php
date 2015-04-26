

<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('ConnectionManager', 'Model');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller{

    public $components = array('Session','Auth','Panier','DebugKit.Toolbar','Panier');

    public function beforeFilter(){
        parent::beforeFilter();
        $this->set('Acms',new Acms());
        if (!isset($_SERVER['HTTPS'])) {
            $this->forceSSL();
        }
        if($this->request->prefix){
            $this->needToBeAdmin();
        }

    }
    public function forceSSL() {
       //$this->redirect('https://' . $_SERVER['SERVER_NAME'] . $this->here);
        debug($_SERVER);
    }

    public function needToBeAdmin(){
        if(!$this->Session->read('Auth.User.isAdmin')){
            $this->redirect('/');
        }
    }


    protected function _isAuthorizedFor($admin){

        if(! $this->Session->check('Auth.User.id')){return;}
        if ($this->Session->read('Auth.User.isAdmin') != $admin) {
            $this->Session->setFlash("cette partie du site n'est pas pour vous!!");
            $this->redirect(array('controller'=>'pages','action'=>'display'));
        }


    }



    public function search() {
        $this->autoRender = false;
        App::Import('ConnectionManager');
        $ds = ConnectionManager::getDataSource('default');
        $dsc = $ds->config;

        // get the search term from URL
        $mysqli = new mysqli($dsc['host'],$dsc['login'],$dsc['password'], $dsc['database']);
        $res = $mysqli->query("SELECT id,username as text FROM users");
        $result;

        foreach($res->fetch_all() as $key => $tem){
            $result[$key]['id'] = $tem[0];
            $result[$key]['text'] = $tem[1];

        }


        echo json_encode($result);
    }













}

class Acms{

    public $arr2;
    public $admin=null;
    public $local=null;
    public function __construct()
    {
        $this->admin = AuthComponent::user('isAdmin');
        //info
        $this->local =  Router::fullbaseUrl();
        //echo $this->getEditionPage();

        $this->arr2 = json_decode(file_get_contents(APP.'cms/base.json'), true);

    }


    public function getOne($lap = 'undefine' )
    {
        if($lap=='undefine'){return 'ereur 1';}//le parametre est rentré est mauvais

        return $this->arr2[$lap];
    }

    public function getAll($lap = 'undefine')
    {	$retu = array();
     $i = 0;
     while(array_key_exists($lap.$i,$this->arr2)){
         $retu[$i]= $this->arr2[$lap.$i];
         $i++;
     }
     return $retu;
    }


    public function getEditionPage($lap = 'undefine'){

        if($this->admin)return '<a  href="'.$this->local.'/admin/cms/findbyname/'.$lap.'" title="'.$lap.'" id="editAdmin" ></a>';

        else 		return '';
    }

    public function getEditionPages($lap){

        if($this->admin){
            $retList = '<ul id="editAdminList">';
            foreach($lap as $a){
                $retList = $retList.'<li><a  href="'.$this->local.'/admin/cms/findbyname/'.$a.'" title="'.$a.'"  ></a></li>';
            }
            $retList = $retList."</ul>";
            return $retList;
        }

        else 		return '';
    }



}

