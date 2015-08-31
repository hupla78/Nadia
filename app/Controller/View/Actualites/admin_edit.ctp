<div class="actualites form">
<?php echo $this->Form->create('Actualite'); ?>
	<fieldset>
		<legend><?php echo __('Edit Actualite'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('titre');
		echo $this->Form->input('text');
		echo $this->Form->input('image_id',array('options'=>$imgs));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Actualite.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Actualite.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Actualites'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
	</ul>
</div>
