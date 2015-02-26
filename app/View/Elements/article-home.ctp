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
                         <?php echo $Acms->getEditionPage($name); ?>

                  </p>
            </div>

 </div>
