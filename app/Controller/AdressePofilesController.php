<?php
App::uses('AppController', 'Controller');
/**
 * AdressePofiles Controller
 *
 * @property AdressePofile $AdressePofile
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AdressePofilesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AdressePofile->recursive = 0;
        $this->Paginator->settings= array('conditions' => array('AdressePofile.user_id =' => $this->Session->read('Auth.User.id')));
		$this->set('adressePofiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AdressePofile->exists($id)) {
			throw new NotFoundException(__('Invalid adresse pofile'));
		}
         $temp = $this->AdressePofile->findById($id);
        if($temp['AdressePofile']['user_id'] != $this->Session->read('Auth.User.id')){
        $this->redirect('/');
        }
		$options = array('conditions' => array('AdressePofile.' . $this->AdressePofile->primaryKey => $id));
		$this->set('adressePofile', $this->AdressePofile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
            $this->request->data['AdressePofile']['user_id']= $this->Session->read('Auth.User.id');
			$this->AdressePofile->create();
			if ($this->AdressePofile->save($this->request->data)) {
				$this->Session->setFlash(__('The adresse pofile has been saved.'));
				return $this->redirect(array('controller'=>'Boutiques','action' => 'choixAdresse'));
			} else {
				$this->Session->setFlash(__('The adresse pofile could not be saved. Please, try again.'));
			}
		}
		//$users = $this->AdressePofile->User->find('list');
		//$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AdressePofile->exists($id)) {
			throw new NotFoundException(__('Invalid adresse pofile'));
		}

         $temp = $this->AdressePofile->findById($id);
        debug($temp);
        if($temp['AdressePofile']['user_id'] != $this->Session->read('Auth.User.id')){
        $this->redirect('/');
        }

		if ($this->request->is(array('post', 'put'))) {
            $this->request->data['AdressePofile']['user_id']= $this->Session->read('Auth.User.id');
			if ($this->AdressePofile->save($this->request->data)) {
				$this->Session->setFlash(__('The adresse pofile has been saved.'));
				return $this->redirect(array('controller'=>'Users','action' => 'userInfo'));
			} else {
				$this->Session->setFlash(__('The adresse pofile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdressePofile.' . $this->AdressePofile->primaryKey => $id));
			$this->request->data = $this->AdressePofile->find('first', $options);
		}
		$users = $this->AdressePofile->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {

		$this->AdressePofile->id = $id;
		if (!$this->AdressePofile->exists()) {
			throw new NotFoundException(__('Invalid adresse pofile'));
		}

		$this->request->allowMethod('post', 'delete');
		if ($this->AdressePofile->delete()) {
			$this->Session->setFlash(__('The adresse pofile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The adresse pofile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->AdressePofile->recursive = 0;
		$this->set('adressePofiles', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->AdressePofile->exists($id)) {
			throw new NotFoundException(__('Invalid adresse pofile'));
		}
		$options = array('conditions' => array('AdressePofile.' . $this->AdressePofile->primaryKey => $id));
		$this->set('adressePofile', $this->AdressePofile->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->AdressePofile->create();
			if ($this->AdressePofile->save($this->request->data)) {
				$this->Session->setFlash(__('The adresse pofile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adresse pofile could not be saved. Please, try again.'));
			}
		}
		$users = $this->AdressePofile->User->find('list');
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
		if (!$this->AdressePofile->exists($id)) {
			throw new NotFoundException(__('Invalid adresse pofile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AdressePofile->save($this->request->data)) {
				$this->Session->setFlash(__('The adresse pofile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The adresse pofile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AdressePofile.' . $this->AdressePofile->primaryKey => $id));
			$this->request->data = $this->AdressePofile->find('first', $options);
		}
		$users = $this->AdressePofile->User->find('list');
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
		$this->AdressePofile->id = $id;
		if (!$this->AdressePofile->exists()) {
			throw new NotFoundException(__('Invalid adresse pofile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AdressePofile->delete()) {
			$this->Session->setFlash(__('The adresse pofile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The adresse pofile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
