<div class="actualites view">
<h2><?php echo __('Actualite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Id'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['image_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actualite'), array('action' => 'edit', $actualite['Actualite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actualite'), array('action' => 'delete', $actualite['Actualite']['id']), array(), __('Are you sure you want to delete # %s?', $actualite['Actualite']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Actualites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actualite'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Imgs'); ?></h3>
	<?php if (!empty($actualite['Img'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id User'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Cm Id'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($actualite['Img'] as $img): ?>
		<tr>
			<td><?php echo $img['id']; ?></td>
			<td><?php echo $img['id_user']; ?></td>
			<td><?php echo $img['name']; ?></td>
			<td><?php echo $img['created']; ?></td>
			<td><?php echo $img['modified']; ?></td>
			<td><?php echo $img['cm_id']; ?></td>
			<td><?php echo $img['value']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'imgs', 'action' => 'view', $img['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'imgs', 'action' => 'edit', $img['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'imgs', 'action' => 'delete', $img['id']), array(), __('Are you sure you want to delete # %s?', $img['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
