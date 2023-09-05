<?php

$data = [
    'Андрей 9',
    'Василий 11',
    'Роман 7',
    'Андрей 2',
    'Роман 1',
    'Андрей 6',
    'Иванов Иван 3',
    'Иван 5',
    'Роман 11',
    'Василий 6',
];

$processedData = [];

foreach ($data as $item) {
    $parts = explode(' ', $item);

    if (is_numeric($parts[1])) {
        $name = $parts[0];
        $number = $parts[1];
    } else {
        $name = $parts[0] . " " . $parts[1];
        $number = $parts[2];
    }


    if (!isset($processedData[$name])) {
        $processedData[$name] = [];
    }

    $processedData[$name][] = $number;
}

foreach ($processedData as $name => $numbers) {
    $sum = array_sum($numbers);
    $numbersString = implode(', ', $numbers);
    echo "$name: $numbersString; $sum  <br>";
}

?>