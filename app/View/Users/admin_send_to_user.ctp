

<div class="columns large-12">
<p>Ce message est pour tout les utilisateurs.</p>
<?php echo  $this->Form->create('Email'); ?>
<?php echo  $this->Form->input('sujet'); ?>
<?php echo  $this->Form->input('text',array('type'=>'textarea'));  ?>
<?php echo  $this->Form->submit('envoyer',array('class'=>'button center'));?>
<?php echo  $this->Form->end() ?>

</div>
