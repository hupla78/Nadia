<div class="texts view">
<h2><?php echo __('Text'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($text['Text']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($text['Text']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($text['Text']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Text'), array('action' => 'edit', $text['Text']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Text'), array('action' => 'delete', $text['Text']['id']), array(), __('Are you sure you want to delete # %s?', $text['Text']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Text'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cms'), array('controller' => 'cms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cm'), array('controller' => 'cms', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cms'); ?></h3>
	<?php if (!empty($text['Cm'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Img Id'); ?></th>
		<th><?php echo __('Article Id'); ?></th>
		<th><?php echo __('Categorie Id'); ?></th>
		<th><?php echo __('Value Id'); ?></th>
		<th><?php echo __('Text Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($text['Cm'] as $cm): ?>
		<tr>
			<td><?php echo $cm['id']; ?></td>
			<td><?php echo $cm['name']; ?></td>
			<td><?php echo $cm['type']; ?></td>
			<td><?php echo $cm['img_id']; ?></td>
			<td><?php echo $cm['article_id']; ?></td>
			<td><?php echo $cm['categorie_id']; ?></td>
			<td><?php echo $cm['value_id']; ?></td>
			<td><?php echo $cm['text_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cms', 'action' => 'view', $cm['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cms', 'action' => 'edit', $cm['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cms', 'action' => 'delete', $cm['id']), array(), __('Are you sure you want to delete # %s?', $cm['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cm'), array('controller' => 'cms', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
