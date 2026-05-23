<?php

// Завдання 1
echo "=== Завдання 1: Видалення парних чисел ===\n";

$array = [];
for ($i = 1; $i <= 15; $i++) {
    $array[$i] = rand(1, 100);
}
echo "Початковий масив: " . implode(", ", $array) . "\n";

$result = array_filter($array, function($num) {
    return $num % 2 != 0;
});
$result = array_values($result);

echo "Після видалення парних: " . implode(", ", $result) . "\n\n";


// Завдання 2
echo "=== Завдання 2: Перевірка паліндрому ===\n";

echo "Введіть числа через кому: ";
$input = readline();
    $array1 = array_map('intval', explode(",", $input));
$reversed = array_reverse($array1);

echo "Масив: " . implode(", ", $array1) . "\n";

if ($array1 === $reversed) {
    echo "Масив є паліндромом\n\n";
} else {
    echo "Масив НЕ є паліндромом\n\n";
}


// Завдання 3
echo "=== Завдання 3: Кількість парних чисел ===\n";

echo "Введіть числа через кому: ";
$input3 = readline();
$array3 = array_map('intval', explode(",", $input3));

$evenCount = 0;
foreach ($array3 as $num) {
    if ($num % 2 === 0) {
        $evenCount++;
    }
}

echo "Масив: " . implode(", ", $array3) . "\n";
echo "Кількість парних чисел: $evenCount\n\n";


// Завдання 4
echo "=== Завдання 4: Числа кратні 4 у діапазоні 100–200 ===\n";

$sum4 = 0;
$multiples4 = [];

for ($i = 100; $i <= 200; $i++) {
    if ($i % 4 === 0) {
        $multiples4[] = $i;
        $sum4 += $i;
    }
}

echo "Числа кратні 4: " . implode(", ", $multiples4) . "\n";
echo "Сума: $sum4\n\n";


// Завдання 5
echo "=== Завдання 5: Другий за величиною елемент ===\n";

$array5 = [];
for ($i = 0; $i < 10; $i++) {
    $array5[] = rand(0, 50);
}

echo "Масив: " . implode(", ", $array5) . "\n";

$unique = array_unique($array5);
rsort($unique);

if (count($unique) >= 2) {
    echo "Найбільший: $unique[0]\n";
    echo "Другий за величиною: $unique[1]\n\n";
} else {
    echo "Усі елементи однакові, другого немає\n\n";
}


// Завдання 6
echo "=== Завдання 6: Добуток непарних чисел ===\n";

$array6 = [];
for ($i = 0; $i <= 14; $i++) {
    $array6[] = rand(1, 100);
}

echo "Масив: " . implode(", ", $array6) . "\n";

$product = 1;
$odds = [];
foreach ($array6 as $num) {
    if ($num % 2 !== 0) {
        $odds[] = $num;
        $product *= $num;
    }
}

echo "Непарні: " . implode(", ", $odds) . "\n";
echo "Добуток непарних: $product\n\n";


// Завдання 7
echo "=== Завдання 7: Дата у текстовому форматі ===\n";
echo"Введіть дату (день,місяць,рік)числом";

$task7 = readline();
$mounths = [
    1  => "січня",    2  => "лютого",   3  => "березня",
    4  => "квітня",   5  => "травня",   6  => "червня",
    7  => "липня",    8  => "серпня",   9  => "вересня",
    10 => "жовтня",   11 => "листопада", 12 => "грудня"
];

$parts = explode(".", $task7);
$day   = (int)$parts[0];
$month = (int)$parts[1];
$year  = (int)$parts[2];

echo "Результат: $day {$mounths[$month]} $year року\n\n";


// Завдання 8
echo "=== Завдання 8: Елементи кратні 100 ===\n";

$number = [];
for ($i = 0; $i <= 19; $i++) {
    $number[] = rand(50, 500);
}

echo "Масив: " . implode(", ", $number) . "\n";

$count = 0;
foreach ($number as $nums) {
    if ($nums % 100 === 0) {
        $count++;
    }
}

echo "Кількість кратних 100: $count\n\n";


// Завдання 9
echo "=== Завдання 9: Числа кратні 5 від 20 до 45 ===\n";

$numbs = [];
$sums = 0;

for ($i = 20; $i <= 45; $i++) {
    if (fmod($i, 5) == 0) {
        $numbs[] = $i;
        $sums += $i;
    }
}

echo "Числа: " . implode(", ", $numbs) . "\n";
echo "Сума: $sums\n\n";


// Завдання 10
echo "=== Завдання 10: Симуляція світлофора ===\n";

echo "Введіть хвилину від 1 до 60: ";
$minuts = (int)readline();
$cyclePosition = ($minuts - 1) % 5;

if ($cyclePosition < 3) {
    $color = "ЗЕЛЕНИЙ";
} else {
    $color = "ЧЕРВОНИЙ";
}

echo "Хвилина: $minuts\n";
echo "Сигнал: $color\n";