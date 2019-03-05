<?php
$correct=0;
$radioVal1 = $_POST["myRadio1"];
 if ($radioVal1=="4")
 {
    echo "Question 1: What is 2+2? <br> Your answer: ".$radioVal1."<br> Correct answer: 4 <br>";
   $correct=$correct+1;
 }
 else {
   echo "Question 1: What is 2+2? <br> Your answer: ".$radioVal1."<br> Correct answer: 4 <br>";
 }
echo "<br>";
 $radioVal2 = $_POST["myRadio2"];
  if ($radioVal2=="10")
  {
    echo "Question 2: What is 20-10? <br> Your answer: ".$radioVal2."<br> Correct answer: 10 <br>";
    $correct=$correct+1;
  }
  else {
    echo "Question 2: What is 20-10? <br> Your answer: ".$radioVal2."<br> Correct answer: 10 <br>";
  }

 echo "<br>Total Score: ".(($correct/2)*100). "%";
?>
