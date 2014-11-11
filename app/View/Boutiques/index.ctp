<br>
<div class="row panel">
<?php foreach ($boutique as $key):?>
<div class="large-6 medium-6 small-12 columns" >
<div class="panel" style="height:500px;" >
	<h2 class="text-center" ><?php echo  $key['Article']['name'];?></h2>
	<?php
	echo $this->Html->image('import/'.$key['Img']['value'],array('width'=>'100%'));?>
		<p>price: <b><?php echo $key['Article']['prix'] ?>€ </b></p>
		<?php echo $this->Html->link('add',array(
			'controller'=>'boutiques',
			'action'=>'addArticle',
			$key['Article']['id'],1	
							)) ?>
	<p class="text-justify"><?php  echo $key['Article']['description']?></p>
	
</div>
</div>


<?php endforeach;?>
</div>

