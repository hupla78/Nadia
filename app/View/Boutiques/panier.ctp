<?php
if($panier==null):?>
<?php echo "panier vide";?>
<?php else: ?>
<div clas="row">
<div class="large-12 mediums-12 small-12 columns">

<table class="tableau-panier">
	
	
	<thead >
		<tr>
			<th>Nom</th>
			<th>Nombre</th>
			<th>Prix</th>
			<th>Total</th>
		</tr>
	</thead>
	
	<?php $total = 0;?>
	<?php foreach ($panier as $key):?>
	<?php if(is_array($key)):?>
	<tr>
		<td><?php echo $key['Article']['name']?></td>
		<td >
		
		<?php
		echo $this->Html->link('-',array('controller'=>'boutiques','action'=>'subArticle',$key['Article']['id']),array('class'=>'le-plus'));?>
		
		
		<?php
		echo $key['nombre'];?>
		
		<?php
		echo $this->Html->link('+',array('controller'=>'boutiques','action'=>'addArticle',$key['Article']['id']),array('class'=>'le-plus'));
		?>
		
		</td>
		<td><?php echo $key['Article']['prix']?>€</td>
		<td><?php 
			
		$cal = $key['nombre'] * $key['Article']['prix'];
		$total = $cal + $total;
			echo $cal; ?>€
 		</td>
 		</tr>
	
	<?php endif;?>
	<?php endforeach;?>

	<tr>
		<td colspan="3">Total</td>
		<td id="boldprice" colspan="1"><?php
		echo $panier['Total']
		?>€ </td>
	</tr>

</table>
</div>
</div>

<div class="large-12 mediums-12 small-12 columns achat-paypal">
<p class="button [radius round] style-bouton">
<?php
echo $this->Html->link('Achat',array('controller'=>'users','action'=>'inscription'),array('class'=>'couleur-bouton-a'));
?>
</p>
</div>

<?php endif;?>


