<div class="adressePofiles view">
<h2><?php echo __('Adresse Pofile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($adressePofile['AdressePofile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($adressePofile['AdressePofile']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rue'); ?></dt>
		<dd>
			<?php echo h($adressePofile['AdressePofile']['rue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Rue'); ?></dt>
		<dd>
			<?php echo h($adressePofile['AdressePofile']['num_rue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CodePostal'); ?></dt>
		<dd>
			<?php echo h($adressePofile['AdressePofile']['codePostal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vile'); ?></dt>
		<dd>
			<?php echo h($adressePofile['AdressePofile']['vile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($adressePofile['User']['id'], array('controller' => 'users', 'action' => 'view', $adressePofile['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Adresse Pofile'), array('action' => 'edit', $adressePofile['AdressePofile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Adresse Pofile'), array('action' => 'delete', $adressePofile['AdressePofile']['id']), array(), __('Are you sure you want to delete # %s?', $adressePofile['AdressePofile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Adresse Pofiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adresse Pofile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
