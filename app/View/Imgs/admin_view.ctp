<div class="imgs view">
<h2><?php echo __('Img'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($img['Img']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id User'); ?></dt>
		<dd>
			<?php echo h($img['Img']['id_user']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($img['Img']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Format'); ?></dt>
		<dd>
			<?php echo h($img['Img']['format']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($img['Img']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($img['Img']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Img'), array('action' => 'edit', $img['Img']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Img'), array('action' => 'delete', $img['Img']['id']), array(), __('Are you sure you want to delete # %s?', $img['Img']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cms'), array('controller' => 'cms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cm'), array('controller' => 'cms', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Cms'); ?></h3>
	<?php if (!empty($img['cm'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $img['cm']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
	<?php echo $img['cm']['name']; ?>
&nbsp;</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
	<?php echo $img['cm']['value']; ?>
&nbsp;</dd>
		<dt><?php echo __('Img Id'); ?></dt>
		<dd>
	<?php echo $img['cm']['img_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Cm'), array('controller' => 'cms', 'action' => 'edit', $img['cm']['id'])); ?></li>
			</ul>
		</div>
	</div>
	