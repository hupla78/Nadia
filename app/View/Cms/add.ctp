<div class="cms form">
<?php echo $this->Form->create('Cm'); ?>
	<fieldset>
		<legend><?php echo __('Add Cm'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('value');
		echo $this->Form->input('img_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
	</ul>
</div>
