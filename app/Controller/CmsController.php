<?php
App::uses('AppController', 'Controller');
/**
 * Cms Controller
 *
 * @property Cm $Cm
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CmsController extends AppController {

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
		$this->Cm->recursive = 0;
		$this->set('cms', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Cm->exists($id)) {
			throw new NotFoundException(__('Invalid cm'));
		}
		$options = array('conditions' => array('Cm.' . $this->Cm->primaryKey => $id));
		$this->set('cm', $this->Cm->find('first', $options));
	}

/**
 * admin_add metsod
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Cm->create();
			if ($this->Cm->save($this->request->data)) {
				$this->Session->setFlash(__('The cm has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cm could not be saved. Please, try again.'));
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
		if (!$this->Cm->exists($id)) {
			throw new NotFoundException(__('Invalid cm'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cm->save($this->request->data)) {
				$this->Session->setFlash(__('The cm has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cm could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cm.' . $this->Cm->primaryKey => $id));
			$this->request->data = $this->Cm->find('first', $options);
            $this->set('imgPossi',array_merge(array(0=>'value et pas image'), $this->Cm->img->find('list')));
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
		$this->Cm->id = $id;
		if (!$this->Cm->exists()) {
			throw new NotFoundException(__('Invalid cm'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cm->delete()) {
			$this->Session->setFlash(__('The cm has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cm could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
