




<p class="Payement">
    Pour le moyen de payement je vous propose un payement par Carte Bancaire ou par Paypal.
</p>






    <div class="large-12 small-12 columns espace-top">



    <div class="large-6 small-12 columns">

<?php
echo $this->Html->link(
    $this->Html->image('paypal.jpg',array('class'=>'imagePay')
                            ),
    array(
        'controller'=>  'Boutiques' ,
        'action'    =>  'pay'       ,
        'paypal'
    ),
    array(
        'escape'    =>  false
    )
);
?>
        </div>





<div class="large-6 small-12 columns espacetop">
         <?php
	echo $this->Html->link(

        $this->Html->image('Paiement.jpeg',array('class'=>'imagePay')),
            array(
                    'controller'=>'Boutiques',
                    'action'=>'pay',
                    'card'),
            array('escape' => false));

    ?>

 <!--
                   'Par Carte',array(
                    'controller'=>'Boutiques',
                    'action'=>'pay',
                    'card'),
                                array('class'=>'button'));*/


      echo $this->Html->link(
		$this->Html->image('Paiement.jpeg'),
		'je sais pas bordel ',
		array('target' => '_blank', 'escape' => false, 'class' => 'imagePay','width'=>'100px')
	)
    ;
      -->



        </div>

</div>
