<!DOCTYPE html>
<html>
<head>

	<title>
		Fil de Bohème
	</title>
<?php
echo $this->Html->css('foundation');
echo $this->Html->css('foundation.min');
echo $this->Html->css('style');
echo $this->Html->script('vendor/jquery');
echo $this->Html->script('vendor/modernizr');
echo $this->Html->script('foundation/foundation');
echo $this->Html->script('foundation/foundation.orbit');	
					
?>
</head>
<body>
<?php
if (AuthComponent::user('isAdmin')){
	echo $this->element('admin_menu');
}
?>

	<div id="container">
		<div id="header">
		 <div class="row">
  <div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <nav class="tab-bar">

      <section class="left-medium">
	<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
	<h1 class="title">Fil de Bohème</h1>
      </section>


    </nav>

    <aside class="left-off-canvas-menu">
  <ul class="off-canvas-list">
    <li><label>Menu</label></li>
    <li><a href="connection.php">Se connecter</a></li>
    <li><a href="panier.php">Panier</a></li>
    <li><a href="nouveautes.php">Les nouveautés</a></li>
  </ul>
</aside>



    <section class="main-section">

       <div class="large-5 columns medium-5 columns small-12 columns hul">
<?php echo $this->Html->image('logo.jpg');
?>
      </div>

    <div class="large-6 columns medium-6 columns small-12 columns">




      <div id="searchbar">
    <form action="resultat.php">
	<input class="champ" type="text" placeholder="Rechercher un article..."/>
	<input class="bouton" type="submit" value=" " />
    </form>
</div>
      <p id="pani">
	  Panier (<a href="panier.php">vide</a>)
      </p>

       </div>

       <div class="large-12 columns medium-12 columns small-12 columns">
      <ul id="menu_horizontal">
<li class="boutonnn"><a href="produit.php">Produit</a></li>
<li class="boutonnn"><a href="fdbhistoire.php">Qui est Fil de Bohème</a></li>
<li class="boutonnn"><a href="actualitebolg.php">Actualité ou Blog</a></li>
<li class="boutonnn2"><a href="vente.php">Points de vente</a></li>
</ul>


       </div>

      </section>   



    </div>
    </div>



		<div id="content">

	<?php echo $this->fetch('content'); ?>

		</div>





		<div id="footer">


			 <div class="large-12 columns medium-12 columns small-12 columns">
			 <div class="trait">
			 </div>

			<p id="nousre">

			   Nous retrouver sur

			</p>

			<div class="tot">

<?php echo $this->Html->link(
	$this->Html->image('buttonfb.jpg'),
	'http://www.facebook.com',
	array('target' => '_blank', 'escape' => false, 'class' => 'lien')
);
?>



<?php
echo $this->Html->link(
	$this->Html->image('buttontwitter.jpg'),
	'http://www.twitter.com',
	array('target' => '_blank', 'escape' => false, 'class' => 'lien')
);

?>



<?php
echo $this->Html->link(
	$this->Html->image('Logo_little_market.png'),
	'http://www.alittlemarket.com',
	array('target' => '_blank', 'escape' => false, 'class' => 'lien')
);
?>

			</div>
			<p id="copy">
			    Copyright : Tout droit réservés

			</p>
		</div>
	</div>
		</div>
		</div>

<script>
$(document).foundation();
</script>

</body>
</html>
