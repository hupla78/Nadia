
<div class="">
<?php 


echo $this->Form->create('');

echo '<div class="choixAdress large-9 columns"> <div class = "check large-6 small-12  columns">';
echo $this->Form->radio('adresse',$adresse, array('separator'=>'</div><div class = "check large-6 small-12 columns">','legend' => false));
echo '</div></div>';


?>

<div class="large-3 small-12 columns">


<?php
echo $this->Form->submit("suivant",array(
                                    'class'=>'button',
                                    'div'=>false));

echo $this->Html->link('Crée une adresse',array(
                    'controller'=>'AdressePofiles',
                    'action'=>'add'),
                                array('class'=>'button'));

echo $this->Form->end();






?>
</div>




</div>
