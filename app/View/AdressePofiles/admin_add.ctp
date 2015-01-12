<div class="adressePofiles form">
<?php echo $this->Form->create('AdressePofile'); ?>
	<fieldset>
		<legend><?php echo __('Add Adresse Pofile'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('rue');
		echo $this->Form->input('num_rue');
		echo $this->Form->input('codePostal');
		echo $this->Form->input('vile');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Adresse Pofiles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
