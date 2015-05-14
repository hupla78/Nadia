
<?php echo $this->Form->create('boutiques',array('action'=>'pay/card','type'=>'post')); ?>

<?php echo $this->Form->input('card'); ?>
<?php echo $this->Form->input('boutiques.expiry.M'); ?>
<?php echo $this->Form->input('boutiques.expiry.Y'); ?>
<?php echo $this->Form->input('cvv'); ?>

<?php echo $this->Form->end('payer'); ?>
