


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

 <div class="large-4 columns medium-4 columns small-12 columns hul">
     	    <?php  echo $this->Html->image('import/'.$Acms->getOne('article-home1'), array('width'=>'100%'));?>
                  
                   <?php echo $Acms->getEditionPage('article-home1'); ?>
                  
                  <p id="dessous">
                        
                        <?php echo $Acms->getOne('texte-presentation-article1-home-courte'); ?>
                         
                         <?php echo $Acms->getEditionPage('texte-presentation-article1-home-courte'); ?>
                        
                  </p>
 </div>
      
      
 <div class="large-4 columns medium-4 columns small-12 columns hul">
     	    <?php  echo $this->Html->image('import/'.$Acms->getOne('article-home2'), array('width'=>'100%'));?>
                   
                    <?php echo $Acms->getEditionPage('article-home2'); ?>
                   
                   <p id="dessous">
                           
                           
                           
                           <?php echo $Acms->getOne('texte-presentation-article2-home-courte'); ?>
                            
                            
                            <?php echo $Acms->getEditionPage('texte-presentation-article2-home-courte'); ?>
                           
                  </p>
</div>
      
      
 <div class="large-4 columns medium-4 columns small-12 columns hul">  
     	    <?php  echo $this->Html->image('import/'.$Acms->getOne('article-home3'), array('width'=>'100%'));?>	
                   
                    <?php echo $Acms->getEditionPage('article-home3'); ?>
                   
                   <p id="dessous">
                         
                         <?php echo $Acms->getOne('texte-presentation-article3-home-courte'); ?>
                         
                         
                         <?php echo $Acms->getEditionPage('texte-presentation-article3-home-courte'); ?>
                  </p>
 </div>
 
         <!-- Fin Articles de la page Home -->
