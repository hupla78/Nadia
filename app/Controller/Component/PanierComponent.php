<?php


class PanierComponent extends Component{

    private $controller =  null;


    public function __construct(ComponentCollection $collection,$settings){
        $this->controller = $collection->getController();
        return;
    }



    public function setPaymentType($type=null,$force=false){
        if($type==null){
            $this->controller->Session->setFlash('redirection: une erreur de choix de payment');
            $this->controller->redirect('/');
            return false;
        }

        if($this->controller->Session->check('Panier.PayInfo.type')){
            if($force){
                $oldtype = $this->controller->Session->read('Panier.PayInfo.type');
                $this->controller->Session->write('Panier.PayInfo.type',$type);
                $this->controller->Session->setFlash('Votre moyen de payment est passé de '.$oldtype.' a '.$type);
                return;
            }
            else{
                if($type != $this->controller->Session->read('Panier.PayInfo.type')){
                    $this->controller->Session->setFlash('redirection: le choix du payment a deja été effectué');
                    return false;
                }else{
                    $this->controller->Session->setFlash('redirection: le choix du payment a deja été effectué');
                    return true;
                }

            }
        }
        $this->controller->Session->write('Panier.PayInfo.type',$type);
        $this->controller->Session->write('Panier.PayInfo.Sucess',false);
        return true;
    }
    


/* get du type de payment paypal ou card */
    public function getPaymentType(){
        return $this->controller->Session->read('Panier.PayInfo.type');
    }


    //je met un article dans le panier
    public function add($id = false ,$quant = 1){

        $this->controller->Boutique->Article->recursive=-1;
        $article = $this->controller->Boutique->Article->findById($id);

        if($id == false){
            $this->controller->Session->setFlash('erreur 1 : article introuvable');return;}

        if($quant < 1 or $quant > 100){
            $this->controller->Session->setFlash('erreur 2 : quantité imposible');return;}

        if(empty($article)){
            $this->controller->Session->setFlash('erreur 3 : article n\'exite pas ');return;}

        if($article['Article']['quantity']<$quant)
        {$this->controller->Session->setFlash('erreur 4 : la quantité n\'est pas en stock');return;}


        if(!$this->controller->Session->check('Panier')){$this->create();}


        if($this->controller->Session->check('Panier.'.$id)){

            if($article['Article']['quantity'] < $quant +$this->controller->Session->read('Panier.'.$id.'.nombre'))
            {
                $this->controller->Session->setFlash('erreur 5 : la quantité n\'est pas en stock');
                return;
            }


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

    }

    //j'enleve les aticle du panier
    public function sub($id,$quant=1){

        $quantActuel = $this->controller->Session->read('Panier.'.$id.'.nombre');

        if($quantActuel ==  null){
            $this->Session->flash('quantité = 0');return;}

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
        $totalArticle    = $this->controller->Session->read('Panier.TotalArticle');
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
        $this->controller->Session->write('Panier.PayInfo.sucess',false);
        return;
    }

    //je renvoi la liste des articles
    public function listArticle(){
        return $this->controller->Session->read('Panier');
    }

    //verifie les prix et ce qui est dans le panier
    public function check(){

    }


    private function modifTotal($numbre){
        $total = $this->controller->Session->read('Panier.Total');
        $total = $total + $numbre;
        $this->controller->Session->Write('Panier.Total',$total);
        return;
    }



    private function modifTotalArticle($numbre){
        $total = $this->controller->Session->read('Panier.TotalArticle');
        $total = $total + $numbre;
        $this->controller->Session->Write('Panier.TotalArticle',$total);
        return;
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

        $adress = 'https://' . $_SERVER['SERVER_NAME']."/Boutiques/";
        $order = array(
            'description' => 'Achat sur Fil de boheme',
            'currency' => 'EUR',
            'return' => $adress."isPayd/paypal",
            'cancel' => $adress."isCancel",
            'custom' => 'bingbong',
            'shipping' => '0',
            'items' => $tab
        );
        return $order;
    }


    public function getTotal(){
        return $this->controller->Session->read('Panier.Total');
    }


    public function exportToBDDFormat(){

        if(!$this->payIs()){
            $this->destroy();
            $this->controller->Session->setFlash('il est impossible de prendre en compte votre comande si elle n\'a pas éte payé.');
        }

        $tempo = $this->controller->Session->read('Panier');
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
        return $tab1;
    }


    public function destroy(){
        $this->controller->Session->delete('Panier');
    }

    public function isPay($by=null){
        if($by==null){
            return;
        }
        if($by == $this->controller->Session->read('Panier.PayInfo.type')){
            $this->controller->Session->write('Panier.PayInfo.sucess',true);
            return;
        }else{
            $this->controller->Session->setFlash('erreur de validation de la commande.');
            return;
        }
    }

    public function payIs(){
        return $this->controller->Session->read('Panier.PayInfo.sucess');
    }

    public function setPaypal($token){
        $this->controller->Session->write('Panier.PayInfo.token',$token);
    }


    public function getPaypal(){
        return $this->controller->Session->read('Panier.PayInfo.token');
    }
}
?>
