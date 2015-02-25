<div class="adressePofiles index">
	<h2><?php echo __('Mes Adresse'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('rue'); ?></th>
			<th><?php echo $this->Paginator->sort('num_rue'); ?></th>
			<th><?php echo $this->Paginator->sort('codePostal'); ?></th>
			<th><?php echo $this->Paginator->sort('vile'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($adressePofiles as $adressePofile): ?>
	<tr>
		<td><?php echo h($adressePofile['AdressePofile']['id']); ?>&nbsp;</td>
		<td><?php echo h($adressePofile['AdressePofile']['name']); ?>&nbsp;</td>
		<td><?php echo h($adressePofile['AdressePofile']['rue']); ?>&nbsp;</td>
		<td><?php echo h($adressePofile['AdressePofile']['num_rue']); ?>&nbsp;</td>
		<td><?php echo h($adressePofile['AdressePofile']['codePostal']); ?>&nbsp;</td>
		<td><?php echo h($adressePofile['AdressePofile']['vile']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($adressePofile['User']['id'], array('controller' => 'users', 'action' => 'view', $adressePofile['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $adressePofile['AdressePofile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $adressePofile['AdressePofile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $adressePofile['AdressePofile']['id']), array(), __('Are you sure you want to delete # %s?', $adressePofile['AdressePofile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Adresse Pofile'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
