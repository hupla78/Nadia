<nav class="row panel">
        <div class="large-12 small-12 columns"><h2 class="pi-text-center">admin-menu</h2></div>  
        
        <div class="large-6 small-12 columns">		
        <h4>Donné</h4><ul>
                <li><?php echo $this->Html->link('color',array('admin'=>true,'controller'=>'colors','action'=>'index')); ?></li>
        	    <li><?php echo $this->Html->link('valeur',array('admin'=>true,'controller'=>'values','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('texte',array('admin'=>true,'controller'=>'texts','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('image',array('admin'=>true,'prefix'=>'admin','controller'=>'imgs','action'=>'index')); ?></li>
	            <li><?php echo $this->Html->link('articles',array('admin'=>true,'controller'=>'articles','action'=>'index')); ?></li>
	            <li><?php echo $this->Html->link('categories',array('admin'=>true,'controller'=>'categories','action'=>'index')); ?></li>
        </ul>
        
        </div>
         <div class="large-6 small-12 columns">		
        <h4>Parametre</h4>
        <ul>
                
                <li><?php echo $this->Html->link('cms',array('admin'=>true,'controller'=>'cms','action'=>'index')); ?></li>              
                <li><?php echo $this->Html->link('apliqué',array('admin'=>true,'prefix'=>'admin','controller'=>'cms','action'=>'export'));?>
        </ul>
        
        </div>



	
</nav>
