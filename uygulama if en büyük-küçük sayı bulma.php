<?php
// kullanıcıdan alınan 3 sayıdan em küçük ve en büyügünü bulma

$sayi1 = 20;
$sayi2 = 17;
$sayi3 = 20;

echo "Sayılar: $sayi1 - $sayi2 - $sayi3 <br><br>";

if($sayi1 >= $sayi2 && $sayi1 >= $sayi3) {
    echo "En Büyük $sayi1 <br>";
}
else if ($sayi2 >= $sayi1 && $sayi1 >= $sayi3) {
    echo "En Büyük $sayi2 <br>";
}
else {
    echo "En Büyük $sayi3 <br>";
}

if($sayi1 <= $sayi2 && $sayi1 <= $sayi3) {
    echo "En Küçük $sayi1 <br>";
}
else if ($sayi2 <= $sayi1 && $sayi1 <= $sayi3) {
    echo "En Küçük $sayi2 <br>";
}
else {
    echo "En Küçük $sayi3 <br>";
}
?>