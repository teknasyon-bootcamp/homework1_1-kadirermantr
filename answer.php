<?php

$age = 25;

if ($age >= 0 && $age <= 14) {  // age değeri 0-14 arasında ise
    echo "Çocuk";
} elseif ($age >= 15 && $age <= 24) { // age değeri 15-24 arasında ise
    echo "Genç";
} elseif ($age >= 25 && $age <= 64) { // age değeri 25-64 arasında ise
    echo "Yetişkin";
} elseif ($age >= 65) { // age değeri 65 ve daha büyük ise
    echo "Yaşlı";
} else { // hiçbir şarta uymaz ise
    echo "0'dan büyük bir değer girin";
}