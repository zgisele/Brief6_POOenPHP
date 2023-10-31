<?php

include 'classeBase.php';
// include 'classeInscript.php';

class connexion{
    private $email;
    private $passe;



// -----------------------------------------------partie constructeur---------------------------------------------------------------------------
public function __construct($email,$passe){
    // parent::__construct($conn);
   
    
    $this->setemail($email);
    $this->setpasse($passe);
   

}
// ----------------------------------------------partie getter-------------------------------------------------------------------------


public function getemail()
{
    return $this->email;
}

public function getpasse()
{
    return $this->passe;
}

// ------------------------------------partie setter------------------------------------------------------------------------
public function setemail($email){
    if (!preg_match("/^[a-zA-Z]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/", $email)){

        echo "L'adresse e-mail n'est valide.";

    }else {
        $this->email= $email;
    }
}
public function setpasse($passe){

    if(!preg_match("/^[A-Za-z0-9.-]+$/",$passe ) &&  strlen($passe)<8){

        echo "inserer un mot de passe valide";

    }else {

        $this->passe = $passe ;
    }

}
    public function connexionPage($db){


        $query = "SELECT * FROM ` inscription2` WHERE email2 = :email2";
        
        $stmt = $db->prepare($query);
        $stmt->bindValue(':email2',$this->email);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
            // Vérification du mot de passe
        if ($result && $this->passe=== $result['passe2']) {
            echo 'Bienvenue sur votre espace de travaille E-Taxibokko.';

            
           
            include('Listes_connect.php');
            // header('Location: Listes_connect.php'); 
            // exit;
    } 
    }

}


// $connexion1 = new connexion("kafoui@gmail.com","kafoirusbfg2345");
// // $connexion1 = new connexion("maintenantGRE34@gmail.com","Bienvenue999");
// $connexion1 ->connexionPage($db);


?>