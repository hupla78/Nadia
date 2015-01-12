


<?php 


echo $this->Form->create('');
echo $this->Form->radio('adresse',$adresse, array('legend' => false));
echo $this->Form->end('next');

echo $this->Html->link('Nouvelle Adresse',array(
    'controller'=>'AdressePofiles',
    'action'=>'add'));
?>



echo $this->Html->link('Payer',array(
    'controller'=>'Boutiques'   ,
    'action'=>'pay'));
?>