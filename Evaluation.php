<?php 
require_once 'Etudiant.php'; 
Class Evaluation extends Etudiant{
    private $assessmentLabel;
    private $teacherName;
    private $assessmentDate;
    public $duration;

    public function __construct($nom, $prenom, $matricul, $dateNaissance, $assessmentLabel, $teacherName, $assessmentDate, $duration){
        parent::__construct($nom, $prenom, $matricul, $dateNaissance);

        $this ->setAssessmentLabel($assessmentLabel);
        $this ->setTeacherName($teacherName);
        $this ->setAssessmentDate($assessmentDate);
        $this ->setDuration($duration);
    }

    //setter
    public function setDuration($duration){
        if(is_numeric($duration) && ($duration > 0) ){
            $this -> duration = $duration;
        }
        else{
            throw new Exception("Duration must be a numeric you have given another type");
            
        }
    }

    public function setAssessmentLabel($newValue){
        if(is_string($newValue)&& strlen($newValue) < 10){
            $this -> assessmentLabel = $newValue;
        }
        else{
            throw new Exception("Assessement label must be a string");
            
        }
    }

    Public function setAssessmentDate($newValue){
        if(  parent::regexDate($newValue) ){
            $this -> assessmentDate = $newValue;
        }
        else{
            throw new Exception("Assessment date must be a date type 2000-01-01");
        }
    }

    public function setTeacherName($newValue){
        if(is_string($newValue) && strlen($newValue) < 20){
            $this -> teacherName = $newValue;
        }
        else{
            throw new Exception("Teacher name must be a string");
            
        }
    }

    //getter
    public function getDuration(){
        return $this->duration;
    }

    public function getAssessmentDate(){
        return $this->assessmentDate;
    }

    // il hérite de getNom()::Etudiant
    public function getAssessmentLabel(){
        return $this -> assessmentLabel;
    }

    public function getTeacherName(){
        return $this -> teacherName;
    }

    //NATIVE FUNCTION
    public function showEvaluation(){
        echo "The " . $this -> getAssessmentDate() . " The students will made assessment in ". $this -> getAssessmentLabel() ." For ". $this ->getDuration(). " Hours";
    }
    
    public function infoEvaluation(){
        echo "The " . $this -> getAssessmentDate() . " The students " . $this -> getNom() . " will made assessment in ". $this -> getAssessmentLabel() ." For ". $this ->getDuration(). " Hours";
    }
    

}

$evaluation = new Evaluation("Bass", "Zuckerberg", 3523434, "2000-01-20","php", "Samba Kane", "2023-01-04",3);
// var_dump($evaluation );
$evaluation -> showEvaluation();
echo "<br>";
$evaluation -> infoEvaluation();

?>