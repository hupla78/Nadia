<div class="panierCommands view">
<h2><?php echo __('Panier Command'); ?></h2>
	<dl>
		<dt><?php echo __('numéro de la commande'); ?></dt>
		<dd>
			<?php echo h($panierCommand['PanierCommand']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('fais le '); ?></dt>
		<dd>
			<?php echo h($panierCommand['PanierCommand']['created']); ?>
			&nbsp;
		</dd>


		<dt><?php echo __('Adresse Pofile'); ?></dt>
		<dd>
			<?php echo $this->Html->link($panierCommand['AdressePofile']['name'], array('controller' => 'adresse_pofiles', 'action' => 'view', $panierCommand['AdressePofile']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Mes Articles'); ?></h3>
	<?php if (!empty($panierCommand['PanierVente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>

		<th><?php echo __('name'); ?></th>
		<th><?php echo __('Quantité'); ?></th>
		<th><?php echo __('Prix'); ?></th>

	</tr>
	<?php foreach ($article as $art): ?>
		<tr>

            <td><?php echo $this->Html->link($art['Article']['name'],array('controller'=>'boutiques','action'=>'view',$art['Article']['id'])); ?></td>

			<td><?php echo $art['PanierVente']['q']; ?></td>
			<td><?php echo $art['PanierVente']['p']; ?></td>

		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
