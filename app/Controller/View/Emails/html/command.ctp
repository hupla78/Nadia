<ul>
    <li>Adresse:

    <?php echo($adresse['name'].'<br>'
                                               .$adresse['num_rue'].' '
                                               .$adresse['rue'].' <br>'
                                               .$adresse['codePostal'].' '
                                               .$adresse['vile']
                                              ); ?>
    </li>

    <li>
        Prix:
        <?php echo($prix); ?>
    </li>

    <li>
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
	<?php foreach ($commandlist as $key):?>
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
		echo $commandlist['Total']
		?>€ </td>
	</tr>

</table>
    </li>
</ul>
