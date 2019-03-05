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
  echo "<br>";
  $radioVal3 = $_POST["myRadio3"];
   if ($radioVal3=="50")
   {
     echo "Question 3: What is 25*2? <br> Your answer: ".$radioVal3."<br> Correct answer: 50 <br>";
     $correct=$correct+1;
   }
   else {
     echo "Question 3: What is 25*2? <br> Your answer: ".$radioVal3."<br> Correct answer: 50 <br>";
   }
   echo "<br>";
   $radioVal4 = $_POST["myRadio4"];
    if ($radioVal4=="7")
    {
      echo "Question 4: What is 35/5? <br> Your answer: ".$radioVal4."<br> Correct answer: 7 <br>";
      $correct=$correct+1;
    }
    else {
    echo "Question 4: What is 35/5? <br> Your answer: ".$radioVal4."<br> Correct answer: 7 <br>";
    }
    echo "<br>";
    $radioVal5 = $_POST["myRadio5"];
     if ($radioVal5=="64")
     {
       echo "Question 5: What is 8<sup>2</sup>? <br> Your answer: ".$radioVal5."<br> Correct answer: 64 <br>";
       $correct=$correct+1;
     }
     else {
     echo "Question 5: What is 8<sup>2</sup>? <br> Your answer: ".$radioVal5."<br> Correct answer: 64 <br>";
     }
     echo "<br>";
 echo "<br>Total Score: ".(($correct/5)*100). "%";
?>
