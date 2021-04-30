<?php 

function calculateLetterGrade($grade){

    if($grade >= 95){
        return "A1";
    }else if($grade >= 90){
        return "A2";
    }else if($grade >= 85){
        return "A3";
    }else if($grade >= 80){
        return "B1";
    }else if($grade >= 75){
        return "B2";
    }else if($grade >= 70){
        return "B3";
    }else if($grade >= 65){
        return "C1";
    }else if($grade >= 60){
        return "C2";
    }else if($grade >= 55){
        return "C3";
    }else if($grade >= 50){
        return "D";
    }else {
        return "F";
    }
}

?>
