<div class="adressePofiles form">
<?php echo $this->Form->create('AdressePofile'); ?>
	<fieldset>
		<legend><?php echo __('Création d\'une nouvelle adresse'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('num_rue',array('label'=>'N° rue'));
		echo $this->Form->input('rue');
		echo $this->Form->input('codePostal');
		echo $this->Form->input('vile');

	?>
	</fieldset>
<?php
echo $this->Form->submit('création',array('class'=>'button center'));  ?>

<?php echo $this->Form->end(); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Mes adresseé'), array('action' => 'index')); ?></li>

	</ul>
</div>
