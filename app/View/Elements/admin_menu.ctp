<nav class="row panel">
        <div class="large-12 small-12 columns"><h2 class="pi-text-center">Admin-menu</h2></div>

        <div class="large-6 small-12 columns">
        <h4>Données</h4><ul>
                <li><?php echo $this->Html->link('color',array('admin'=>true,'controller'=>'colors','action'=>'index')); ?></li>
        	    <li><?php echo $this->Html->link('valeurs',array('admin'=>true,'controller'=>'values','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('textes',array('admin'=>true,'controller'=>'texts','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('images',array('admin'=>true,'prefix'=>'admin','controller'=>'imgs','action'=>'index')); ?></li>
	            <li><?php echo $this->Html->link('articles',array('admin'=>true,'controller'=>'articles','action'=>'index')); ?></li>
	            <li><?php echo $this->Html->link('categories',array('admin'=>true,'controller'=>'categories','action'=>'index')); ?></li>
	            <li><?php echo $this->Html->link('pointDeVentes',array('admin'=>true,'controller'=>'pointDeVentes','action'=>'index')); ?></li>
	            <li><?php echo $this->Html->link('actu',array('admin'=>true,'controller'=>'actualites','action'=>'index')); ?></li>
        </ul>

        </div>
         <div class="large-6 small-12 columns">
        <h4>Parametres</h4>
        <ul>

                <li><?php echo $this->Html->link('cms',array('admin'=>true,'controller'=>'cms','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('appliquer',array('admin'=>true,'prefix'=>'admin','controller'=>'cms','action'=>'export'));?>
        </ul>
    </div>
         <div class="large-6 small-12 columns">
                <h4>Ventes</h4><ul>

                <li><?php echo $this->Html->link('Mes Ventes',array('admin'=>true,'controller'=>'PanierCommands','action'=>'index')); ?></li>

        </div>




</nav>
