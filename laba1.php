<?php
$input = readline("Введіть число: ");
$sum = 0;

if (!is_numeric($input)) {

    echo "Помилка! Введіть число.";

} else {

    while ($input > 0) {
        $sum += $input % 10;
        $input = intdiv($input, 10);
    }

    echo "Сума цифр = " . $sum;
}

//Завдання 2.
$number= readline("Введіть число:");
$find_number= readline("введіть цифру що потрібно знати: ");

if(!is_numeric($number)|| !is_numeric($find_number) || strlen($find_number)!=1){
    echo "Error! enter number";
}else {
    $count_number= 0;
    $number=(string)$number;

    for($i=0;$i<strlen($number);$i++){
        if($number[$i]==$find_number){
            $count_number++;
        }
    }
    echo "Number". $find_number. " meets " . $count_number  ;
}