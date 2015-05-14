

<?php foreach($actu as $a ): ?>

<div class="large-12 columns medium-12 small-12 panel">
    <div class="large-12 columns medium-12 small-12 titre">
        <h4 class="center"><?php echo($a['Actualite']['titre']); ?></h4>
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







