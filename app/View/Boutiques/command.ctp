<div class="large-12 columns medium-12 columns small-12 columns espacejj">
<p class="recap">Récapitulatif de votre commande</p>


<table class="tailletab">
	<thead>

		<tr>

			<th class="tabb">Nom</th>

			<th class="tabb2">Quantite</th>

			<th class="tabb2">Prix</th>

			<th class="tabb2">Total</th>
		</tr>
	</thead>


	<?php $total = 0;?>
	<?php foreach ($panier as $key):?>
	<?php
	 if(is_array($key)and key($key)!="adresseId" ):?>
	<tr>
		<td><?php echo $key['Article']['name']?></td>
		<td>


           <?php

		echo $key['nombre'];?>


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



<?php 

echo $this->Html->link("Choix l'adresse de livraison",array('controller'=>'Boutiques','action'=>'choixAdresse'),array('class'=>'livraison button'));
?>
</div>
