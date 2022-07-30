<?php
//1.if statement
//2.switch case statement

    //IF STATEMENT?
    //-->IF statement
    //--elseif statement
//if statement
//--------
$age = 17;
if ($age > 18){
    echo"TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$a = 30;
$b =30.0;
if($a ==$b){
    echo "TRUE";
}else{
    echo"FALSE";
}
 echo "<br>";
$c = 30;
$d =30.0;
if($c != $d){
    echo "TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$e = 30;
$f =30.0;
if($e === $f){
    echo "TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$g = 30;
$h =30.0;
if($e !== $f){
    echo "TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$i = 30;
$j =30.0;
if($i <> $j){
    echo "TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$k = 30;
$l =30.0;
if($k <> $l && $k == $l){
    echo "TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$m = 30;
$n =30.0;
if($m >= $n){
    echo "TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$o = 5;
$p =2;
if($o % $p ==1){
    echo "TRUE";
}else{
    echo"FALSE";
}
echo "<br>";
$q = 5;
$r =2;
echo $q <=> $r;
echo "<br>";
//Else If statement
//-------------
$firstnumber =30;
$secondnumber =30;
if ($firstnumber > $secondnumber){
    echo "first number is greater than second number";
}elseif ($firstnumber < $secondnumber){
    echo "first number is less than second number";
}else{
    echo "first number is equal to second number";
}
echo "<br>";
$marks =90;
if ( $marks < 20){
    echo "E";
}elseif ($marks <25){
    echo "D-";
}elseif ($marks <35){
    echo "D";
}elseif ($marks <45){
    echo "D+";
}elseif ($marks <50){
    echo "C-";
}elseif ($marks <55){
    echo "C";
}elseif ($marks <60){
    echo "C+";
}elseif ($marks <65){
    echo "B";
}elseif ($marks <70){
    echo "B+";
}elseif ($marks <100){
    echo "A-";
}else{
    echo "enter valid marks";
}
echo "<br>";
//2.SWITCH CASE STATEMENT
$bettingNumber =0;
switch ($bettingNumber){
case 1:
    echo "oops!!! you lost!!!";
    break;
    case 2:
        echo "oops you lost!!!";
break;
        case 3:
            echo "congrats!!! you won!!!";
            break;
    case 4:
        echo "oops!!! you lost";
    default:
        echo "Please enter a number from 1-4 to bet";}




















