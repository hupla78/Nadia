<?php
App::uses('AppController', 'Controller');
/**
 * PanierCommands Controller
 *
 * @property PanierCommand $PanierCommand
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PanierCommandsController extends AppController {

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
        $this->PanierCommand->recursive = 0;
        $this->set('panierCommands', $this->Paginator->paginate());
    }


    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_status($id){
        $this->PanierCommand->nextState();



    }

    /**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_view($id = null) {
        if (!$this->PanierCommand->exists($id)) {
            throw new NotFoundException(__('Invalid panier command'));
        }
        $options = array('conditions' => array('PanierCommand.' . $this->PanierCommand->primaryKey => $id));
        $this->set('panierCommand', $this->PanierCommand->find('first', $options));
    }

    /**
 * admin_add method
 *
 * @return void
 */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->PanierCommand->create();
            if ($this->PanierCommand->save($this->request->data)) {
                $this->Session->setFlash(__('The panier command has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The panier command could not be saved. Please, try again.'));
            }
        }
        $users = $this->PanierCommand->User->find('list');
        $adressePofiles = $this->PanierCommand->AdressePofile->find('list');
        $this->set(compact('users', 'adressePofiles'));
    }

    /**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_edit($id = null) {
        if (!$this->PanierCommand->exists($id)) {
            throw new NotFoundException(__('Invalid panier command'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->PanierCommand->save($this->request->data)) {
                $this->Session->setFlash(__('The panier command has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The panier command could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('PanierCommand.' . $this->PanierCommand->primaryKey => $id));
            $this->request->data = $this->PanierCommand->find('first', $options);
        }
        $users = $this->PanierCommand->User->find('list');
        $adressePofiles = $this->PanierCommand->AdressePofile->find('list');
        $this->set(compact('users', 'adressePofiles'));
    }

    /**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_delete($id = null) {
        $this->PanierCommand->id = $id;
        if (!$this->PanierCommand->exists()) {
            throw new NotFoundException(__('Invalid panier command'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->PanierCommand->delete()) {
            $this->Session->setFlash(__('The panier command has been deleted.'));
        } else {
            $this->Session->setFlash(__('The panier command could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function index(){



    }


    public function view($id){

        if (!$this->PanierCommand->exists($id)) {
            throw new NotFoundException(__('Invalid panier command'));
        }
        $options = array('conditions' => array('PanierCommand.' . $this->PanierCommand->primaryKey => $id));
        $tab =  $this->PanierCommand->find('first', $options);
        if($this->Session->read('Auth.User.id')!=$tab['User']['id']){
            throw new NotFoundException(__('Invalid command'));
        }

        $this->set('panierCommand',$tab);
        $this->set('article',$this->PanierCommand->PanierVente->find('all',array('conditions' => array('panier_command_id' => $id))));
    }

}
