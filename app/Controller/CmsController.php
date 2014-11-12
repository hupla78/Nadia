
<?php

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
		$this->set('cms', $this->Paginator->paginate());
	}

        /**
         *
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
 * admin_add method
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
		$imgs = $this->Cm->Img->find('list');
		$articles = $this->Cm->Article->find('list');
		$categories = $this->Cm->Categorie->find('list');
		$values = $this->Cm->Value->find('list');
		$texts = $this->Cm->Text->find('list');
		$this->set(compact('imgs', 'articles', 'categories', 'values', 'texts'));
	}


        /**
         *
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

		}
		$imgs = $this->Cm->Img->find('list');
		$articles = $this->Cm->Article->find('list');
		$categories = $this->Cm->Categorie->find('list');
		$values = $this->Cm->Value->find('list');
		$texts = $this->Cm->Text->find('list');
		$this->set(compact('imgs', 'articles', 'categories', 'values', 'texts'));
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

?>
