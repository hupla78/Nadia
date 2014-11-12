<?php

/**
 * Texts Controller
 *
 * @property Text $Text
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TextsController extends AppController {

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
		$this->Text->recursive = 0;
		$this->set('texts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Text->exists($id)) {
			throw new NotFoundException(__('Invalid text'));
		}
		$options = array('conditions' => array('Text.' . $this->Text->primaryKey => $id));
		$this->set('text', $this->Text->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Text->create();
			if ($this->Text->save($this->request->data)) {
				$this->Session->setFlash(__('The text has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
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
		if (!$this->Text->exists($id)) {
			throw new NotFoundException(__('Invalid text'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Text->save($this->request->data)) {
				$this->Session->setFlash(__('The text has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Text.' . $this->Text->primaryKey => $id));
			$this->request->data = $this->Text->find('first', $options);
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
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid text'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Text->delete()) {
			$this->Session->setFlash(__('The text has been deleted.'));
		} else {
			$this->Session->setFlash(__('The text could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
