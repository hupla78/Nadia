
<div class="large-12 medium-12 small-12 columns " >
<div class="panel row "  >


<p class="text-center1 hide-for-medium" ><?php echo  $article['Article']['name'];?></p>


 <ul class="example-orbit" data-orbit>

<li>
<?php
if($article['Img']['value'] == null){
	echo $this->Html->image('noImg.jpg',array('width'=>'80%', 'style'=>'max-height:800px', 'class'=>'element-article-img '));
}else{
	echo $this->Html->image('import/'.$article['Img']['value'],array('width'=>'60%', 'style'=>'max-height:800px', 'class'=>'element-article-img '));
}
?>
</li>

<li>
<?php
if($article['Img']['value'] == null){
	echo $this->Html->image('noImg.jpg',array('width'=>'80%', 'style'=>'max-height:800px', 'class'=>'element-article-img '));
}else{
	echo $this->Html->image('import/'.$article['Img']['value'],array('width'=>'60%', 'style'=>'max-height:800px', 'class'=>'element-article-img '));
}
?>
</li>


<li>
<?php
if($article['Img']['value'] == null){
	echo $this->Html->image('noImg.jpg',array('width'=>'60%', 'style'=>'max-height:800px', 'class'=>'element-article-img '));
}else{
	echo $this->Html->image('import/'.$article['Img']['value'],array('width'=>'80%', 'style'=>'max-height:800px', 'class'=>'element-article-img '));
}
?>
</li>






    </ul>









<div class="large-9 medium-8 small-7 columns" >
		<p id="prix-article2">Prix: <b><?php echo $article['Article']['prix'] ?>€ </b>
		</p>

		</div>


		<div class="large-3 medium-4 small-5 columns" >

<p id="prix-article">

		<?php echo $this->Html->link('Ajouter au panier',array(
			'controller'=>'boutiques',
			'action'=>'addArticle',
			$article['Article']['id'],1));?>


		<?php echo $this->Html->image('panierajout.png',array('width'=>'30px','height'=>'30px', 'url'=>array(
			'controller'=>'boutiques',
			'action'=>'addArticle',
			$article['Article']['id'],1)));?>

			</p>
			</div>






			<div class=" large-12 medium-12 small-12 columns "><p class="surarticle">

	    <?php  echo $article['Article']['description']?>
	</p>
	<p class="savoir-article" ><?php echo $this->Html->link('Retourner dans la boutique',array('prefix'=>false,
			'controller'=>'boutiques',
			'action'=>'index',
			$article['Article']['id']));?></p>
	</div>


</div>
</div>
