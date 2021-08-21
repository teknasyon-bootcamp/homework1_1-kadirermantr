<?php

$age = 25;

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */

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