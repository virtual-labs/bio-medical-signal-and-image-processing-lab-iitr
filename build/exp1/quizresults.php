<?php


$total=0;

$Q1 = $_POST['Q1'];
$Q2 = $_POST['Q2'];
$Q3 = $_POST['Q3'];
$Q4 = $_POST['Q4'];
$Q5 = $_POST['Q5'];
$Q6 = $_POST['Q6'];
$Q7 = $_POST['Q7'];
$Q8 = $_POST['Q8'];
$Q9 = $_POST['Q9'];
$Q10 = $_POST['Q10'];
$Q11 = $_POST['Q11'];
$Q12 = $_POST['Q12'];
$Q13 = $_POST['Q13'];
$Q14 = $_POST['Q14'];
$Q15 = $_POST['Q15'];
$Q16 = $_POST['Q16'];
$Q17 = $_POST['Q17'];
$Q18 = $_POST['Q18'];


echo "You answered the following questions correctly : ";
if ($Q1==3)
{
$total=$total+1;
echo "1 ";
}
if ($Q2==1)
{
$total=$total+1;
echo "2 ";
}
if ($Q3==1)
{
$total=$total+1;
echo "3 ";
}
if ($Q4==1)
{
echo "4 ";
$total=$total+1;
}
if ($Q5==1)
{
$total=$total+1;
echo "5 ";
}
if ($Q6==4)
{
$total=$total+1;
echo "6 ";
}
if ($Q7==2)
{
$total=$total+1;
echo "7 ";
}
if ($Q8==1)
{
$total=$total+1;
echo "8 ";
}
if ($Q9==2)
{
$total=$total+1;
echo "9 ";
}
if ($Q10==2)
{
$total=$total+1;
echo "10 ";
}
if ($Q11==1)
{
$total=$total+1;
echo "11 ";
}
if ($Q12==2)
{
$total=$total+1;
echo "12 ";
}
if ($Q13==2)
{
$total=$total+1;
echo "13 ";
}
if ($Q14==1)
{
$total=$total+1;
echo "14 ";
}
if ($Q15==1)
{
$total=$total+1;
echo "15 ";
}
if ($Q16==3)
{
$total=$total+1;
echo "16 ";
}
if ($Q17==3)
{
$total=$total+1;
echo "17 ";
}
if ($Q18==4)
{
$total=$total+1;
echo "18 ";
}
echo "\n\n\n\n";
echo "<html>
<head></head>";
echo "<body class=\"page_bg\">";

echo "<br>Total number of correct answers : ".$total."/18";

echo "	<h2>Correct Answers</h2>
<br>
	<ol> 
                <li><b>Evaluate 2*3+5%3.</b></li> 
                8<br> 
		<br> 
                <li><b>Evaluate (2*(3+5))%3.</b></li> 
                1<br>
		<br> 
                <li><b>The order of evaluation of the operators in (2*(3+5))%3 is:</b> </li> 
                +, *, %<br> 
		<br> 
                <li><b>The order of evaluation of the operators in 2*(3+5)%3 is: </b></li> 
                +, *, %<br> 
		<br> 
<b>Assume x=8.8, y=3.5 and z= -5.2 and m=4 for the following questions</b><br><br> 
<li><b>Calculate x%y</b></li> 
		1.8<br> 
		<br><li><b>Calculate x%m</b></li> 
                0.8<br> 
		<br><li><b>Calculate 7/m</b></li> 
                1<br> 
		<br> 
<li><b>Calculate 2*x/(3*y)</b></li> 
		1.67<br>
		<br>
<li><b>Calculate 2*x/3*y</b></li> 
                20.51<br> 
		<br> 
<b>Assume a=5, b=0 and c=-2 for the following questions</b><br><br> 
<li><b>Calculate (a |b )&gt;c</b></li> 
		1<br> 
		<br> 
<li><b>Calculate (a&amp;c)*b%2</b></li> 
		0<br> 
		<br> 
<li><b>Calculate b++&gt;c</b></li> 
		1<br> 
		<br>
<li><b>Calculate a&gt;((a-2==3)?1:0)</b></li> 
                1<br> 
		<br> 
<b>Assume a='E' , b='5' and c='?' are  char type variables for the following questions</b><br><br> 
<li><b>Calculate b-2</b></li> 
		'C'<br> 
		<br> 
<li><b>Calculate b+c</b></li> 
		't'<br> 
		<br> 
<li><b>Calculate a%c</b></li> 
                6<br> 
		<br> 
<li><b>Calculate a*3</b></li> 
                207<br> 
<br> 
<li><b>Calculate a*&#39;3&#39;</b></li> 
                3519<br> 
		<br> 
</ol>";
echo "</body></html>";
?>
