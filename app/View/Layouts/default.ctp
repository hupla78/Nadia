<!DOCTYPE html>
<html>
    <head>


	<title>
	    Fil de Bohème
	</title>

<link rel="shortcut icon" href="img/iconn.ico">


<?php
echo $this->Html->css('foundation');
echo $this->Html->css('foundation.min');
echo $this->Html->css('style');

echo $this->Html->css('jquery-ui-1.8.4.custom');
echo $this->Html->css('select2/select2');
echo $this->Html->css('select2/select2-bootstrap');
echo $this->Html->script('vendor/jquery');
echo $this->Html->script('vendor/modernizr');
echo $this->Html->script('foundation/foundation');
echo $this->Html->script('foundation/foundation.offcanvas');
echo $this->Html->script('foundation/foundation.slider');
echo $this->Html->script('foundation/foundation.orbit');
echo $this->Html->script('select2-3.5.2/select2.min');
echo $this->Html->script('select2-3.5.2/select2_locale_fr.js');
echo $this->Html->script('cbunny');






$cbunny = array(
	'APP_PATH' => Router::url('/',true)
);
echo $this->Html->scriptBlock('var CbunnyObj = ' . $this->Js->object($cbunny) . ';');

?>

	<style>
	    <?php include('css/cms.css'); ?>
	</style>

    </head>
    <body class="heightbody">


	<?php echo $Acms->getEditionPage('color-fond-exterieur'); ?>




<?php

if (AuthComponent::user('isAdmin')){
	echo $this->element('admin_menu');
}
?>

	<?php echo $Acms->getEditionPage('color-fond-interieur'); ?>

	<div id="container">

	    <div id="header" class="row">

		<div class="off-canvas-wrap" data-offcanvas>
		    <div class="inner-wrap">


			<nav class="tab-bar"><!-- menu de la top bar -->

			    <section class="left-medium">
				<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
			    </section>

			    <section class="middle tab-bar-section">


            <?php echo $Acms->getEditionPages(array('color-police-top-bar','color-fond-interieur'));?>

				<h1 class="title">Fil de Bohème

                </h1>
			    </section>


			</nav><!-- fin menu -->


			<aside class="left-off-canvas-menu">
			    <ul class="off-canvas-list">
				<li><label>Menu <?php echo $Acms->getEditionPage('color-fond-top-bar'); ?>  </label></li>
				<li>

<?php
if ( null==AuthComponent::user('id')){
	echo $this->Html->link('Connexion',array('admin'=>false,'prefix'=>false,'controller'=>'users','action'=>'login'));
	echo '</li><li>';
	echo $this->Html->link('Inscription',array('controller'=>'Users','action'=>'inscription'));
}
else{
	echo $this->Html->link('Déconnexion',array('admin'=>false,'prefix'=>false,'controller'=>'users','action'=>'logout'));
	echo '</li><li>';
	echo $this->Html->link('Mon compte',array('controller'=>'users','action'=>'userInfo'));
}
?>
				</li>
				<li>
				    <?php echo $this->Html->link('Panier',array('controller'=>'boutiques','action'=>'panier','prefix'=>false,'admin'=>false))?>
				</li>
				<li>
				    <?php echo $this->Html->link('Nouveautés',array('controller'=>'users','action'=>'login'))?>
				</li>
			    </ul>
			</aside>

			<section class="main-section">

			    <div class="large-6 columns medium-6 columns small-12 columns espacejj">
<?php echo $this->Html->image('logo.jpg');
?>

			    </div>

			    <div class="large-6 columns medium-6 columns small-12 ">

				<div class="barsearch">
				    <input type="text" id="item-select2">
				</div>

			    </div>


			    <div class="large-6 columns medium-6 small-6 espace-barre">
				<div class=" medium-6 small-6 columns class-panier">

