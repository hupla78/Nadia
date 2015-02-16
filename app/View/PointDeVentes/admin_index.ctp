<div class="pointDeVentes index">
	<h2><?php echo __('Point De Ventes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('img_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rue'); ?></th>
			<th><?php echo $this->Paginator->sort('num_rue'); ?></th>
			<th><?php echo $this->Paginator->sort('codePostal'); ?></th>
			<th><?php echo $this->Paginator->sort('vile'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pointDeVentes as $pointDeVente): ?>
	<tr>
		<td><?php echo h($pointDeVente['PointDeVente']['id']); ?>&nbsp;</td>
		<td><?php echo h($pointDeVente['PointDeVente']['name']); ?>&nbsp;</td>
		<td><?php echo h($pointDeVente['PointDeVente']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pointDeVente['Img']['name'], array('controller' => 'imgs', 'action' => 'view', $pointDeVente['Img']['id'])); ?>
		</td>
		<td><?php echo h($pointDeVente['PointDeVente']['rue']); ?>&nbsp;</td>
		<td><?php echo h($pointDeVente['PointDeVente']['num_rue']); ?>&nbsp;</td>
		<td><?php echo h($pointDeVente['PointDeVente']['codePostal']); ?>&nbsp;</td>
		<td><?php echo h($pointDeVente['PointDeVente']['vile']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pointDeVente['PointDeVente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pointDeVente['PointDeVente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pointDeVente['PointDeVente']['id']), array(), __('Are you sure you want to delete # %s?', $pointDeVente['PointDeVente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
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
		<li><?php echo $this->Html->link(__('New Point De Vente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
	</ul>
</div>
