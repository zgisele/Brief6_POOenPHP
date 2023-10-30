<?php

if(isset($_POST["email"]) && isset($_POST["passe"])){
    $email=$_POST["email"];
    $passe=$_POST["passe"];
    

    if(empty($email)or empty($email)){

        echo 'veillez renseigner les champs';//quant les variables sont vides

    }else{

        include 'classeConnexion.php';
        $connexion1 = new connexion($email,$passe);
        $connexion1 ->connexionPage($db);
            
    }
    

    
}else{
        echo 'Un des champs n\'existe pas'; //quant un des champs du formulaire n'exite pas.
    }
?>