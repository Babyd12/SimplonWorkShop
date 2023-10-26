<?php
    require_once 'EtudiantConstructor.php';
//   
    class FormateurConstructor extends EtudiantConstructor{
      

        public function __construct($nom, $prenom, $matricul, $dateNaissance, $salaire, $voiture, $spcialite){
            parent::__construct($nom, $prenom, $matricul, $dateNaissance);
            $this -> setNom($nom);
            $this -> setSpcialite($spcialite);
            $this -> salaire = $salaire;
            $this -> voiture = $voiture;
        }        
    }
    
?>