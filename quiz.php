<?php
//access the global array called $_POST to get the values from the text fields

$question1 = $_POST["contact"];
$question2 = $_POST["fruit"];
$question3 = $_POST["name"];
$question4 = $_POST["number"];
$question5 = $_POST["mean"];
$score = 0;
if($question1 == "email"){
	$score++;}
if($question2 == "apple"){
	$score++;}
if($question3 == "Miao"){
	%score++;}
if($question4 == "2"){
	$score++;}
if($question5 == "tt"){
	$score++;}

echo "You answerd ".$score." questions correctly";	
$score = $score * 20;
echo "Your Grade is:". $score ."/100<br>";

echo "Question 1: Please select My favorite contact method:<br>";
echo "Your Answer is: ".$question1."<br>";
echo "Correctly Answer is: Email<br>";

echo "Question 2: Please select My favorite fruit:<br>";
echo "Your Answer is: ".$question2."<br>";
echo "Correctly Answer is: Apple<br>";

echo "Question 3: Who is the oldest person?<br>";
echo "Your Answer is: ".$question3."<br>";
echo "Correctly Answer is: Miao<br>";

echo "Question 4: 1 + 1 = ?<br>";
echo "Your Answer is: ".$question4."<br>";
echo "Correctly Answer is: 2<br>";

echo "Question 5: What does '666'  mean in Chinese? <br>";
echo "Your Answer is: ".$question5."<br>";
echo "Correctly Answer is: 'You did a great job' <br>";



?>