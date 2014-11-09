<div class="texts form">
<?php echo $this->Form->create('Text'); ?>
	<fieldset>
		<legend><?php echo __('Edit Text'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Text.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Text.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Texts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cms'), array('controller' => 'cms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cm'), array('controller' => 'cms', 'action' => 'add')); ?> </li>
	</ul>
</div>
