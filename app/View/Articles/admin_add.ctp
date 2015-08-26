<div class="articles form">
<?php echo $this->Form->create('Article'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Article'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('prix');
		echo $this->Form->input('quantity',array('label'=> 'Quantité en stock'));
		echo $this->Form->input('description');
        echo $this->Form->input('Img.Img',array('options'=>$imgs,'style'=>'height:400px'));
		echo $this->Form->input('category_id');
        echo $this->Form->input('visible',array('label'=>'visible dans la liste des produits'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Imgs'), array('controller' => 'imgs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Img'), array('controller' => 'imgs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
