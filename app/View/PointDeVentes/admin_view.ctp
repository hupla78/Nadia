<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Point De Vente'), array('action' => 'edit', $pointDeVente['PointDeVente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Point De Vente'), array('action' => 'delete', $pointDeVente['PointDeVente']['id']), array(), __('Are you sure you want to delete # %s?', $pointDeVente['PointDeVente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Point De Ventes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point De Vente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="pointDeVentes view">
<h2><?php echo __('Point De Vente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pointDeVente['PointDeVente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pointDeVente['PointDeVente']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($pointDeVente['PointDeVente']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pointDeVente['Img']['name'], array('controller' => 'imgs', 'action' => 'view', $pointDeVente['Img']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rue'); ?></dt>
		<dd>
			<?php echo h($pointDeVente['PointDeVente']['rue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Rue'); ?></dt>
		<dd>
			<?php echo h($pointDeVente['PointDeVente']['num_rue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CodePostal'); ?></dt>
		<dd>
			<?php echo h($pointDeVente['PointDeVente']['codePostal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vile'); ?></dt>
		<dd>
			<?php echo h($pointDeVente['PointDeVente']['vile']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
