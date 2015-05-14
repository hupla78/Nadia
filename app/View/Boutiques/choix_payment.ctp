#pierre
<?php
                   echo $this->Html->link('Par Paypal',array(
                    'controller'=>'Boutiques',
                    'action'=>'pay',
                    'paypal'),
                                array('class'=>'button'));
?>

<?php
                   echo $this->Html->link('Par Carte',array(
                    'controller'=>'Boutiques',
                    'action'=>'pay',
                    'card'),
                                array('class'=>'button'));
?>

