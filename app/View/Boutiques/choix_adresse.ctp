<?php 


echo $this->Form->create('');

echo $this->Form->end('choisir');
echo $this->Form->input('field', array(
    'type' => 'radiobox',
    'before' => '--avant--',
    'after' => '--après--',
    'between' => '--entre---',
    'separator' => '--séparateur--',
    'options' => array('1', '2')
));






echo $this->Form->radio('type',$adresse, array('legend' => false));




echo $this->Html->link('Payer',array(
    'controller'=>'Boutiques'   ,
    'action'=>'pay'));
?>