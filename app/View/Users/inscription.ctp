
<?php

echo $this->Form->create('User');
?>
<fieldset>
	<legend>Vos infos</legend>
<?php 
echo $this->Form->input('username');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->input('passwordVerif',array('type'=>'password'));
?>
</fieldset>

<fieldset>
	<legend>adresse</legend>
<?php 
echo $this->Form->input('adresseProfile.name',array('value'=>'chez moi','label'=>'adress de livraison'));
echo $this->Form->input('Rue',array('div'=>array('class' =>'columns large-1 medium-2 small-3')));
echo $this->Form->input('Adresse',array('div'=>array('class'=>'columns large-11 medium-10  small-9')));
echo $this->Form->input('Code',array('div'=>array('class'=>'columns large-1 medium-2 small-3')));
echo $this->Form->input('Vile',array('div'=>array('class'=>'columns large-11 medium-10 small-9')));
?>
</fieldset>

<fieldset>
	<legend>Information Suplémentaire</legend>
	<?php echo $this->Form->input('Téléphone'); ?>

</fieldset>

<?php 
echo $this->Form->end('inscription',array('class'=>'buton'));
?>
