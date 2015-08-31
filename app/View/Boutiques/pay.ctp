
<?php echo $this->Form->create('boutiques',array('action'=>'pay/card','type'=>'post')); ?>

    <div class="large-12 columns small-12"><?php echo $this->Form->input('card'); ?></div>
    <div class="large- small-6 columns"><?php echo $this->Form->input('boutiques.expiry.M',array('label'=>'Mois')); ?></div>
    <div class="large-2 small-6 columns"><?php echo $this->Form->input('boutiques.expiry.Y',array('label'=>'Année')); ?></div>
    <div class="columns large-4 small-4">
<?php echo $this->Form->input('cvv');?></div>
    <div class="columns large-12 small-12"><?php echo $this->Form->submit('Payer',array('class'=>'button')); ?></div>


<?php echo $this->Form->end(); ?>
