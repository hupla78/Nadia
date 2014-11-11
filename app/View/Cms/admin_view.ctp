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
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($cm['Cm']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cm['Img']['name'], array('controller' => 'imgs', 'action' => 'view', $cm['Img']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cm['Article']['name'], array('controller' => 'articles', 'action' => 'view', $cm['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cm['Categorie']['name'], array('controller' => 'categories', 'action' => 'view', $cm['Categorie']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cm['Value']['name'], array('controller' => 'values', 'action' => 'view', $cm['Value']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cm['Text']['name'], array('controller' => 'texts', 'action' => 'view', $cm['Text']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cm['img']['name'], array('controller' => 'imgs', 'action' => 'view', $cm['img']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>

		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Values'), array('controller' => 'values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Value'), array('controller' => 'values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Text'), array('controller' => 'texts', 'action' => 'add')); ?> </li>

	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Imgs'); ?></h3>
	<?php if (!empty($cm['Img'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id User'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Format'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Cm Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cm['Img'] as $img): ?>
		<tr>
			<td><?php echo $img['id']; ?></td>
			<td><?php echo $img['id_user']; ?></td>
			<td><?php echo $img['name']; ?></td>
			<td><?php echo $img['format']; ?></td>
			<td><?php echo $img['created']; ?></td>
			<td><?php echo $img['modified']; ?></td>
			<td><?php echo $img['cm_id']; ?></td>
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
