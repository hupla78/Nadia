<div class="cms view">
<h2><?php echo __('Cm'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cm['Cm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cm['Cm']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($cm['Cm']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cm'), array('action' => 'edit', $cm['Cm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cm'), array('action' => 'delete', $cm['Cm']['id']), array(), __('Are you sure you want to delete # %s?', $cm['Cm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cm'), array('action' => 'add')); ?> </li>
	</ul>
</div>
