//Q4. Wap to print sum of first and last digit from any four digit number
//num=1234 ans 5 
<?php
$num = 1234;
$first=(int)($num/1000);
$last=$num%10;
$sum=$first+$last;
echo "The sum of first and last digit in number 1234 : ". $sum;
?>
