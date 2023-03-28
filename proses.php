<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

if ($operator == '+') {
    $hasil = $angka1 + $angka2;
    echo "Hasil penjumlahan dari $angka1 dan $angka2 adalah $hasil";
} else if ($operator == '-') {
    $hasil = $angka1 - $angka2;
    echo "Hasil pengurangan dari $angka1 dan $angka2 adalah $hasil";
} else if ($operator == '*') {
    $hasil = $angka1 * $angka2;
    echo "Hasil perkalian dari $angka1 dan $angka2 adalah $hasil";
} else if ($operator == '/') {
    $hasil = $angka1 / $angka2;
    echo "Hasil pembagian dari $angka1 dan $angka2 adalah $hasil";
} else {
    echo "Operator yang Anda pilih tidak valid";
}
