<?php 
//even number define
$number = 20;

if($number % 2 == 0){
    echo "This is a Even number";
}else{
    echo "This a Odd number \n";
}
//Odd number define
$number = 21;
if($number % 2 == 0){
    echo "This is a Even number";
}else{
    echo "This a Odd number \n";
}
//Age lavelchecker by condition
$age = 200;
if($age >= 13 && $age <= 19){
    echo "He is teenager";
}else if($age >= 1 && $age < 13){
    echo "He is Children";
}else if($age >= 20 && $age <= 45){
    echo "He is Adult";
}else if($age > 45 && $age <= 80){
    echo "He is Old man";
}else if($age > 80 && $age <= 150){
    echo "He is Extra Old man";
}else{
    echo "He is Vampire";
}

//Lip Year
$years = 2012;
if($years % 4 == 0 && $years % 100 == 0 && $years % 400 == 0){
    echo "\n {$years} is A Lip Year";
}else{
    echo "\n {$years} is not A Lip Year \n";
}

//turnary Oparetor
$name = "Rakib";
$output = ('sakib' == $name) ? "My name is sakib" : "I am not sakib  \n";
echo $output;

$number = 11;
$result = ($number % 2 == 0) ? "$number is Emen numbr" : "$number is Odd numbr"; 
echo $result;

