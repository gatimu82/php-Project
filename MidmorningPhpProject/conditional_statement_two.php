<?php
//create a php logic to calculate the BMI of any user,
//Henceforth, determine if the user is either
//1. Underweight
//2. Normal weight
//3. Over weight
//4. Obese
//N/B: i. Use formula: Weight(Kg)/Height(Meters) squared
//ii.Use scale:
//0-24----------Underweight
//25-34---------Normal weight
//35-39---------overweight
//40-above--------Obese
$weight = 80;
$height =1.8;
$bmi = $weight / ($height * $height);
if ($bmi < 24){
    echo "underweight";
}elseif($bmi < 34){
    echo "normal weight";
}elseif ($bmi < 39){
    echo "overweight";
}else{
    echo "obese";
}
echo "<br>";
//Write a php logic to determine the worthiness of taking a certain
//loan basing on its interest after computation
//N/B:if the interest is less than:
//          3000-----------------very advisable
//          4000-----------------fairly advisable
//          5000-----------------Not advisable
//       ii. If the interest is anything more than the provided limits,
//            regard loan as a scam
$principle = 50000;
$rate = 8;
$time = 2;
$interest = ($principle * $rate * $time)/100;
if ($interest < 3000){
echo "very advisable";
}elseif ($interest < 4000){
    echo "fairly advisable";
}elseif ($interest < 5000){
    echo "not advisable";
}else{
   "scam";
}
echo "<br>";
$radius =90;
$height =20;
$pie = 3.142;
$area = ($pie * $radius * $radius);
$volume=($area * $radius*$radius*$height);
if($volume<2500){
    echo"Consider cylinder";
}elseif ($volume >$area){
    echo "consider cylinder";
}else{
    echo "reject";
}
//create a php logic to check any user's login credidentials.
//Allow the user to log in if their address email is emobilis@gmail.com
//their password is emobilis123. Ask the user to register instead if
//the credidentials are incorrect.
echo "<br>";
$email = "emobilis@gmail.com";
$password ="emobilis123";
if($email !== "emobilis@gmail.com"){
    echo "register";
}elseif ($password !=="emobilis123"){
    echo "register";
}else{
    echo "login succesful";
}



