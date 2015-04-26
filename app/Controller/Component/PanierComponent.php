<?php


class PanierComponent extends Component{

    private $controller =  false;




    public function __construct(ComponentCollection $collection,$settings){
        $this->controller = $collection->getController();

    }


    //je met un article dans le panier
    public function add($id = false ,$quant = 1){


        $article = $this->controller->Boutique->Article->findById($id,array('recursive'=>0));

        if($id == false){die('erreur 1 : article introuvable');return;}

        if($quant < 1 or $quant > 100){die('erreur 2 : quantité imposible');return;}

        if(empty($article)){die('erreur 3 : article n\'exite pas ');return;}

        if(!$this->controller->Session->check('Panier')){$this->create();}

        if($this->controller->Session->check('Panier.'.$id)){
            $nombre = $this->controller->Session->read('Panier.'.$id.'.nombre');
            $this->controller->Session->write('Panier.'.$id.'.nombre',$nombre+$quant);
            $this->modifTotal( $article['Article']['prix']);
            $this->modifTotalArticle($quant);

            return;
        }




        $article = array_merge($article,array('nombre'=>$quant,'time'=>'notReady'));
        debug($id);

        $this->controller->Session->write('Panier.'.$id,$article);
        $this->modifTotal( $article['Article']['prix']);
        $this->modifTotalArticle($quant);
        //$this->controller->Session->destroy();

    }

    //j'enleve les aticle du panier
    public function sub($id,$quant=1){

        $quantActuel = $this->controller->Session->read('Panier.'.$id.'.nombre');

        if($quantActuel ==  null){ return;}

        $prix = $this->controller->Session->read('Panier.'.$id.'.Article.prix');

        if($quantActuel-$quant <= 0){
            $this->remove($id);
            $this->modifTotal(- $prix );
            $this->modifTotalArticle(-$quant);
            return;
        }


        $this->controller->Session->write('Panier.'.$id.'.nombre',$quantActuel-$quant);
        $this->modifTotal(- $prix );


    }



    //j'enleve les aticle du panier
    public function remove($id){
        $this->controller->Session->delete('Panier.'.$id);

    }


    public function rem($id){
        $totalArticle           = $this->controller->Session->read('Panier.TotalArticle');
        $total           = $this->controller->Session->read('Panier.Total');

        $nbactuelleDe    = $this->controller->Session->read('Panier.'.$id.'.nombre');
        $prix            = $this->controller->Session->read('Panier.'.$id.'.Article.prix');

        $this->controller->Session->write('Panier.TotalArticle',$totalArticle-$nbactuelleDe);
        $this->controller->Session->write('Panier.Total',$total-$nbactuelleDe*$prix);
        $this->controller->Session->delete('Panier.'.$id);

    }



    // je cree la commande pas
    public function create(){

        $this->controller->Session->write('Panier.Total' ,0.00);
        $this->controller->Session->write('Panier.TotalArticle' ,0);
    }


    // je renvoie vers le lien d'achat
    public function buy(){


    }


    //je renvoi la liste des articles
    public function listArticle(){

        return $this->controller->Session->read('Panier');
    }

    //verifie les prix et ce qui est dans le panier
    public function check(){}


    private function modifTotal($numbre){

        $total = $this->controller->Session->read('Panier.Total');
        $total = $total + $numbre;
        $this->controller->Session->Write('Panier.Total',$total);

    }

    private function modifTotalArticle($numbre){

        $total = $this->controller->Session->read('Panier.TotalArticle');
        $total = $total + $numbre;
        $this->controller->Session->Write('Panier.TotalArticle',$total);

    }

    public function needAdresse(){

        if($this->controller->Session->check('Panier.PayInfo.adresseId')){
            return true;
        }else{
            $this->controller->redirect(array('action'=>'choixAdresse'));
        }


    }

    public function setAdresse($id){
        $this->controller->Session->Write('Panier.PayInfo.adresseId',$id);

    }
   public function exportToPaypalFormat(){

        $tab=array();
        $id=0;
        foreach($this->controller->Session->read('Panier') as $key => $temp){
            if(is_array($temp)&&$key!="PayInfo"){
                $tab[$id++]= array(
                    'name' => $temp['Article']['name'],
                    'description' => 'A pair of really great blue shoes',
                    'tax' =>number_format($temp['Article']['prix']*0.196,2),
                    'subtotal' => number_format($temp['Article']['prix']*(1-0.196),2),
                    'qty' => $temp['nombre']

                );
        }
        }

        $adress = substr(Router::url( $this->here, true ),0,-3);
        $order = array(
            'description' => 'Achat sur Fil de boheme',
            'currency' => 'EUR',
            'return' => $adress."isPayd",
            'cancel' => $adress."isCancel",
            'custom' => 'bingbong',
            'shipping' => '0',
            'items' => $tab

        );

                return $order;






        }

        public function exportToBDDFormat(){


            $tempo = $this->controller->Session->read('Panier');
          //  debug($tempo);
            foreach($tempo as $key => $temp){
                if(is_array($temp)&&$key!="PayInfo"){
                    $tab[$key]= array(

                        'article_id'=>$key,
                        'p'=>$temp['Article']['prix'],
                        'q'=>$temp['nombre']
                    );
                }
            }

            $tab1 = array(
                'PanierCommand'=> array(
                    'adresse_pofile_id'=>$tempo['PayInfo']['adresseId'],
                    'user_id'=>$this->controller->Session->read('Auth.User.id')),
                'PanierVente'=>$tab
            );
           // debug($tab1);
            return $tab1;


        }
        public function destroy(){
            $this->controller->Session->delete('Panier');

        }

    public function setPaypal($token){
        $this->controller->Session->write('Panier.PayInfo.token',$token);

    }
    public function getPaypal(){
        return $this->controller->Session->read('Panier.PayInfo.token');

    }

    }
?>
