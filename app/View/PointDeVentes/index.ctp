<?php
echo $this->Html->script('http://maps.google.com/maps/api/js?key=AIzaSyCcjATeNc8V6oVr672cPFuRn8P_wmPULoU&sensor=true');
$b = 1;?>

<?php
$map_options = array(
    "localize" => 'true',
    "type" => "ROADMAP",
    "zoom" => 10,
    "marker" => true,
    "draggableMarker" => false,
    "width"=>'auto',
    "height"=>'400px'
);
?>
<?php echo $this->GoogleMap->map( $map_options); ?>



<?php foreach($pointDeVentes as $a ): ?>

<?php echo $this->GoogleMap->addMarker(
    "map_canvas",
    $b++,
    $a['PointDeVente']['num_rue'].' '.
    $a['PointDeVente']['rue'].' '.
    $a['PointDeVente']['codePostal'].' '.
    $a['PointDeVente']['vile'],
    array("draggableMarker" => true,'markerTitle'=>$a['PointDeVente']['name'], "windowText" =>$a['PointDeVente']['name'])
); ?>


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
            <p>
<?php echo(
    $a['PointDeVente']['num_rue'].' '.
    $a['PointDeVente']['rue'].'<br>'.
    $a['PointDeVente']['codePostal'].' <b>'.
    $a['PointDeVente']['vile'].'</b>'
); ?>
            </p>
        </div>
    </div>
</div>

<?php endforeach; ?>
