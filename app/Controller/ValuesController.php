<?php

/**
 * Values Controller
 *
 * @property Value $Value
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ValuesController extends AppController {

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
		$this->Value->recursive = 0;
		$this->set('values', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Value->exists($id)) {
			throw new NotFoundException(__('Invalid value'));
		}
		$options = array('conditions' => array('Value.' . $this->Value->primaryKey => $id));
		$this->set('value', $this->Value->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Value->create();
			if ($this->Value->save($this->request->data)) {
				$this->Session->setFlash(__('The value has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The value could not be saved. Please, try again.'));
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
		if (!$this->Value->exists($id)) {
			throw new NotFoundException(__('Invalid value'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Value->save($this->request->data)) {
				$this->Session->setFlash(__('The value has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The value could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Value.' . $this->Value->primaryKey => $id));
			$this->request->data = $this->Value->find('first', $options);
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
		$this->Value->id = $id;
		if (!$this->Value->exists()) {
			throw new NotFoundException(__('Invalid value'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Value->delete()) {
			$this->Session->setFlash(__('The value has been deleted.'));
		} else {
			$this->Session->setFlash(__('The value could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
