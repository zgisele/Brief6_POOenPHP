<?php
if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['telephone']) && isset($_POST['email2']) && isset($_POST['passe2'])){
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $email2 = $_POST['email2'];
    $passe2 = $_POST['passe2'];

    if(empty($prenom) or empty($nom) or empty( $telephone) or empty( $email2) or empty( $passe2)){

        echo 'veillez renseigner les champs';//quant les variables sont vides

    } else{

        // include 'classeBase.php';
        // $db = new Database();
        // $db = $db->getConn();


    

         include 'classeInscript.php';

        $inscription1 = new inscription( $prenom , $nom , $telephone, $email2,$passe2);
        $inscription1->insertion($db);

    //   $objet = new inscription();
    //   $objet->setValeur('Nouvelle valeur');
     }
    
            
    }else{
        echo 'Un des champs n\'existe pas'; //quant un des champs du formulaire n'exite pas.
    }


    echo'<a href="connexion.html" style="border: none;font-size: 16px;text-align: center;padding-bottom: 20px;padding-left: 20px;padding-right:20px;color: aliceblue;; background-color:  rgba(64, 64, 245, 0.89);">Connexion</a>'

?>
