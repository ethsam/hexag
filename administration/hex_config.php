<?php



$DBHOST = 'localhost'; //Host pour la base de donnée (BDD)
$DBNAME = 'haxag'; //Nom de la BDD
$DBUSER = 'root'; //Login BDD
$DBPASS = 'root'; //Mot de passe de la BDD

$SALT_SECURE = 'b1f54e01590f310dc11623f49d9a6443'; //Grain de sel pour rendre le chiffrement plus difficile à cassé



try //Ont tente la connection à la base de donnée
{
        $connexion = new PDO('mysql:host='.$DBHOST.';dbname='.$DBNAME, $DBUSER, $DBPASS); //Instance de connection à la BDD
}

catch(Exception $e) //Si il y à une erreur
{
        echo 'Hexag - DEBUG <br />';
        echo 'Erreur : '.$e->getMessage().'<br />'; //Affiche les informations de l'erreur
        echo 'N° : '.$e->getCode(); //Affiche le code erreur
}
?>
