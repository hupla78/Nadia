<div class="boutiques view">
<h2><?php echo __('Boutique'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($boutique['Boutique']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Achat'); ?></dt>
		<dd>
			<?php echo h($boutique['Boutique']['achat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($boutique['User']['id'], array('controller' => 'users', 'action' => 'view', $boutique['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($boutique['Boutique']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($boutique['Boutique']['updated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Panier'); ?></dt>
		<dd>
			<?php echo h($boutique['Boutique']['panier']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Boutique'), array('action' => 'edit', $boutique['Boutique']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Boutique'), array('action' => 'delete', $boutique['Boutique']['id']), array(), __('Are you sure you want to delete # %s?', $boutique['Boutique']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Boutiques'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Boutique'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
