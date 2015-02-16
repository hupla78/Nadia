<?php
App::uses('AppController', 'Controller');
/**
 * Actualites Controller
 *
 * @property Actualite $Actualite
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ActualitesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');


    public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index','view');
	}

    public function index(){
            $this->set('actu', $this->Actualite->find('all'));

    }

    public function view($id){
            $this->set('actu', $this->Actualite->findById($id));

    }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Actualite->recursive = 0;
		$this->set('actualites', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Actualite->exists($id)) {
			throw new NotFoundException(__('Invalid actualite'));
		}
		$options = array('conditions' => array('Actualite.' . $this->Actualite->primaryKey => $id));
		$this->set('actualite', $this->Actualite->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Actualite->create();
			if ($this->Actualite->save($this->request->data)) {
				$this->Session->setFlash(__('The actualite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actualite could not be saved. Please, try again.'));
			}
		}
		$imgs = $this->Actualite->Img->find('list');
		$this->set(compact('imgs'));

	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Actualite->exists($id)) {
			throw new NotFoundException(__('Invalid actualite'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Actualite->save($this->request->data)) {
				$this->Session->setFlash(__('The actualite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The actualite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Actualite.' . $this->Actualite->primaryKey => $id));
			$this->request->data = $this->Actualite->find('first', $options);
		}
		$imgs = $this->Actualite->Img->find('list');
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
		$this->Actualite->id = $id;
		if (!$this->Actualite->exists()) {
			throw new NotFoundException(__('Invalid actualite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Actualite->delete()) {
			$this->Session->setFlash(__('The actualite has been deleted.'));
		} else {
			$this->Session->setFlash(__('The actualite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



}
