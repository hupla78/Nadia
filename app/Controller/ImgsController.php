<?php
App::uses('AppController', 'Controller');
/**
 * Imgs Controller
 *
 * @property Img $Img
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ImgsController extends AppController {

    
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
		$this->Img->recursive = 0;
		$this->set('imgs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Img->exists($id)) {
			throw new NotFoundException(__('Invalid img'));
		}
		$options = array('conditions' => array('Img.' . $this->Img->primaryKey => $id));
		$this->set('img', $this->Img->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Img->create();
            
			if ($this->Img->save($this->request->data)) {
				$this->Session->setFlash(__('The img has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The img could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Img->exists($id)) {
			throw new NotFoundException(__('Invalid img'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Img->save($this->request->data)) {
				$this->Session->setFlash(__('The img has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The img could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Img.' . $this->Img->primaryKey => $id));
			$this->request->data = $this->Img->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Img->id = $id;
		if (!$this->Img->exists()) {
			throw new NotFoundException(__('Invalid img'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Img->delete()) {
			$this->Session->setFlash(__('The img has been deleted.'));
		} else {
			$this->Session->setFlash(__('The img could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
