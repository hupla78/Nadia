<?php 
App::uses('CakeEmail', 'Network/Email');
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

//				$email = new CakeEmail('gmail');
//				$email->template('inscription');		
//				$email	->emailFormat('both')
//					->to('ruhtra.php@gmail.com')
//					->from('ruhtra.php@gmail.com')
//					->viewVars(array('message'=>'inscription sucess'))
//					->send();
                

                $this->Auth->login();
                $this->request->data['adresseProfile']['user_id'] = $this->Session->read('Auth.User.id');
                
                 $this->User->AdressePofile->create();
                $this->User->AdressePofile->save($this->request->data['adresseProfile']);
				return $this->redirect('/');
			} else {
				$this->Session->setFlash(__('no'));
			}
		}


}    
 
    
    public function seeUser(){
        $idUser = $this->Session->read('Auth.User.id');
        $user   = $this->User->findById($idUser);
        $this->set('userInfo',$user);
    }
    
    
    
    public function index(){
        $temp = $this->User->findById($this->Session->read('Auth.User.id'));
        $this->set('userInfo',$temp);
    }
    
    
    
    
}





?>
