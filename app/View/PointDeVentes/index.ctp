<?php
echo $this->Html->script('http://maps.google.com/maps/api/js?key=AIzaSyCcjATeNc8V6oVr672cPFuRn8P_wmPULoU&sensor=true');
$b = 0;
?>


<?php foreach($pointDeVentes as $a ): ?>

<div class="large-12 columns medium-12 small-12 panel">
    <div class="large-12 columns medium-12 small-12 titre">
        <h4 class="center"><?php echo($a['PointDeVente']['name']); ?></h4>
    </div>
    <div class="large-4 medium-5 small-12 columns">
        <?php echo $this->Html->image('import/'.$a['Img']['value'],array('class'=>'center')); ?>
    </div>
    <div class="large-8 medium-7 small-12 columns">
        <br><p class="justify">
        <?php echo($a['PointDeVente']['description']); ?>

        </p>



        <div class="adresse center">
            <?php echo(
    $a['PointDeVente']['num_rue'].' '.
    $a['PointDeVente']['rue'].'<br>'.
    $a['PointDeVente']['codePostal'].' <b>'.
    $a['PointDeVente']['vile'].'</b>'
); ?>

        </div>
    </div>
</div>

<?php endforeach; ?>
