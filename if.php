<?php


    $score = 55;
    echo "My score is: " . $score . "<br>";
    echo "Did i pass?<br>";

    if($score >= 60){
        echo "YES! you pass!<br>";
    }
    else{
        echo "NO! you failed!<br>";
    };

    function score($score){
        if($score >= 90 && $score <= 100) return "A";
        else if($score >= 80 && $score < 90) return "B";
        else if($score >= 70 && $score < 80) return "C";
        else if($score >= 60 && $score < 70) return "D";
        else return "E";
    };

    $level = score($score);
    echo "Your level is: " . $level . "<br>";

    switch($level){
        case "A":
            echo "You are great!";
            break;
        case "B":
            echo "Yod did good!";
            break;
        case "C":
            echo "Not too bad!";
            break;
        case "D":
            echo "You need more practise!";
            break;
        case "E":
            echo "You suck!";
            break;
    }


?>