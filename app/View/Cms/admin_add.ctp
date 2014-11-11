<div class="cms form">
<?php echo $this->Form->create('Cm'); ?>
	<fieldset>
		<legend><?php echo __('Add Cm'); ?></legend>
	<?php
		echo $this->Form->input('name');

		echo $this->Form->input('type',array(
			'options'=>array(
					'img'=>'image',
				 	'article'=>'article',
					'categorie'=>'categorie',
		       			'value'=>'valeur',
					'text'=>'text'			
					)));
	//	echo $this->Form->input('img_id');
	//	echo $this->Form->input('article_id');
	//	echo $this->Form->input('categorie_id');
	//	echo $this->Form->input('value_id');
	//	echo $this->Form->input('text_id');
?>



	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
<<<<<<< HEAD
=======
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorie'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Values'), array('controller' => 'values', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Value'), array('controller' => 'values', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Texts'), array('controller' => 'texts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Text'), array('controller' => 'texts', 'action' => 'add')); ?> </li>
>>>>>>> up
	</ul>
</div>
