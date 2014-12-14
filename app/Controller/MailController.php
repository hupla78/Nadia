<?php 

App::uses('CakeEmail', 'Network/Email');
/**
 * 
 **/
class MailController extends AppController
{

	
	/*public function index($d) {
    
  if(!empty($this->request->data)){
			$vtd = $this->request-data;
			$Email = new CakeEmail('gmail');
			$Email->from('test.beauval@gmail.com');
			$Email->to('test.beauval@gmail.com' );
			$Email->emailFormat('html');
			$Email->template('contact')->viewVars(array($d));
			$Email->subject('Contact :: site');
			$Email->send('coucou');}	

	 }*/
	
	
	public function sendToMany()
	{	
		if(!empty($this->request->data)){
			$vtd = $this->request-data;
			$Email = new CakeEmail('gmail');
			$Email->from('ruhtra.php@gmail.com');
			$Email->to(vtd('desti'));
			$Email->subject(vtd('sujet'));
			$Email->viewVars(array('message'=>vtd('text')));
			$Email->send();}	
	}
	
	public function sendToOne()
	{
		if(!empty($this->request->data)){
			$vtd = $this->request-data;
			$Email = new CakeEmail('gmail');
			$Email->from('ruhtra.php@gmail.com');
			$Email->to(vtd('desti') );
			$Email->subject(vtd('sujet'));
			$Email->viewVars(array('message'=>vtd('text')));
			$Email->send();}	

	}

	public function text()
	{
		$Email = new CakeEmail();
				$Email->template('inscription','informatif');		
				$Email	->emailFormat('both')
					->to('ruhtra.mar@gmail.com')
					->from('ruhtra.php@gmail.com')
					->send();
	
	}

 
}


?>


