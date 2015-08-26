<br>
<?php foreach ($boutique as $keii):?>
<?php echo $this->element('rendu-article',array('key'=>$keii,'Acms'=>$Acms));?>
<?php endforeach;?>
<?php echo($Acms->getThatTextIfAdmin($this->Html->link('Nouvelle Article',array('controller'=>'articles','action'=>'add','admin'=>true),array('class'=>'button center')))); ?>
<br>
