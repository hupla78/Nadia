<div class="espacejj">
<ul class="example-orbit" data-orbit>
  
  <?php foreach($Acms->getAll('slider') as $key): ?>
  <li >
    
	<?php 	echo $this->Html->image('import/'.$key, array('width'=>'100%'));?>
    
  </li>
  <?php endforeach; ?>
</ul>
   </div> 
     
     
     
 <div class="trait2">
			 </div>
			<!-- <?php echo $Acms->getOne('val'); ?> -->


<p id="accroche">
<?php echo $Acms->getOne('texte-presentation-home'); ?>
</p>


 <div class="trait3">
			 </div>

<p id="nousre"> Les Nouveautés </p>



 <div class="large-4 columns medium-4 columns small-12 columns hul">
     	<?php echo $this->Html->image('noirs.JPG');
			?>
      <p id="dessous">
          Article1
      </p>
      </div>
      
      
       <div class="large-4 columns medium-4 columns small-12 columns hul">
     	<?php echo $this->Html->image('MILA.jpg');
			?>
       <p id="dessous">
          Article1
      </p>
      </div>
      
      
       <div class="large-4 columns medium-4 columns small-12 columns hul">
     	<?php echo $this->Html->image('AMALIA.jpg');
			?>
       <p id="dessous">
          Article1
      </p>
      </div>
