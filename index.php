<html>
<?php
$name = "Misha"; #First Task(1)
echo $name;
?>

<?php
$a = 5;
$b = 10;       #Second Task(2)
echo "Sum 'a' and 'b' is " .  $a + $b;
?>

<?php
$width = 8;
$height = 5;          #Third Task(3)                 
$area_of_rectangle = $width * $height;
echo "Area of rectangle is product 'a' to 'b' = " . $area_of_rectangle;
?>

<?php
$x = 3;
$y = 7;                #Fourth Task(4)
echo "x = $y, " . "y = $x";
?>

<?php
$firstName = "Mikhail"; 
$lastName = "Mamedov"; #Fifth Task(5)  
echo "Имя Фамилия: " . $firstName . " " . $lastName;
?>

<?php
$total = 200;
$percentage = 15;          #Sixth Task(6)
$solution = (15/100) * 200;
echo "15% of 200 is " . $solution;
?>

<?php
$celsius = 25;
$F = ($celsius * 9/5) + 32;  #Seventh Task(7)
echo $F;
?>

<?php
$number = 12;
if($number % 2 == 0){
    echo "The number is even";
}                              #Eighth Task(8)
else{
    echo "The number isn't even";
}
?>

<?php
$a = 15;
$b = 20;
$c = 25;
echo "$a <br>";
if($a > $b){
echo $a;
}
elseif($b > $a){
echo "$b <br>";
}                      #Ninth Task(9)
elseif($a > $c){
echo $a;
}
else{
echo "$c <br>";
}
if($b > $c){
echo $b;
}
elseif($c > $b){
echo $c;
}
?>

<?php
$num1 = 35;
$num2 = 67;      #Tenth Task(10)
$num3 = 93; 
echo "Sum of numbers is " . $num1 + $num2 + $num3;
?>

<?php
$numbers = [1,2,3,4,5];
$sum = array_sum($numbers);       #Eleventh Task(11)x
$average = $sum / count($numbers);
echo "Average of numbers is - " . $average;
?>

<?php
$num = 4;
$square = $num ** 2;                #Twelfth Task(12)
echo "Square of 4 is - " . $square;
?>

<?php
$a = 8;
$b = 3;
if($a > $b){       #Thirteenth Task(13)
    echo $a;
}
else{
    echo $b;
}
?>

<?php
$number = "123";
$reversedStr = strrev($number);  #Fourteenth Task(14)
echo $reversedStr;
?>

<?php
$a = 30;
$b = 12;      #Fifteenth Task(15)
$c = $a % $b;
echo $c;
?>

<?php
$dollar = 100;
$rouble_in_dollars = 25000 / $dollar;    #Sixteenth Task(16)
echo "25000 roubles is " . $rouble_in_dollars . " USD"; 
?>

<?php
$minutes = 179;
$hours = floor($minutes / 60);   #Seventeenth Task(17)
$rest_minutes = $minutes % 60;  
echo "Time is: " . $hours . " hour " . $rest_minutes . " minutes";
?>

<?php
$article = 750;
$quantity_of_article = 5;
$commonSumOfArticle = $article * $quantity_of_article;          #Eighteenth Task(18)
echo "Price for article is " . $commonSumOfArticle . " rubles";
?>

<?php
$a = 15;
$b = 67;
$ratio = $b / $a;                #Nineteenth Task(19)
$rest_of_ratio = $b % $a;
echo "Ratio 'a' to 'b' is - " . $ratio . ". Rest - " . $rest_of_ratio;
?>

<?php
$seconds = 3760;
$hours = floor($seconds / 3600);
$R_seconds = $seconds % 3600;     #Twentieth Task(20)
$minutes = floor($R_seconds / 60);
echo "Time is " . $hours . " hours " . $minutes . " minutes ";
?>

<?php

?>
</html>