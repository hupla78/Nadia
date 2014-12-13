<?php class Contact extends AppModel{


    public $useTable = false;
    
    public function send($d){
        App::uses('CakeEmail','Network/Email');
      $mail = new CakeEmail('gmail');
    $mail->from('ruhtra.php@gmail.com')
        ->from('ruhtra.php@gmail.com')
        ->subject('Contact :: Site');
        
        
       return $mail->send('Salut ça va');
  
    }

}