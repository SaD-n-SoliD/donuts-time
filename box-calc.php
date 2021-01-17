<?php

$countArr = file_get_contents('php://input');
$countArr = json_decode($countArr);
$sum = 0;

require_once 'connection.php';

$donutsData = $pdo->query("SELECT * FROM donut_blocks");

// $dataIsValid = true;

// foreach ($countArr as $count) {
// 	if ($count < 0) {
// 		$dataIsValid = false;
// 		break;
// 	}
// 	$sum += $count;
// }

// if ($sum !== 3||6||9) $dataIsValid = false;

// $sum = 0;

// if ($dataIsValid) {

foreach ($donutsData as $donut) {
	$path = 'idd' . $donut['id'];
	$sum += $donut['price'] * $countArr->$path;
}
echo $sum;

	// } 
	// else {
	// 	echo 'Ошибка! Неверное количество донатов';
	// }
