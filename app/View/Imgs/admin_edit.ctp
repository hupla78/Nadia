<div class="imgs form">
<?php echo $this->Form->create('Img'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Img'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_user');
		echo $this->Form->input('name');
		echo $this->Form->input('format');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Img.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Img.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cms'), array('controller' => 'cms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cm'), array('controller' => 'cms', 'action' => 'add')); ?> </li>
	</ul>
</div>
