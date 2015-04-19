<?php
App::uses('CakeEmail', 'Network/Email');
App::uses('CakeTime', 'Utility');
App::uses('Paypal', 'Paypal.Lib');
/**
 * Boutiques Controller
 *
 * @property Boutique $Boutique
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BoutiquesController extends AppController {

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('panier','index','article','subArticle','addArticle','removeArticle','search','view');
    }




    /**
	 * Components
	 *
	 * @var array
	 */
    public $components = array('Paginator', 'Session');

    /**
	 * admin_index method
	 *
	 * @return void
	 */
    public function admin_index() {
        $this->Boutique->recursive = 0;
        $this->set('boutiques', $this->Paginator->paginate());
    }

    /**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
    public function admin_view($id = null) {
        if (!$this->Boutique->exists($id)) {
            throw new NotFoundException(__('Invalid boutique'));
        }
        $options = array('conditions' => array('Boutique.' . $this->Boutique->primaryKey => $id));
        $this->set('boutique', $this->Boutique->find('first', $options));
    }

    /**
	 * admin_add method
	 *
	 * @return void
	 */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Boutique->create();
            if ($this->Boutique->save($this->request->data)) {
                $this->Session->setFlash(__('The boutique has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The boutique could not be saved. Please, try again.'));
            }
        }
        $users = $this->Boutique->User->find('list');
        $this->set(compact('users'));
    }

    /**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
    public function admin_edit($id = null) {
        if (!$this->Boutique->exists($id)) {
            throw new NotFoundException(__('Invalid boutique'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Boutique->save($this->request->data)) {
                $this->Session->setFlash(__('The boutique has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The boutique could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Boutique.' . $this->Boutique->primaryKey => $id));
            $this->request->data = $this->Boutique->find('first', $options);
        }
        $users = $this->Boutique->User->find('list');
        $this->set(compact('users'));
    }

    /**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
    public function admin_delete($id = null) {
        $this->Boutique->id = $id;
        if (!$this->Boutique->exists()) {
            throw new NotFoundException(__('Invalid boutique'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Boutique->delete()) {
            $this->Session->setFlash(__('The boutique has been deleted.'));
        } else {
            $this->Session->setFlash(__('The boutique could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }



    public function index()
    {
        if(!empty($this->request->data)){
            $ele = $this->Boutique->Article->find('all');
        }else{
            $ele = $this->Boutique->Article->find('all');
        }

        $this->set('boutique',$ele);
    }



    public function view($id = null) {
        if (!$this->Boutique->Article->exists($id)) {
            throw new NotFoundException(__('Invalid boutique'));
        }

        $this->set('article', $this->Boutique->Article->findById($id));
    }

    public function panier()
    {
        $this->set('panier',$this->Panier->listArticle());
    }

    public function addArticle($id=null)
    {
        $elem = 1;

        if(!empty($this->request->data))
            $elem = $this->request->data['Boutique']['quantity'];

        $this->Panier->add($id,$elem);
        return $this->redirect($this->referer()) ;
    }

    public function removeArticle($id=null)
    {
        $elem = 1;

        if(!empty($this->request->data))
            $elem = $this->request->data['Boutique']['quantity'];

        $this->Panier->rem($id,$elem);
        return $this->redirect($this->referer()) ;

    }



    public function subArticle($id=null)
    {
        $elem = 1;

        if(!empty($this->request->data))
            $elem = $this->request->data['Boutique']['quantity'];

        $this->Panier->sub($id,$elem);
        return $this->redirect($this->referer()) ;

    }

    public function article($id=null)
    {
        if (!$this->Boutique->Article->exists($id)) {
            throw new NotFoundException(__('Invalid cm'));
        }
        $options = array('conditions' => array('Article.' . $this->Boutique->Article->primaryKey => $id));
        $this->set('article', $this->Boutique->Article->find('first', $options));

    }


    public function command()
    {
        $this->set('panier',$this->Panier->listArticle());
    }

    public function choixAdresse()
    {



        if(!empty($this->request->data) and $this->request->data['Boutique']['adresse']!='' ){
            $this->Panier->setAdresse($this->request->data['Boutique']['adresse']);
            $this->redirect(array('action'=>'pay'));
        }else{
            if ($this->request->data['Boutique']['adresse']!=''){
                $this->Session->setFlash('hi');}


            $temps = $this->Boutique->User->findById($this->Session->read('Auth.User.id')); 

            $id = 0;
            $adresse = array();
            foreach($temps['AdressePofile'] as $temp){

                $tempAdresse = '<b>'.$temp['name'].'</b><br>'
                    .$temp['num_rue'].' '
                    .$temp['rue'].' '
                    .$temp['codePostal'].' '
                    .$temp['vile'];
                $adresse[$temp['id']]=$tempAdresse;
            }

            //debug($adresse);
            $this->set('adresse',$adresse);
        }


    }

    public function pay(){

        $this->Panier->needAdresse();

        $this->Paypal = new Paypal(array(
    'sandboxMode' => true,
    'nvpUsername' =>'ruhtra.mar_api1.gmail.com',
    'nvpPassword' =>'4WAPNUK89HCNBHRK',
    'nvpSignature' => 'AhrRhl.RJcePgUz73FTprggMHMuXAla2HRDwV9x5UUl7KMU2Xh9lFfjX'
));

       $payment = array(
    'amount' => 30.00,
    'card' => '4008 0687 0641 8697', // This is a sandbox CC
    'expiry' => array(
        'M' => '2',
        'Y' => '2016',
    ),
    'cvv' => '321',
    'currency' => 'USD' // Defaults to GBP if not provided
);


 try {
    $this->Paypal->doDirectPayment($payment);

} catch (Exception $e) {
    debug($e->getMessage());
}
}




    public function ispayd(){


        $tab=$this->Panier->exportToBDDFormat();
        $this->Boutique->PanierCommand->saveAssociated($tab);

        setlocale(LC_TIME, "fr_FR");
        $temp = array(
            'userName'      =>  $this->Session->read('Auth.User.username'),
            'Adresse'       =>  $this->Boutique->User->AdressePofile->findById( $this->Session->read('Panier.PayInfo.adresseId'),array('recursive'=>0)),
            'prix!Total'    =>  $this->Session->read('Panier.Total'),
            'date'          =>  strftime("%d/%m/%Y"),
            'state'         =>  'Votre commande a bien éte enregistré'
        );
        $email = new CakeEmail('gmail');
        $email->template('informatif');
        $email->emailFormat('both')
            ->to($this->Session->read('Auth.User.email'))
            ->from('ruhtra.php@gmail.com')
            ->viewVars($temp)
            ->send();
        $this->Panier->destroy();
    }


    public function error(){


    }

    public function search() {
        $this->autoRender = false;
        $term = $this->request->query['q'];
        $list =  $this->Boutique->Article->find('all',array('fields'=>array('id','name'),
                                                            'conditions' => array(
                                                                'Article.name LIKE' => '%'.$term.'%'
                                                            )
                                                           ));
        foreach($list as $key => $tem){
            $result[$key]['id'] = $tem['Article']['id'];
            $result[$key]['text'] = $tem['Article']['name'];

        }


        echo json_encode($result);
    }










}
