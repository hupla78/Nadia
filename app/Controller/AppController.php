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

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    public $components = array('DebugKit.Toolbar');
    
    public function beforeRender(){
                $this->set('Acms',new Acms());
                                  
                                  }
    
}

class Acms{
     
    public $arr2;
    
    public function __construct()
    {
        $this->arr2 = json_decode(file_get_contents(APP.'cms/base.json'), true);    
    
    }
    
    
public function getOne($lap = 'undefine' )
    {
    if($lap=='undefine'){return 'ereur 1';}//le parametre est rentré est mauvais
     
    foreach($this->arr2 as $Iar)
    {
        if($Iar['Cm']['name']==$lap){return $Iar['Cm']['value'];}
    
    }
     return 'erreur 2' ;
    }
    
    
    
    
    
public function getAll($lap = 'undefine')
{
      if($lap=='undefine'){return 'ereur 1';}//le parametre rentré est mauvais
      if($lap=='all'){return $this->arr2;}
    
    $valReturn= array();
    $i = 0 ;
    
    
  
    
    foreach($this->arr2 as $Iar)
    {
        
        if( strstr($Iar['Cm']['name'],$lap) ){
                if($Iar['Cm']['img_id']!=0){
                    $valReturn[$i] = $Iar['img']['name'].'.'.$Iar['img']['format'];
                }else{    
                    $valReturn[$i] = $Iar['Cm']['value'];
         
                }           
            $i++;    
        }
        
    
    }
return $valReturn;

}
    


}

