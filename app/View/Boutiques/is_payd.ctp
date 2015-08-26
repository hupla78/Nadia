
<?php if($mes = true):?>
<p> Merci de vôtre transaction,
un <strong>email</strong> a éte envoyer, n'ésitez pas à regarder votre commande
sur <strong>Mon compte</strong> ou clique sur 
<?php echo $this->Html->Link("ce lien.", array('admin'=>false,'prefix'=>false,'controller'=>'Users','action'=>'userInfo')) ?></p>
<?php else: ?>
<p>
La transaction a eu une erreur(vous ne serez pas debité) merci de bien vouloir refaire la 
<?php $this->Html->link('transaction',array('admin'=>false,'prefix'=>false,'controller'=>'Users','action'=>'choixPayment'))?>.
</p>
<?php endif ?>

