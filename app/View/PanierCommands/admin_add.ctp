<div class="panierCommands form">
<?php echo $this->Form->create('PanierCommand'); ?>
	<fieldset>
		<legend><?php echo __('Add Panier Command'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('adresse_pofile_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Panier Commands'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adresse Pofiles'), array('controller' => 'adresse_pofiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adresse Pofile'), array('controller' => 'adresse_pofiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Panier Ventes'), array('controller' => 'panier_ventes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Panier Vente'), array('controller' => 'panier_ventes', 'action' => 'add')); ?> </li>
	</ul>
</div>
