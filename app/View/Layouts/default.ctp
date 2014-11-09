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
		echo $this->Html->script('foundation/foundation.abide');
		echo $this->Html->script('foundation/foundation.accordion');
		echo $this->Html->script('foundation/foundation.alert');
		echo $this->Html->script('foundation/foundation.clearing');
		echo $this->Html->script('foundation/foundation.dropdown');
		echo $this->Html->script('foundation/foundation.equalizer');
		echo $this->Html->script('foundation/foundation.interchange');
		echo $this->Html->script('foundation/foundation.joyride');
		echo $this->Html->script('foundation/foundation.magellan');
		echo $this->Html->script('foundation/foundation.offcanvas');
		echo $this->Html->script('foundation/foundation.reveal');
		echo $this->Html->script('foundation/foundation.slider');
		echo $this->Html->script('foundation/foundation.tab');
		echo $this->Html->script('foundation/foundation.tooltip');
		echo $this->Html->script('foundation/foundation.topbar');
		echo $this->Html->script('foundation/foundation.orbit');
	
								
	?>
</head>
<body>
	
	
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
    <li>
    <?php echo $this->Html->link('Se connecter',array('controller'=>'users','action'=>'login'))?>
   </li>
     <li>
     <?php echo $this->Html->link('Panier',array('controller'=>'users','action'=>'login'))?>
   </li>
    <li>
    <?php echo $this->Html->link('Nouveautés',array('controller'=>'users','action'=>'login'))?>
   </li>
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
      
      
      
       <div class="large-12 columns medium-12 columns small-12 columns menu">
     
         <div class="large-3 columns medium-3 columns small-6 columns text">
         <li class="menud">
       <?php echo $this->Html->link('Produits',array('controller'=>'pages','action'=>'home', ))?>
       
       </li>
       </div>
       
        <div class="large-3 columns medium-3 columns small-6 columns">
         <li class="menud">
       <?php echo $this->Html->link('Qui est Fil de Bohème',array('controller'=>'pages','action'=>'home', ))?>
       
       </li>
       </div>
       
        <div class="large-3 columns medium-3 columns small-6 columns">
        <li class="menud">
       <?php echo $this->Html->link('Actualité ou Blog',array('controller'=>'pages','action'=>'home', ))?>
       </li>
       </div>
       
        <div class="large-3 columns medium-3 columns small-6 columns">
        <li class="menud1">
       <?php echo $this->Html->link('Points de vente',array('controller'=>'pages','action'=>'home', ))?>
       </li>
       </div>
     
       </div>
      
      </section>   

    
    
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
			
			
			<div class="large-12 columns medium-12 columns small-12 columns">
			<div class="large-4 columns medium-4 columns small-4 columns">
			
			
			<?php echo $this->Html->link(
					$this->Html->image('buttonfb.jpg'),
					'http://www.facebook.com',
					array('target' => '_blank', 'escape' => false, 'class' => 'lien')
				);
				?>
				</div>
				
				<div class="large-4 columns medium-4 columns small-4 columns">
				<?php
				echo $this->Html->link(
					$this->Html->image('buttontwitter.jpg'),
					'http://www.twitter.com',
					array('target' => '_blank', 'escape' => false, 'class' => 'lien')
				);
				
				?>
		</div>
				<div class="large-4 columns medium-4 columns small-4 columns">
				<?php
				echo $this->Html->link(
					$this->Html->image('Logo_little_market.png'),
					'http://www.alittlemarket.com',
					array('target' => '_blank', 'escape' => false, 'class' => 'lien')
				);
			?>
			</div>
			
			</div>
			<p id="copy">
			    Copyright : Tout droit réservés
			    
			</p>
		</div>
	</div>
		</div>
</div>
   </div>
    <script>
      $(document).foundation();
    </script>
	
</body>
</html>
