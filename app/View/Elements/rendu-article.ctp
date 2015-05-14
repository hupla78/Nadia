<div class="large-6 medium-12 small-12 columns hauteur-elmt" >
<div class="panel row transition-souris hauteur-elmt"  >
	
	<p class="text-center1 hide-for-medium" ><?php echo  $key['Article']['name'];?></p>

	<div class="large-12 medium-6 small-12 columns element-bordure" >
	<?php
if($key['Img']['value']!=null){
	echo $this->Html->image('import/'.$key['Img']['value'],array('width'=>'100%', 'style'=>'max-height:600px', 'class'=>'element-article-img '));
}else{
	echo $this->Html->image('noImg.jpg',array('width'=>'100%', 'style'=>'max-height:600px', 'class'=>'element-article-img '));

}
        ?>
		
		</div>
		
			<p class="text-center1 show-for-medium" ><?php echo  $key['Article']['name'];?></p>

			<div class="position-bas">
<div class="large-6 medium-3 small-6 columns" >
		<p id="prix-article">Prix: <b><?php echo $key['Article']['prix'] ?>€ </b>
		</p>
		
		</div>
			
		<div class="large-6 medium-3 small-6 columns" >
		<p id="prix-article">
		

		<?php echo $this->Html->link('Ajouter au panier',array(
			'controller'=>'boutiques',
			'action'=>'addArticle',
			$key['Article']['id'],1));?>

		<?php echo $this->Html->image('panierajout.png',array('width'=>'30px','height'=>'30px', 'url'=>array(
			'controller'=>'boutiques',
			'action'=>'addArticle',
			$key['Article']['id'],1)));?>
					

			</p>
</div>

    <div class=" large-12 medium-12 small-12 columns ">
        <p class="txt-debordement-article">

	    <?php  echo $key['Article']['description']?>
	</p>
	<p class="savoir-article" ><?php echo $this->Html->link('En savoir plus',array('prefix'=>false,
			'controller'=>'boutiques',
			'action'=>'view',
			$key['Article']['id']));?></p>
	</div>
</div>
</div>
</div>
