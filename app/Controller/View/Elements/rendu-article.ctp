<div class="large-6 medium-12 small-12 columns hauteur-elmt" >
    <div class="panel row transition-souris hauteur-elmt"  >

        <?php echo($Acms->getEdit('articles',$key['Article']['id'])); ?>
        <div class="place-elt">
            <p class="text-center1" ><?php echo  $key['Article']['name'];?></p>

            <ul class="example-orbit" data-orbit
                 data-options="
                  pause_on_hover:false;
                  ">
                <?php foreach($key['Img'] as $oneimg ): ?>


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

        <div class=" large-12 medium-12 small-12 columns ">

            <div class="large-6 medium-6 small-6 columns" >
                <p id="prix-article">    Prix: <b><?php echo $key['Article']['prix'] ?>€        </b>    </p>
                <p id="quantity">        Disponible: <b><?php echo $key['Article']['quantity']?>    </b>    </p>
            </div>

            <div class="large-6 medium-6 small-6 columns" >
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
