<?php 

App::uses('CakeEmail', 'Network/Email');
/**
 * 
 **/
class MailController extends AppController
{

	public function sendToMany()
	{	
		if(!empty($this->request->data)){
			$vtd = $this->request-data;
			$Email = new CakeEmail('gmail');
			$Email->from('ruhtra.php@gmail.com');
			$Email->to(vtd['desti'] );
			$Email->subject(vtd['sujet']);
			$Email->viewVars(array('message'=>vtd['text']));
			$Email->send();}	
	}
	
	public function sendToOne()
	{
	
	}

	public function text()
	{
		$email = new CakeEmail();
				$email->template('inscription','informatif');		
				$email	->emailFormat('both')
					->to('ruhtra.mar@gmail.com')
					->from('ruhtra.php@gmail.com')
					->send();
	
	}


}


?>


