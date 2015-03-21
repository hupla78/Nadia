<div class="large-12 medium-12 columns">
   <div class="panel">
    <h3>Mes informations</h3>
    <div>
        pseudo : <?php echo($userInfo['User']['username']); ?>
    </div>
    <div>
        email : <?php echo($userInfo['User']['email']); ?>

    </div>
</div>
</div>
<div class="large-6 medium-12 columns">
<div class="panel">
    <h3 class="center">Mes Commandes</h3>
    <?php foreach($userInfo['PanierCommand'] as $com ): ?>

    <div class="large-12 small-12 command-con">
        <h5 class="adresse">
            <?php echo $com['created'];?>
        </h5>
        <?php echo( $this->Html->link('voir',array(
                    'controller'=>'PanierCommand',
                    'action'=>'view',$com['id']),
                                array('class'=>'button-command'))
); ?>


    </div>


    <?php endforeach; ?>

</div>
</div>

<div class="large-6 medium-12 columns">
   <div class="panel">
    <h3 class="center">Mes Adresses</h3>

    <?php foreach(  $userInfo['AdressePofile'] as $adresse ): ?>

    <div class="large-12 small-12 adressecont">
        <h5 class="adresse">
            <?php echo $adresse['name'];?>
        </h5>
        <p>

            <?php

echo($adresse['num_rue']      ." ".
     $adresse['rue']          ." ".
     $adresse['codePostal']   ." ".
     $adresse['vile']);
            ?>
<?php echo( $this->Html->link('edit',array(
                    'controller'=>'AdressePofiles',
                    'action'=>'edit',$adresse['id']),
                                array('class'=>'button goRight'))
); ?>
        </p>

    </div>

    <?php endforeach; ?>
<?php echo( $this->Html->link('Crée une adresse',array(
                    'controller'=>'AdressePofiles',
                    'action'=>'add'),
                                array('class'=>'button'))
); ?>

</div>
</div>

