<nav>
	<h2>admin-menu</h2>
	<ul>		
	
        <li><?php echo $this->Html->link('text',array('controller'=>'texts','action'=>'index')); ?></li>
        <li><?php echo $this->Html->link('image',array('controller'=>'imgs','action'=>'index')); ?></li>
	<li><?php echo $this->Html->link('articles',array('controller'=>'articles','action'=>'index')); ?></li>
	<li><?php echo $this->Html->link('categories',array('controller'=>'categories','action'=>'index')); ?></li>
	<li><?php echo $this->Html->link('cms',array('controller'=>'cms','action'=>'index')); ?></li>
	</ul>
</nav>
