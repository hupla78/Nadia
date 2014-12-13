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
		<td>
		<?php
		echo $this->Html->link('-',array('controller'=>'boutiques','action'=>'subArticle',$key['Article']['id']));
		echo $key['nombre'];
		echo $this->Html->link('+',array('controller'=>'boutiques','action'=>'addArticle',$key['Article']['id']));
		?>
		
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
		<td colspan="3">total</td>
		<td colspan="1"><?php
		echo $panier['Total']
		?>€ </td>
	</tr>

</table>

<?php
            if(!SessionComponent::read('Auth.User.id')){
echo $this->Html->link('Inscription',array('controller'=>'users','action'=>'inscription'));
echo $this->Html->link('Connection',array('controller'=>'users','action'=>'login'));
        }else{
echo $this->Html->link('achat',array('controller'=>'Boutiques','action'=>'command'));
        }

?>


<?php endif;?>


