<?php
    Interface InterfaceEtudiant{
       public function sePresenter();
       public function faireCours();
       public function faireEvaluation($evaluationName,$evaluationDate);
    }

    Interface InterfaceFormateur{
        public function EvaluerEtudiant($stuentName, $evaluationDate);
    }

    Interface InterfaceEvaluation{
        public function Evaluation($label, $teacher, $assesment, $delay, $description);
    }

?>