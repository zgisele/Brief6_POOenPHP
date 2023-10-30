<?php

if (isset($_POST["Connexion"])){
    $email=$_POST["email"];
    $passe=$_POST["passe"];
    

    if(empty($email)or empty($passe)){

        echo 'veillez renseigner les champs';//quant les variables sont vides

    }else{

        include 'classeConnexion.php';
        $connexion1 = new connexion($email,$passe);
        $connexion1 ->connexionPage($db);
        // echo"Bienvenue sur votre page ";
    }
    

    
}else{
        echo 'Un des champs n\'existe pas'; //quant un des champs du formulaire n'exite pas.
    }
?>