<?php echo  $this->Form->create('mail'); ?>
<?php echo  $this->Form->input('sujet'); ?>
<?php echo  $this->Form->input('type de message',array('options'=>array(
        'informatif'=>'informatif',
        'promo'=>'promo',
        'sobre'=>'sobre')));?>
<?php echo  $this->Form->input('text',array('type'=>'textarea'));  ?>


<?php echo  $this->Form->end() ?>


