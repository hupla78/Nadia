<?php 

class UsersController extends AppController{
    
    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('inscription');
    
    }
    
    

public function login(){
    //$this->User->create(array(
    //    'username'=>'admin',
    //    'password'=>$this->Auth->password('admin')));
    //$this->User->save();
    
    
    
 if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirectUrl());
            // Avant 2.3, utilisez
            // `return $this->redirect($this->Auth->redirect());`
        } else {
            $this->Session->setFlash('Erreur Utilisateur ou mdp');
        }
    }
}
    
    

    
    
public function logout(){
    $this->Auth->logout();
    $this->redirect(array('controller'=>'pages',
                        'action'=>'display'  ));
                        }
    
    
    
    
    
public function inscription(){

if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('votre compte a ete crée.'));
                $this->Auth->login();
				return $this->redirect(redirect);
			} else {
				$this->Session->setFlash(__('no'));
			}
		}


}    
    
    
}





?>
