<div class="colors form">
<?php echo $this->Form->create('Color'); ?>
	<fieldset>
		<legend><?php echo __('Edit Color'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('value',array('type'=>'color'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Color.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Color.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Colors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cms'), array('controller' => 'cms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cm'), array('controller' => 'cms', 'action' => 'add')); ?> </li>
	</ul>
</div>
