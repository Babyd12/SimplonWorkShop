<?php
    require_once 'Etudiant.php';
    require_once 'Interfaces.php';

    Class Formateur extends Etudiant  implements InterfaceFormateur{
        public $specialite;
        public $salaire;
        public $voiture;

      
        public function __construct($nom, $prenom, $matricul, $dateNaissance, $salaire, $voiture, $spcialite){
            parent::__construct($nom, $prenom, $matricul, $dateNaissance);

            $this -> setPrenom($spcialite);
            $this -> setSalaire($salaire);
            $this -> setVoiture($voiture);
        }        
    
        //getter 
        public function getSpcialite(){
            return $this->specialite;
        }
        public function getSalaire(){
            return $this->salaire;
        }
        public function getVoiture(){
            return $this -> voiture;
        }

        //setter
        public function setSpcialite($specialite){
            $this -> specialite = $specialite;
        }
        public function setSalaire($newValue){
            $this -> salaire = $newValue;
        }
        public function setVoiture($newValue){
            if(is_string($newValue)){
                $this -> voiture = $newValue;
            }else{
                throw new Exception("The cars must be string only");
                
            }
           
        }
       

        //contrat 
        public function EvaluerEtudiant($studentName, $evaluationDate){

            if( parent::regexDate($evaluationDate) ){
                echo " <br> I will evaluate students ". $studentName . " at ". $evaluationDate;
            }
            else{
                throw new Exception("Erreur de type date");
            }
        
        }

        //function 
        public function sePresenter(){
            echo " <br> Hello world i am <strong>" .$this -> getNom()." ".$this->getPrenom(). " </strong> Im Teacher at simplon, i make <strong>". $this -> getSalaire(). "$ </strong> per month and my car is ". $this -> voiture  ; 
            echo $this -> getSalaire();       
        }

        //surcharge 
        public function setDateNaissance($newValue){
            if(empty($newValue) ||  Etudiant::regexDate($newValue)){
                $this -> dateNaissance = $newValue;
            }
            else{
                echo "No way to define not correct date format"; die();
            }
        }

    }
?>