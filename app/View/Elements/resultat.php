<!DOCTYPE html>
<html lang="fr" >
   <head>
       <title> Fil de Bohème <title>
 </head>         
<html>
<body>
  
<?php

    if(isset($_POST['form'])) {
           
        $PARAM_hote='localhost';  
        $PARAM_nom_bd='nadia'; 
        $PARAM_utilisateur='admin';
        $PARAM_mot_passe='admin'; 
        try
        {
            $pdo =  new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
            $motEntree = htmlentities($_POST['mot']);
            $req = $pdo->prepare('SELECT * FROM fichiers WHERE motscles = "'.$motEntree.'"');//CE N EST PAS "$mot" MAIS "$motEntree" j'aurai pu aussi utiliser LIKE mais je trouve que ca c'est mieu
            try{
                $req->execute();         
                while($donnees = $req->fetch(PDO::FETCH_OBJ)) {
                    echo $donnees->sujet;
                }
            }
            catch(Exception $e)
            {
            echo"Erreur lors de l'exécution de la requête";
            }
         
        }
           
        catch(Exception $e)
        {
            echo 'Erreur Mysql, pas d acces a la base de donnée.  ';
               
        }
   
         
    }
?>
  
</body>
</html>
       </div>