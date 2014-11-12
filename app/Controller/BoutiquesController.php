<?php

/**
 * Boutiques Controller
 *
 * @property Boutique $Boutique
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BoutiquesController extends AppController {

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


}
