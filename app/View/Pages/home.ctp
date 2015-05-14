


<!-- Slider de la page Home -->


<div class="espacejj">

        <ul class="example-orbit" data-orbit>



               <?php  $count = 0; foreach($Acms->getAll('slider') as $key): ?>
                  <li >
    <?php   echo $Acms->getEditionPage('slider'.$count++);

            echo $this->Html->image('import/'.$key, array('width'=>'100%'));?>

                  </li>
          <?php endforeach; ?>


        </ul>
</div>
     
<!-- Fin Slider -->
     
     
 <div class="trait2">
			 </div>



			<!-- Texte de présentation de la page -->




<p id="accroche">

            <?php echo $Acms->getOne('texte-presentation-home'); ?>

            <?php echo $Acms->getEditionPage('texte-presentation-home'); ?>

</p>

            <!-- Fin Texte présentation -->

 <div class="trait3">
			 </div>

<p id="nousre"> Les Nouveautés </p>

            <!-- Article page Home -->



  <?php
  echo $this->element('article-home',array('arti'=>$Acms->getOne('article-home-1'),'name'=>'article-home-1'));
  echo $this->element('article-home',array('arti'=>$Acms->getOne('article-home-2'),'name'=>'article-home-2'));
  echo $this->element('article-home',array('arti'=>$Acms->getOne('article-home-3'),'name'=>'article-home-3'));

  ?>

         <!-- Fin Articles de la page Home -->
