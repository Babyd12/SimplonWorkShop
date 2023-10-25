<?php
     require_once 'Interfaces.php';

    Class Etudiant implements InterfaceEtudiant {
        protected $nom;
        protected $prenom ;
        protected $matricul;
        public $dateNaissance;

        public function __construct($nom, $prenom, $matricul, $dateNaissance){
            $this -> nom = $nom;
            $this -> prenom = $prenom;
            $this -> maticul = $matricul;
            $this -> dateNaissance = $dateNaissance;
        }

        public function setNom($nom) 
        {
            if(!is_string($nom)){
                $this -> nom = $nom;
            }
            else{
                throw new Exception("Le nom ne peut contenir que des caractère", 1);
                
            }
            
        }
        public function setPrenom($prenom){     
            if(!is_string($prenom)){
                $this -> prenom = $prenom;
            }
            else{
                throw new Exception("Le prennom ne peut contenir que des caractè");
            }
        }
        public function setMatricul($matricul){
            $this -> matricul = $matricul;
        }

        //Getter 
        public function getNom() {
            return $this -> nom;
        }
        public function getPrenom(){
            return $this -> prenom;
        }
        public function getMatricul() {
            return $this -> matricul;
        }

        //Etudiant natif function 
       

          //Contrat 

          public function sePresenter(){
            echo "Hello world i am <strong>" .$this -> nom." ".$this->prenom. " </strong> Im student at simplon and im born at ". $this -> dateNaissance;        
        }
          public function faireCours(){

          }
          public function faireEvaluation(){

          }
    }
  
    Class Formateur extends Etudiant implements InterfaceFormateur{
        public $spcialite;
        private $salaire;
        private $voiture;

        public function __construct($nom, $prenom, $matricul, $dateNaissance, $salaire, $voiture, $spcialite){
            parent::__construct($nom, $prenom, $matricul, $dateNaissance);
            
          
            $this -> specialie = $spcialite;
            $this -> salaire = $salaire;
            $this -> voiture = $voiture;
        }

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
        public function EvaluerEtudiant(){

        }

        //function 
        public function sePresenter(){
            echo " <br> Hello world i am <strong>" .$this -> nom." ".$this->prenom. " </strong> Im Teacher at simplon, i make ". $this -> salaire . "$ per month and my car is ". $this -> voiture  ;        
        }

    }


    //call function in classes 
    $student1 = new Etudiant("Bass", "Zuckerberg", 3523434, "23-01-2000");
   echo $student1 ->sePresenter();

   $teacher1 = new Formateur("Samba", "Kane", 32324, "",2000000, "BMW X6", "Developpeur Full stack");
    echo $teacher1 ->sePresenter();

?>