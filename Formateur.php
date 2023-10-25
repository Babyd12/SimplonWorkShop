<?php
    require_once 'Etudiant.php';
    require_once 'Interfaces.php';

    Class Formateur extends Etudiant implements InterfaceFormateur{
        public $spcialite;
        private $salaire;
        private $voiture;
    
        //getter 
        public function getSpcialite(){
            return $this->spcialite;
        }
        public function getSalaire(){
            return $this->salaire;
        }
        public function getVoiture(){
            return $this -> voiture;
        }

        //setter
        public function setSpcialite($newValue){
            $this -> specialite = $newValue;
        }
        public function setSalaire($newValue){
            $this -> salaire = $newValue;
        }
        public function setVoiture($newValue){
            $this -> voiture = $newValue;
        }

        //contrat 
        public function EvaluerEtudiant($stuentName, $evaluationDate){

            if( parent::regexDate($evaluationDate) ){
                echo " <br> I will evaluate students ". $stuentName . " at ". $evaluationDate;
            }
            else{
                throw new Exception("Erreur de type date");
            }
        
        }

        //function 
        public function sePresenter(){
            echo " <br> Hello world i am <strong>" .$this -> getNom()." ".$this->getPrenom(). " </strong> Im Teacher at simplon, i make <strong>". $this -> salaire . "$ </strong> per month and my car is ". $this -> voiture  ;        
        }

        //surcharge 
        public function setDateNaissance($newValue){
            if(empty($newValue)){
                $this -> dateNaissance = $newValue;
            }
            else{
                echo "No way to define not correct date format"; die();
            }
        }

    }
?>