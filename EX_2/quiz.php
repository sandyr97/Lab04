<?php
$correct=0;
$radioVal = $_POST["myRadio"];
 if ($radioVal=="fourth")
 {
   echo "Question 1: What is 2+2? <br> Your answer: 4 <br> Correct answer: 4 <br>";
   $correct=$correct+1;
 }
 else {
   echo "Question 1: What is 2+2? <br> Your answer: ".$radioVal."<br> Correct answer: 4 <br>";
 }
 echo "Total Score: ".(($correct/1)*100). "%";
?>
