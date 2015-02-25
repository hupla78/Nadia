<?php
App::uses('AppController', 'Controller');
/**
 * PointDeVentes Controller
 *
 * @property PointDeVente $PointDeVente
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PointDeVentesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
    public $helpers = array('GoogleMap');

    
    
    
    
    public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index','view');
	}
    
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PointDeVente->recursive = 0;
		$this->set('pointDeVentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PointDeVente->exists($id)) {
			throw new NotFoundException(__('Invalid point de vente'));
		}
		$options = array('conditions' => array('PointDeVente.' . $this->PointDeVente->primaryKey => $id));
		$this->set('pointDeVente', $this->PointDeVente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PointDeVente->create();
			if ($this->PointDeVente->save($this->request->data)) {
				$this->Session->setFlash(__('The point de vente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point de vente could not be saved. Please, try again.'));
			}
		}
		$images = $this->PointDeVente->Image->find('list');
		$this->set(compact('images'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PointDeVente->exists($id)) {
			throw new NotFoundException(__('Invalid point de vente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PointDeVente->save($this->request->data)) {
				$this->Session->setFlash(__('The point de vente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point de vente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PointDeVente.' . $this->PointDeVente->primaryKey => $id));
			$this->request->data = $this->PointDeVente->find('first', $options);
		}
		$images = $this->PointDeVente->Image->find('list');
		$this->set(compact('images'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PointDeVente->id = $id;
		if (!$this->PointDeVente->exists()) {
			throw new NotFoundException(__('Invalid point de vente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PointDeVente->delete()) {
			$this->Session->setFlash(__('The point de vente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The point de vente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PointDeVente->recursive = 0;
		$this->set('pointDeVentes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PointDeVente->exists($id)) {
			throw new NotFoundException(__('Invalid point de vente'));
		}
		$options = array('conditions' => array('PointDeVente.' . $this->PointDeVente->primaryKey => $id));
		$this->set('pointDeVente', $this->PointDeVente->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PointDeVente->create();
			if ($this->PointDeVente->save($this->request->data)) {
				$this->Session->setFlash(__('The point de vente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point de vente could not be saved. Please, try again.'));
			}
		}
		$Imgs = $this->PointDeVente->Img->find('list');
		$this->set(compact('Imgs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PointDeVente->exists($id)) {
			throw new NotFoundException(__('Invalid point de vente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PointDeVente->save($this->request->data)) {
				$this->Session->setFlash(__('The point de vente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point de vente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PointDeVente.' . $this->PointDeVente->primaryKey => $id));
			$this->request->data = $this->PointDeVente->find('first', $options);
		}
		$imgs = $this->PointDeVente->Img->find('list');
		$this->set(compact('imgs'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PointDeVente->id = $id;
		if (!$this->PointDeVente->exists()) {
			throw new NotFoundException(__('Invalid point de vente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PointDeVente->delete()) {
			$this->Session->setFlash(__('The point de vente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The point de vente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
