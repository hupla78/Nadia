

        <div class="large-6 columns medium-6 columns small-6 columns espacejj">

        <div class="trait"></div>

<?php
if($panier==null):?>
<?php echo "Le Panier est vide";?>


<?php echo $this->Html->link('Retourner dans la boutique',array('prefix'=>false,
			'controller'=>'boutiques',
			'action'=>'index',
			$panier['Article']['id']));?></p>



<?php else: ?>
<table>
	<thead>

		<tr>

			<th class="tabb">Nom</th>
			<th class="tabb">Quantite</th>
			<th class="tabb">Prix</th>
			<th class="tabb">Total</th>
		</tr>
	</thead>
	<?php $total = 0;?>
	<?php foreach ($panier as $key):?>
	<?php
	 if(is_array($key)and key($key)!="adresseId" ):?>
	<tr>
		<td><?php echo $key['Article']['name']?></td>
		<td>
            <span class="moin">
		<?php
		echo $this->Html->link('- ',array('controller'=>'boutiques','action'=>'subArticle',$key['Article']['id']),array('class'=>'buttonpanierr'));?>
            </span>

           <?php

		echo $key['nombre'];?>

		     <span class="plus">
		<?php
		echo $this->Html->link(' +',array('controller'=>'boutiques','action'=>'addArticle',$key['Article']['id']),array('class'=>'buttonpanierr'));
		?>
            </span>
		</td>
		<td><?php echo $key['Article']['prix']?>€</td>
		<td><?php 
			
		$cal = $key['nombre'] * $key['Article']['prix'];
		$total = $cal + $total;
			echo $cal; ?>€
 		</td>
	<tr>
	<?php endif;?>
	<?php endforeach;?>

	<tr>
		<td colspan="3">Total</td>
		<td colspan="1"><?php
		echo $panier['Total']
		?>€ </td>
	</tr>

</table>
</div>

<div class="large-6 columns medium-6 columns small-6 columns espacejjj ">

<?php
            if(!SessionComponent::read('Auth.User.id')){
echo $this->Html->link('Inscription',array('controller'=>'users','action'=>'inscription'),array('class'=>'inscri'));

echo $this->Html->link('Connection',array('controller'=>'users','action'=>'login'),array('class'=>'inscri'));
        }else{
echo $this->Html->link('Payement de son panier',array('controller'=>'Boutiques','action'=>'command'),array('class'=>'inscri'));
        }

?>


<?php endif;?>

</div>
