<nav>
	<h2>admin-menu</h2>
	<ul>		

	<li><?php echo $this->Html->link('color',array('admin'=>true,'controller'=>'colors','action'=>'index')); ?></li>
	<li><?php echo $this->Html->link('value',array('admin'=>true,'controller'=>'values','action'=>'index')); ?></li>
        <li><?php echo $this->Html->link('text',array('admin'=>true,'controller'=>'texts','action'=>'index')); ?></li>
        <li><?php echo $this->Html->link('image',array('admin'=>true,'prefix'=>'admin','controller'=>'imgs','action'=>'index')); ?></li>
	<li><?php echo $this->Html->link('articles',array('admin'=>true,'controller'=>'articles','action'=>'index')); ?></li>
	<li><?php echo $this->Html->link('categories',array('admin'=>true,'controller'=>'categories','action'=>'index')); ?></li>
	<li><?php echo $this->Html->link('cms',array('admin'=>true,'controller'=>'cms','action'=>'index')); ?></li>
	</ul>
</nav>
