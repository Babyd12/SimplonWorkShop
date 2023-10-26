<?php 
    require_once 'EtudiantConstructor.php';
    require_once 'Etudiant.php';
   
    // require_once 'FormateurConstructor.php';
    require_once 'Formateur.php';
    require_once 'Evaluation.php';


    $student1 = new Etudiant("Bass", "Zuckerberg", 3523434, "2000-01-20");
    echo $student1 ->sePresenter();
    echo "<br> <h3> Presation of teacher </h3> " . $student1 -> faireEvaluation("php", "2023-01-20");

    $teacher1 = new Formateur("Samba", "Kane", 32324,"2023-10-03",2000000, "BMW X6", "Developpeur Full stack");

    echo $teacher1 ->sePresenter();

    $studentNama = $student1 -> getNom() ." ". $student1 -> getPrenom();
    echo $teacher1 ->EvaluerEtudiant($studentNama,"2023-01-01"  );

    // var_dump($teacher1);

    //Class Evaluation called 
    echo "<br> <h2>Affichage des Evaluations </h2>"; 
$evaluation = new Evaluation("Bass", "Zuckerberg", 3523434, "2000-01-20","php", "Samba Kane", "2023-01-04",3);
// var_dump($evaluation );
$evaluation -> showEvaluation();
echo "<br>";
$evaluation -> infoEvaluation();

?>