<div class="panierCommands index">
	<h2><?php echo __('Commande'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('adresse_pofile_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($panierCommands as $panierCommand): ?>
	<tr>
		<td><?php echo h($panierCommand['PanierCommand']['id']); ?>&nbsp;</td>
		<td><?php echo h($panierCommand['PanierCommand']['created']); ?>&nbsp;</td>
		<td><?php echo h($panierCommand['PanierCommand']['updated']); ?>&nbsp;</td>

		<td>
			<?php echo $this->Html->link($panierCommand['User']['id'], array('controller' => 'users', 'action' => 'view', $panierCommand['User']['id'])); ?>
		</td>
		<td><?php echo h($panierCommand['PanierCommand']['state']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($panierCommand['AdressePofile']['name'], array('controller' => 'adresse_pofiles', 'action' => 'view', $panierCommand['AdressePofile']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $panierCommand['PanierCommand']['id'])); ?><br>
			<?php echo $this->Html->link(__('a ete evoyé'), array('action' => 'isSend', $panierCommand['PanierCommand']['id'])); ?>
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

