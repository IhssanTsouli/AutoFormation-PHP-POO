<?php

class Stagiaire{
     // 1 declaration des attributs (encapsulation) :
    private $nom,$prenom,$ville;
    //const nationality ="marocaine";
    //static $pay = "maroc";
    
    // 2 declaration du(es) constructeur 
    function __construct($nom,$prenom,$ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
       
       
    }

    // 3  set et get
    public function getNom(){
       return $this->nom ;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom ;
     }
     public function setPrenom($prenom){
         $this->prenom = $prenom;
     }
     public function getVille(){
        return $this->ville ;
     }
     public function setVille($ville){
         $this->ville = $ville;
     }

     // 4 declaration des methodes :
     // 4-1 non static 
     public function SePresenter(){
         echo "Nom: $this->nom <br/>Prenom: $this->prenom Cin:$cin";
     }
     // 4-2 static
     static function sayHello(){
         echo "Hello";
     }

}




?>
