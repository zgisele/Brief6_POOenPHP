<?php
include 'classeBase.php';
class inscription{
    private $nom;
    private $prenom;
    private $telephone;
    private $email2;
    private $passe2;
   
// -----------------------------------------------partie constructeur---------------------------------------------------------------------------
    public function __construct($prenom,$nom,$telephone,$email2,$passe2){
        // parent::__construct($conn);
       
        $this->setprenom($prenom);
        $this->setnom($nom);
        $this->settelephone($telephone);
        $this->setemail($email2);
        $this->setpasse2($passe2);
       

    }
// ----------------------------------------------partie getter-------------------------------------------------------------------------
    public function getnom()
    {
      return $this->nom;
    }
    public function getprenom()
    {
        return $this->prenom;
    }
    public function gettelephone()
    {
        return  $this->telephone;
    }
    public function getemail()
    {
        return $this->email2;
    }
    public function getpasse2()
    {
        return $this->passe2;
    }
   
    // ------------------------------------partie setter------------------------------------------------------------------------
    public function setnom($nom)
    {
    
        if(!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ-]+$/",$nom)){

            echo "Le nom  doit contenir uniquement des lettres alphabétiques.";
        
        }else {
            $this->nom = $nom;
        }
    }

    public function setprenom($prenom){

        if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-ÿ-]+$/", $prenom)) {

            echo "Le  prénom doit contenir uniquement des lettres alphabétiques.";
        
        }else {
            $this->prenom = $prenom;
        }
        
    }
    public function settelephone($telephone){

        if(!preg_match("/^7[0-9]{8}$/", $telephone)){

            echo "le numero de telephone n'est pas valide.";

        }else {
            $this->telephone = $telephone;
        }


    }

    public function setemail($email2){
        if (!preg_match("/^[a-zA-Z]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/", $email2)){

            echo "L'adresse e-mail n'est valide.";

        }else {
            $this->email2= $email2;
        }
    }
    public function setpasse2($passe2){

        if(!preg_match("/^[A-Za-z0-9.-]+$/",$passe2 ) &&  strlen($passe2)<8){

            echo "inserer un mot de passe valide";

        }else {
            $this->passe2 = $passe2 ;
        }
    
    }
    public function insertion($db){

        $sqlQuery ="INSERT INTO ` inscription2` (prenom,nom,telephone,email2,passe2) VALUES ('".$this->prenom."','".$this->nom."','".$this->telephone."','".$this->email2."','".$this->passe2."')";

                $reponse = $db->exec($sqlQuery);//execution de la requete

                // $this->conn
                if ($reponse==0) {
                    echo 'Rien n\'est insérer' ;// Le resultat si l'execution n'a pas fonctionner
                }else{
                    echo'<h2>Merci! de vous avoir inscrire à E-Taxibokko</h2><br>'.$this->prenom.'  '.$this->nom;// Le resultat si l'execution a pas fonctionner
                    
                }

    }

   
}
// $inscription1 = new inscription("yves","ZOUNDETE",776547897,"kafoui@gmail.com","kafoirusbfg2345");
// $inscription1->insertion($db);

