<?php
include_once './Student.php';

class StudentPro extends Student {
    private $salaire;

    public function __construct($nom,$prenom,$ville,$salaire){

        parent:: __construct($nom,$prenom,$ville);
        $this->salaire = $salaire;
    }
    function getSalaire(){
        return $this->salaire;
    }
    function setSalire($salaire){
        $this->salaire =

    }
    
}
?>