<?php
App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController{


    public $admin = 'ruhtra.php@gmail.com';

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('inscription');
        $this->needToBeAdmin();
    }



    public function needToBeAdmin(){
        if(!array_key_exists('prefix',$this->request->params)){return;}
        if($this->request->params['prefix'] == 'admin' and !$this->Session->read('Auth.User.isAdmin')){
            $this->redirect('/');
        }
    }



    public function login(){
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
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

                $email = new CakeEmail('gmail');
                $email->template('inscription')
                    ->emailFormat('html')
                    ->subject('Inscription')
                    ->viewVars( array(
                                      'name'=>$this->request->data['User']['username']))
                    ->to($this->request->data['User']['email'])
                    ->from(Configure::read('email.sender'))
                    ->send();
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


    public function userInfo(){
        $idUser = $this->Session->read('Auth.User.id');
        $user   = $this->User->findById($idUser);
        $this->set('userInfo',$user);

    }

    public function index(){
        $temp = $this->User->findById($this->Session->read('Auth.User.id'));
        $this->set('userInfo',$temp);
    }

    public function admin_sendToMany()
    {
        parent::needToBeAdmin();

        $tepo = $this->User->find('list',array('fields'=>'User.email'));
        debug($tepo);
        if(!empty($this->request->data)){
            $vtd = $this->request-data;
            $Email = new CakeEmail('gmail');
            $Email->from($this->admin);
            $Email->to($vtd['desti']);
            $Email->subject($vtd['sujet']);
            $Email->viewVars(array('message'=>$vtd['text']));
            $Email->send();}
    }

    public function admin_sendToOne()
    {
        if(!empty($this->request->data)){
            $vtd = $this->request-data;
            $Email = new CakeEmail('gmail');
            $Email->from($this->admin);
            $Email->to($tepo);
            $Email->subject($vtd['sujet']);
            $Email->viewVars(array('message'=>$vtd['text']));
            $Email->send();}else{
            $this->set('users',$this->User->find('list',array('fields'=>'User.email')));
        }

    }

    public function sendToAdmin()
    {

        if(!empty($this->request->data)){
            $vtd = $this->request-data;
            $Email = new CakeEmail('gmail');
            $Email->from($this->Session->read('Auth.User.email'));
            $Email->to('ruhtra.php@gmail.com');
            $Email->subject($vtd['sujet']);
            $Email->viewVars(array('message'=>$vtd['text']));
            $Email->send();
        }
    }

     public function admin_sendToUser()
    {

        if(!empty($this->request->data)){
            $vtd = $this->request->data;
            $this->User->recursive=0;
            $list=$this->User->find('list',array('fields'=>array('User.email')));


            $email = new CakeEmail('gmail');
                $email->template('new')
                    ->emailFormat('html')
                    ->subject($vtd['Email']['sujet'])
                    ->viewVars(array(
                        'text'=>$vtd['Email']['text'],
                        'sujet'=>$vtd['Email']['sujet']
                    ))
                    ->to($list)
                    ->from(Configure::read('email.sender'))
                    ->send();
            $this->Session->setFlash('Le mail a corectement éte envoyé');
            $this->request->data=array();
        }
    }









}





?>
