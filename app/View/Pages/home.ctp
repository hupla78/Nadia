



 
                 
<div class="espacejj">
       
        <ul class="example-orbit" data-orbit>

               
               
               <?php  $count = 0; foreach($Acms->getAll('slider') as $key): ?>
                  <li >
    <?php   echo $Acms->getEditionPage('slider'.$count++);
            
            echo $this->Html->image('import/'.$key, array('width'=>'100%'));


                      ?>
                  
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
             




 <div class="large-12 columns medium-12 columns small-12 columns ">


      <div class="large-6 columns medium-6 columns small-6 columns ">
<p id="nousre2"> La nouvelle collection  </p>
     </div>

 <div class="large-6 columns medium-6 columns small-6 columns mise-forme">

           <?php echo $this->Html->link('Découvrir la nouvelle collection',array('prefix'=>false,
			'controller'=>'actualites',
			'action'=>'index'))?></p>

          </div>
          <div class="trait3">
			 </div>
</div>

            <!-- Article page Home -->



  <?php
  echo $this->element('article-home',array('arti'=>$Acms->getOne('article-home-1'),'name'=>'article-home-1'));

  echo $this->element('article-home',array('arti'=>$Acms->getOne('article-home-2'),'name'=>'article-home-2'));

  echo $this->element('article-home',array('arti'=>$Acms->getOne('article-home-3'),'name'=>'article-home-3'));

  ?>


         <!-- Fin Articles de la page Home -->
