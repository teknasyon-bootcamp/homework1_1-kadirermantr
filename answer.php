<?php

$age = 25;

if ($age >= 0 && $age <= 14) {
    echo "Çocuk";
} elseif ($age >= 15 && $age <= 24) {
    echo "Genç";
} elseif ($age >= 25 && $age <= 64) {
    echo "Yetişkin";
} elseif ($age >= 65) {
    echo "Yaşlı";
} else {
    echo "0'dan büyük bir değer girin";
}