<?php
$val =   SessionComponent::read('Panier.TotalArticle');
if($val==0){echo"Le panier est vide";}else{
	echo 'Prix du panier : '.SessionComponent::read('Panier.Total').' € <br>';?>

				</div>
				<div class=" medium-6 small-6 columns">
				    <?php echo "Nombres d'articles : ".SessionComponent::read('Panier.TotalArticle');}?>
				</div>
			    </div>


				<div class="large-6 columns medium-6 small-6 espace-barre2">

                   <?php echo $Acms->getEditionPages(array('panier-fond-color','panier-text-color','panier-fond-passage-color'));?>

                    <?php echo $this->Html->link("Mon panier",array('controller'=>'boutiques','action'=>'panier','prefix'=>false,'admin'=>false),array('class'=>'button acm-panier'))?>

				</div>



			    </div>
			<div class="large-12  medium-12  small-12 columns margin-menu">
			    <ul class="row menu-generale ">


				<li class="menud large-3 small-6 medium-3 columns separbot">


					<?php echo $Acms->getEditionPage('color-fond-menu-generale'); ?>

					<?php echo $this->Html->link('Produits',
                                                 array('prefix'=>false,
                                                       'admin'=>false,
                                                       'controller'=>'boutiques',
                                                       'action'=>'index'),
                                                 array('class'=>'pi-text-center'))?>

					<?php echo $Acms->getEditionPage('color-passage-souris-menu-generale'); ?>



				</li>
				<li class="menud large-3 small-6 medium-3 columns separbot">


					<?php echo $this->Html->link('Fil de Boheme',array('prefix'=>false,'admin'=>false,'controller'=>'pages','action'=>'home', ),array('class'=>'pi-text-center'))?>


				</li>

				<li class="menud large-3 small-6 medium-3 columns separbot">


					<?php echo $Acms->getEditionPage('color-police-menu-generale-sans-souris'); ?>


					<?php echo $this->Html->link('Actualités',array('prefix'=>false,'admin'=>false,'controller'=>'actualites','action'=>'index', ),array('class'=>'pi-text-center'))?>

					<?php echo $Acms->getEditionPage('color-police-menu-generale-passage-souris'); ?>




				</li>
				<li class="menud large-3 small-6 medium-3 columns separbot">

					<?php echo $this->Html->link('Points de vente',array('prefix'=>false,'admin'=>false,'controller'=>'pointDeVentes','action'=>'index', ),array('class'=>'pi-text-center'))?>



				</li>
			    </ul>
			</div>







			</section>

		    </div>

		</div>



		<div id="content" class="row heightbody">

		    <?php echo $this->Session->flash();?>

		    <?php echo $this->fetch('content'); ?>
		</div>





		<div id="footer" class="row">

        <div class="trait">
			</div>
        <div class="font-footer">
		    <div class="large-12 columns medium-12 columns small-12 columns ">

 <div class="large-6 columns medium-6 columns small-6 columns">
			<p id="nousre">

			    Nous retrouver sur :

			</p>
                </div>
		 <div class="large-6 columns medium-6 columns small-6 columns place">
		 	 <div class="large-4 columns medium-3 columns small-3 columns place">

             </div>
             <div class="large-2 columns medium-3 columns small-2 columns place2">
             <div id="translator_7265"><noscript>Javascript is disable - <a href="http://www.supportduweb.com/">http://www.supportduweb.com/</a> - <a href="http://www.supportduweb.com/generateur-boutons-traduction-translation-google-gratuit-html-code=script-boutons-traduire-page-web.html">Générateur de boutons de traduction</a></noscript></div><script type="text/javascript" src="http://services.supportduweb.com/translator/7265-3-yynynynnn.js"></script>

                 </div>

     </div>
			<div class="large-12 columns medium-12 columns small-12 columns">
			    <div class="large-3 columns medium-3 columns small-3 columns">


<?php echo $this->Html->link(
	$this->Html->image('rejoindre-facebook.png'),
	'http://www.facebook.com',
	array('target' => '_blank', 'escape' => false, 'class' => '')
);
?>
				</div>

				<div class="large-3 columns medium-3 columns small-3 columns">
<?php
	echo $this->Html->link(
		$this->Html->image('bouton-twitter.png'),
		'http://www.twitter.com',
		array('target' => '_blank', 'escape' => false, 'class' => '')
	);

?>
		</div>
				<div class="large-3 columns medium-3 columns small-3 columns">
<?php
	echo $this->Html->link(
		$this->Html->image('Logo_little_market.png'),
		'http://www.alittlemarket.com',
		array('target' => '_blank', 'escape' => false, 'class' => '')
	);
?>

			</div>

			<div class="large-3 columns medium-3 columns small-3 columns">
<?php
	echo $this->Html->link(
		$this->Html->image('insta.png'),
		'https://instagram.com/fildeboheme/',
		array('target' => '_blank', 'escape' => false, 'class' => '')
	);
?>

			</div>

			</div>

			</div>

		   	<p id="copy">
			    Copyright : Tout droit réservés - Site crée par Pierre Beauval en coopération avec Arthur Margerit

			</p>
			</div>
		</div>

	    </div>





    </body>
	<script>
	$(document).foundation();
	</script>
</html>

