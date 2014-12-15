<?php

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
		$this->Auth->allow('panier','index','article','subArticle','addArticle');
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
		
	}

	public function choixAdresse()
	{
        
        
        
        if(!empty($this->request->data)){
            $this->Panier->setAdresse($this->request->data['Boutique']['adresse']);
            $this->redirect(array('action'=>'pay'));
        }else{
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
            
            debug($adresse);
            $this->set('adresse',$adresse);
        }
        
           
	}

	public function pay(){

        $this->Panier->needAdresse();

        
	}
    
    public function ispayd(){
            
	}
    
    
    public function error(){


	}
    
	

}
