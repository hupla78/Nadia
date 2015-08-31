<div class="pointDeVentes form">
<?php echo $this->Form->create('PointDeVente'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Point De Vente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('img_id');
		echo $this->Form->input('rue');
		echo $this->Form->input('num_rue');
		echo $this->Form->input('codePostal');
		echo $this->Form->input('vile');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PointDeVente.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('PointDeVente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Point De Ventes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
	</ul>
</div>
