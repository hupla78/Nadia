<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Fil de Bohème</title>
        <?php
echo $this->Html->charset();
echo $this->Html->meta(
    'iconn.ico',
    'img/iconn.ico',
    array('type' => 'icon')
);?>
        <meta property="og:title" content="Fil de bohéme" />
        <meta property="og:type" content="Site de maroquinerie textile haute fantaisie" />
        <meta property="og:url" content="https://fildebohem.com/" />
        <meta property="og:image" content="http://fildeboheme.com/img/logo.jpg" />
        <meta http-equiv="X-FRAME-OPTIONS" content="DENY">
        <meta name="description" content="Créé en 2011 dans la région de Marseille par la créatrice Nadia Barberet. Fil de bohème est une marque de maroquinerie textile haute fantaisie qui propose 2 fois par an des collections de sacs modulables et d'accessoires à coordonner." />

        <?php //css
echo $this->Html->css('foundation');
echo $this->Html->css('foundation.min');
echo $this->Html->css('style');
echo $this->Html->css('jquery-ui-1.8.4.custom');
echo $this->Html->css('select2/select2');
echo $this->Html->css('select2/select2-bootstrap');
        ?>
        <?php
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
echo $this->Html->scriptBlock('var CbunnyObj = ' . $this->Js->object($cbunny) . ';');?>
        <style>
            <?php include('css/cms.css'); ?>
        </style>
    </head>
    <body> 
        <?php
echo $Acms->getEditionPage('color-fond-exterieur');
if (AuthComponent::user('isAdmin')){
    echo $this->element('admin_menu');
}
echo $Acms->getEditionPage('color-fond-interieur');
        ?>
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
                                <h1>Fil de Bohème</h1>
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
                                    <?php echo $this->Html->link('Nouveautés/CGV',array('controller'=>'actualites','action'=>'index'))?>
                                </li>
                            </ul>
                        </aside>
                        <section class="main-section">
                            <div class="large-6 columns medium-6 columns small-12 columns espacejj">
                               
                               <?php echo $Acms->getEditionPage('img-presentation'); ?>
                                <?php echo $this->Html->image('import/'.$Acms->getone('img-presentation'));?>
                            </div>
                            <div class="large-6 columns medium-6 columns small-12 ">
                                <div class="barsearch">
                                    <input type="text" id="item-select2">
                                </div>
                            </div>
                            <div class="large-6 columns medium-6 small-6 espace-barre">
                                <div class=" medium-6 small-6 columns class-panier">
                                    <?php
$val =   $this->Session->read('Panier.TotalArticle');
if($val==0){echo"Le panier est vide";}else{
    echo 'Prix du panier : '.$this->Session->read('Panier.Total').' € <br>';?>
                                </div>
                                <div class=" medium-6 small-6 columns">
                                    <?php echo "Nombres d'articles : ".$this->Session->read('Panier.TotalArticle');}?>
                                </div>
                            </div>
                            <div class="large-6 columns medium-6 small-6 espace-barre2">
                                <?php echo $Acms->getEditionPages(array('panier-fond-color','panier-text-color','panier-fond-passage-color'));?>
                                <?php echo $this->Html->link("Mon panier",array('controller'=>'boutiques','action'=>'panier','prefix'=>false,'admin'=>false),array('class'=>'button acm-panier'))?>
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
                                        <?php echo $this->Html->link('Actualités/CGV',array('prefix'=>false,'admin'=>false,'controller'=>'actualites','action'=>'index', ),array('class'=>'pi-text-center'))?>
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
            </div>
            <div id="content" class="row heightbody">
                <?php if($this->Session->check('Message.flash')): ?>
                <div class="panel">
                    <?php echo $this->Session->flash();?>
                </div>
                <?php endif ?>
                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer" class="row">
                <div class="trait">
                </div>
                <div class="font-footer">
                    <div class="large-12 columns medium-12 columns small-12 columns ">
                        <div class="large-6 columns medium-6 columns small-6 columns">
                   <?php echo $Acms->getEditionPage('color-background-footer'); ?>
                            <p id="nousre">
                                Nous retrouver sur :
                            </p>
                        </div>
                        <div class="large-6 columns medium-6 columns small-6 columns place">
                            <div class="large-4 columns medium-3 columns small-3 columns place">
                            </div>
                        </div>
                        <div class="large-12 columns medium-12 columns small-12 columns">
                            <div class="large-3 columns medium-3 columns small-6 columns">
                                <?php
echo $this->Html->link(
    $this->Html->image('rejoindre-facebook.png'),
    'https://www.facebook.com/fildeboheme',
    array('target' => '_blank', 'escape' => false, 'class' => '')
);
                                ?>
                            </div>
                            <div class="large-3 columns medium-3 columns small-6 columns">
                                <?php
echo $this->Html->link(
    $this->Html->image('bouton-twitter.png'),
    'https://twitter.com/fildeboheme',
    array('target' => '_blank', 'escape' => false, 'class' => '')
);?>
                           </div>
                            <div class="large-3 columns medium-3 columns small-6 columns">
                                <?php
echo $this->Html->link(
    $this->Html->image('Logo_little_market.png'),
    'http://www.alittlemarket.com/boutique/fil_de_boheme-88680.html',
    array('target' => '_blank', 'escape' => false, 'class' => '')
);?>
                            </div>
                            <div class="large-3 columns medium-3 columns small-6 columns"><?php
echo $this->Html->link(
    $this->Html->image('insta.png'),
    'https://instagram.com/fildeboheme/',
    array('target' => '_blank', 'escape' => false, 'class' => '')
);?>
                            </div>
                        </div>
                    </div>
                    <p id="copy">
                        Copyright : Tout droit réservés - Site crée par Pierre Beauval en coopération avec Arthur Margerit
                    </p>
                </div>
            </div>
        </div>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>

