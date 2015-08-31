<div class="pointDeVentes form">
<?php echo $this->Form->create('PointDeVente'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Point De Vente'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('img_id',array('options'=>$Imgs));
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

		<li><?php echo $this->Html->link(__('List Point De Ventes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
	</ul>
</div>
