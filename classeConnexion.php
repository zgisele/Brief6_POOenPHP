<?php

include 'classeBase.php';

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
    
            // On sélectionne les champs email et mot de passe de la table inscription
            $sql = 'SELECT prenom,nom,telephone,email2, passe2 FROM ` inscription2`';
            $inscription =  $db->query($sql);


            foreach ($inscription  as  $inscipt):  // début de la boucle

                if(($inscipt['email2'] == $this->email) && ($inscipt['passe2'] == $this->passe )){

                    echo"Bienvenue sur votre page E-Taxibokko ";

                    break;
                     

                } else{
                

                    echo "veillez vous inscrire";
                    break;

                } endforeach ;  // fin de la boucle 
}
 



}
// $connexion1 = new connexion("kafoui@gmail.com","kafoirusbfg2345");
// // $connexion1 = new connexion("maintenantGRE34@gmail.com","Bienvenue999");
// $connexion1 ->connexionPage($db);


?>