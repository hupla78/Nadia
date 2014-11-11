<?php
if($panier==null):?>
<?php echo "panier vide";?>
<?php else: ?>
<table>
	<thead>
		<tr>
			<th>nom</th>
			<th>nombre</th>
			<th>prix</th>
			<th>total</th>
		</tr>
	</thead>
	<?php $total = 0;?>
	<?php foreach ($panier as $key):?>
	<?php if(is_array($key)):?>
	<tr>
		<td><?php echo $key['Article']['name']?></td>
		<td><?php echo $key['nombre']?></td>
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
		<td colspan="3">total</td>
		<td colspan="1"><?php
		echo $panier['Total']
		?>€ </td>
	</tr>

</table>

<?php
echo $this->Html->link('achat',array('controller'=>'users','action'=>'inscription'));
?>


<?php endif;?>


