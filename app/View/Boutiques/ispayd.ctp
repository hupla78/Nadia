
<?php if($mes = true):?>
<p> Merci de vôtre transaction, un email a éte envoyer, n'ésitez pas à regarder votre commande
sur Mon compte ou directement<?php echo $this->Html->Link("l'ensembles de votre articles", array('admin'=>false,'prefix'=>false,'controller'=>'Users','action'=>'userInfo')) ?></p>
<?php else: ?>
La transaction a eu une erreur(vous ne serez pas debité) merci de bien vouloir refaire la <?php $this->Html->link('transaction',array('admin'=>false,'prefix'=>false,'controller'=>'Users','action'=>'choixPayment'))?>.
<?php endif ?>

