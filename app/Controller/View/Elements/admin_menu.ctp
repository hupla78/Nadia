<nav class="row panel">

        <div class="large-12 small-12 columns"><h2 class="pi-text-center">Admin-menu</h2></div>

        <div class="large-9 small-12 columns">

        <h4>Modifier un élément du site</h4>
              </div>

               <div class="large-6 small-12 columns">
                <?php echo $this->Html->link('Couleurs',array('admin'=>true,'controller'=>'colors','action'=>'index'),array('class'=>'button')); ?>

<?php /** echo $this->Html->link('valeurs',array('admin'=>true,'controller'=>'values','action'=>'index')); */?>

               <?php echo $this->Html->link('Textes',array('admin'=>true,'controller'=>'texts','action'=>'index'),array('class'=>'button')); ?>
               <?php echo $this->Html->link('Images',array('admin'=>true,'prefix'=>'admin','controller'=>'imgs','action'=>'index'),array('class'=>'button')); ?>

                </div>

                 <div class="large-6 small-12 columns">

	           <?php echo $this->Html->link('Articles',array('admin'=>true,'controller'=>'articles','action'=>'index'),array('class'=>'button')); ?>
<?php /** echo $this->Html->link('categories',array('admin'=>true,'controller'=>'categories','action'=>'index')); */?>
	           <?php echo $this->Html->link('Points De Ventes',array('admin'=>true,'controller'=>'pointDeVentes','action'=>'index'),array('class'=>'button')); ?>
	           <?php echo $this->Html->link('Actualité',array('admin'=>true,'controller'=>'actualites','action'=>'index'),array('class'=>'button')); ?>
	           <?php echo $this->Html->link('Email',array('admin'=>true,'controller'=>'Users','action'=>'sendToUser'),array('class'=>'button')); ?>



        </div>
         <div class="large-4 small-12 columns">
        <h4>Parametres</h4>


                <?php /**echo $this->Html->link('cms',array('admin'=>true,'controller'=>'cms','action'=>'index')); */?>

                <?php echo $this->Html->link('Appliquer le changement',array('admin'=>true,'prefix'=>'admin','controller'=>'cms','action'=>'export'));?>

    </div>
         <div class="large-4 small-12 columns">
                <h4>Ventes</h4>

                <?php echo $this->Html->link('Mes Ventes',array('admin'=>true,'controller'=>'PanierCommands','action'=>'index')); ?>

        </div>




</nav>
