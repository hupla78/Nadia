<div class="cms form">
<?php echo $this->Form->create('Cm'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Cm'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('value');
        echo $this->Form->input('img_id',array('options'=>array($imgPossi)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cm.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cm.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cms'), array('action' => 'index')); ?></li>
	</ul>
</div>
