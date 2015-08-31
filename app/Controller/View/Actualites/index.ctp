<?php foreach($actu as $a ): ?>
<div class="large-12 columns medium-12 small-12 panel">
    <div class="large-12 columns medium-12 small-12 titre">
        <?php echo($Acms->getEdit('actualites',$a['Actualite']['id'])); ?>
        <h3 class="center"><?php echo($a['Actualite']['titre']); ?></h3>
    </div>
    <div class="large-4 medium-5 small-12 columns">
        <?php echo $this->Html->image('import/'.$a['Img']['value'],array('class'=>'center')); ?>
    </div>
    <div class="large-8 medium-7 small-12 columns">
        <br><p class="justify">
        <?php echo($a['Actualite']['text']); ?>
        </p></div>
</div>
<?php endforeach; ?>
<?php echo($Acms->getThatTextIfAdmin($this->Html->link('Nouvelle actualité',array('controller'=>'actualites','action'=>'add','admin'=>true),array('class'=>'button center')))); ?>







