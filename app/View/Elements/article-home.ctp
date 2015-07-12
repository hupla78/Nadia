
    	     <div class="large-4 columns medium-4 columns small-12 columns  hauteur-home ">
    <div class="panel row transition-souris  hauteur-home "  >
    	     <div class="large-12 medium-12 small-6 columns place-elt2">
    	            <p id="dessous">
                         <?php echo ($arti['name']); ?>




    </p>

            <ul class="example-orbit" data-orbit>
    <?php foreach($arti['Img'] as $oneimg ): ?>

                <li>
                    <?php
                        if($oneimg['value']!=null){
                            echo $this->Html->image('import/'.$oneimg['value'],array('width'=>'100%', 'style'=>'max-height:400px', 'class'=>'element-article-img '));
                        }else{
                            echo $this->Html->image('noImg.jpg',array('width'=>'100%', 'style'=>'max-height:400px', 'class'=>'element-article-img '));

                        }
                    ?>


                </li>
                <?php endforeach; ?>
                </ul>

    	     </div>
            <div class="large-12 medium-12 small-6 columns ">





<div class="large-6 medium-3 small-6 columns" >
		<p id="prix-article">Prix: <b><?php echo ($arti['prix'].'€'); ?></b></p>
		<p id="disponible">Dispo: <b><?php echo ($arti['quantity']); ?></b></p>

		</div>

		<div class="large-6 medium-3 small-6 columns" >
		<p id="prix-article">




		<?php echo $this->Html->image('panierajout.png',array('width'=>'30px','height'=>'30px', 'url'=>array(
			'controller'=>'boutiques',
			'action'=>'addArticle',
			$arti['id'],1)));?>



			</p>
</div>

<p id="prix-article">



    <br>
        <?php echo $this->Html->link('En savoir plus',array('prefix'=>false,
			'controller'=>'boutiques',
			'action'=>'view',
			$arti['id']));?>
</p>
        <?php echo $Acms->getEditionPage($name); ?>
            </div>

 </div>
</div>
