<fieldset>
    <legend>Vos informations</legend>
    <?php
echo $this->Form->create('User');

echo $this->Form->input('username');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->input('passwordVerif',array('type'=>'password'));
    ?>
</fieldset>

<fieldset>
    <legend>Adresse</legend>
    <?php
echo $this->Form->input('adresseProfile.name',
                        array('value'=>'chez moi',
                              'label'=>'adress de livraison'));

echo $this->Form->input('adresseProfile.num_rue',
                        array('label'=>'numero',
                              'div'=>array('class' =>'columns large-1 medium-2 small-3')));

echo $this->Form->input('adresseProfile.rue',
                        array('div'=>array('class'=>'columns large-11 medium-10  small-9')));

echo $this->Form->input('adresseProfile.codePostal',
                        array('div'=>array('class'=>'columns large-1 medium-2 small-3')));

echo $this->Form->input('adresseProfile.vile',
                        array('div'=>array('class'=>'columns large-11 medium-10 small-9')));
    ?>
</fieldset>

<fieldset>
    <legend>Information Suplémentaire</legend>
    <?php echo $this->Form->input('Téléphone'); ?>

</fieldset>

<?php

echo $this->Form->submit('Inscription',array('class'=>'button'));
echo $this->Form->end();

?>
