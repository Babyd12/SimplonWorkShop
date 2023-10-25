<?php
    require_once 'Interfaces.php';
    require_once 'EtudiantConstructor.php';

    Class Etudiant extends EtudiantConstructor implements InterfaceEtudiant   {
        private $nom;
        private $prenom ;
        private $matricul;
        public $dateNaissance;

        public static function regexDate($date){
            $regex = '/^(\d{4})-(\d{2})-(\d{2})$/';
            return preg_match($regex, $date);
        }

        public function setNom($nom) 
        {

            if(is_string($nom) && strlen($nom) < 15){
                $this -> nom = $nom;
            }
            else{
                throw new Exception("Le nom ne peut contenir que des caractère", 1);
                
            }
            
        }

        public function setPrenom($prenom){     
            if(is_string($prenom) && strlen($prenom) < 25){
                $this -> prenom = $prenom;
            }
            else{
                throw new Exception("Le prennom ne peut contenir que des caractè");
            }
        }

        public function setMatricul($matricul){
            if(is_numeric($matricul) && strlen($matricul) < 10 ){
                $this -> matricul = $matricul;
            }
            else{
                throw new Exception("Le matricul est de type entier");
                
            }
        }

        public function setDateNaissance($date){
            
            if(Etudiant::regexDate($date)){

                $this -> dateNaissance = $date;
            }
            else{
                throw new Exception("Le format de date est incorrecte");
                
            }
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
            echo "Hello world i am <strong>" .$this -> nom." ".$this->prenom. " </strong> Im student at simplon and im born on ". $this -> dateNaissance;        
        }
          public function faireCours(){

          }
          public function faireEvaluation($evaluationName, $evaluationDate){
            Etudiant::regexDate($evaluationDate);
            echo " <br> I must to do evaluation in ". $evaluationName ." the ". $evaluationDate;
          }
    }
  
    // Class Formateur extends Etudiant implements InterfaceFormateur{
    //     public $spcialite;
    //     private $salaire;
    //     private $voiture;
       
        
    //     public function __construct($nom, $prenom, $matricul, $dateNaissance, $salaire, $voiture, $spcialite){
    //         parent::__construct($nom, $prenom, $matricul, $dateNaissance);
            
          
    //         $this -> specialie = $spcialite;
    //         $this -> salaire = $salaire;
    //         $this -> voiture = $voiture;
    //     }

    //     //getter 
    //     public function getSpcialite(){
    //         return $this->spcialite;
    //     }
    //     public function getSalaire(){
    //         return $this->salaire;
    //     }
    //     public function getVoiture(){
    //         return $this -> voiture;
    //     }

    //     //setter
    //     public function setSpcialite($newValue){
    //         $this -> specialite = $newValue;
    //     }
    //     public function setSalaire($newValue){
    //         $this -> salaire = $newValue;
    //     }
    //     public function setVoiture($newValue){
    //         $this -> voiture = $newValue;
    //     }

    //     //contrat 
    //     public function EvaluerEtudiant($stuentName, $evaluationDate){

    //         if( parent::regexDate($evaluationDate) ){
    //             echo " <br> I will evaluate students ". $stuentName . " at ". $evaluationDate;
    //         }
    //         else{
    //             throw new Exception("Erreur de type date");
    //         }
           
    //     }

    //     //function 
    //     public function sePresenter(){
    //         echo " <br> Hello world i am <strong>" .$this -> getNom()." ".$this->getPrenom(). " </strong> Im Teacher at simplon, i make <strong>". $this -> salaire . "$ </strong> per month and my car is ". $this -> voiture  ;        
    //     }

    //     //surcharge 
    //     public function setDateNaissance($newValue){
    //         if(empty($newValue)){
    //             $this -> dateNaissance = $newValue;
    //         }
    //         else{
    //             echo "No way to define not correct date format"; die();
    //         }
    //     }

    // }


    //call function in classes 
    // $student1 = new Etudiant("Bass", "Zuckerberg", 3523434, "2000-01-20");
    // echo $student1 ->sePresenter();
    // echo "<br>" . $student1 -> faireEvaluation("php", "2023-01-20");

    // $teacher1 = new Formateur("Samba", "Kane", 32324,"",2000000, "BMW X6", "Developpeur Full stack");

    // echo $teacher1 ->sePresenter();

    // $studentNama = $student1 -> getNom() ." ". $student1 -> getPrenom();
    // echo $teacher1 ->EvaluerEtudiant($studentNama,"2023-01-01"  );

?>