<div class="large-4 columns medium-4 columns small-12 columns hul">

    	     <div class="large-12 medium-12 small-6 columns">

     	    <?php   if(array_key_exists('value',$arti['Img']))
                        echo $this->Html->image('import/'.$arti['Img']['value'],array());
                    else
                        echo $this->Html->image('noImg.jpg',array());
                 ?>

    	     </div>
            <div class="large-12 medium-12 small-6 columns">

    <p id="dessous">
                         <?php echo ($arti['name']); ?>
                         <?php echo ($arti['prix'].'€'); ?>
<p>
        <?php echo $this->Html->link('En savoir plus',array('prefix'=>false,
			'controller'=>'boutiques',
			'action'=>'view',
			$arti['id']));?>
</p>




    </p>

    <p id="prix-article">

		<?php echo $this->Html->link('Ajouter au panier',array(
			'controller'=>'boutiques',
			'action'=>'addArticle',
			$arti['id'],1));?>

		<?php echo $this->Html->image('panierajout.png',array('width'=>'30px','height'=>'30px', 'url'=>array(
			'controller'=>'boutiques',
			'action'=>'addArticle',
			$arti['id'],1)));?>

    </p>
        <?php echo $Acms->getEditionPage($name); ?>
            </div>

 </div>
