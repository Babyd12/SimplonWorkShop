<?php 

class EtudiantConstructor{
    public function __construct($nom, $prenom, $matricul, $dateNaissance){
          
        $this -> setNom($nom);
        $this -> setPrenom($prenom);
        $this -> setMatricul($matricul);
        $this -> setDateNaissance($dateNaissance);
    }
}


?>