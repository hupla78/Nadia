<div class="colors index">
	<h2><?php echo __('Couleurs'); ?></h2>
	<table cellpadding="10" cellspacing="5">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($colors as $color): ?>
	<tr>
		<td><?php echo h($color['Color']['id']); ?>&nbsp;</td>
		<td><?php echo h($color['Color']['name']); ?>&nbsp;</td>
		<td style="background :<?php echo h($color['Color']['value']); ?>"> &nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $color['Color']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $color['Color']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $color['Color']['id']), array(), __('Are you sure you want to delete # %s?', $color['Color']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),array('class'=>'couleurs')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Color'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cms'), array('controller' => 'cms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cm'), array('controller' => 'cms', 'action' => 'add')); ?> </li>
	</ul>
</div>
