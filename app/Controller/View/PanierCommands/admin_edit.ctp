<div class="panierCommands form">
<?php echo $this->Form->create('PanierCommand'); ?>
	<fieldset>
		<legend><?php echo __('Edit Panier Command'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('adresse_pofile_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PanierCommand.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PanierCommand.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Panier Commands'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Adresse Profiles'), array('controller' => 'adresse_pofiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adresse Profile'), array('controller' => 'adresse_pofiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Panier Ventes'), array('controller' => 'panier_ventes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Panier Vente'), array('controller' => 'panier_ventes', 'action' => 'add')); ?> </li>
	</ul>
</div>
