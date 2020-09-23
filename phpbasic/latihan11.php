<?php
$str = 'Belajar PHP di NF Mengasyikan';
$str = strtoupper($str); // cetak huruf besar semua
echo $str;
$str = strtolower($str); // cetak huruf kecil semua
echo '<hr>'.$str;
$str = ucwords($str); // setiap awal kata dicetak huruf besar
echo '<hr>'.$str.'<hr>';

$ar_buah = ['semangka', 'durian montong', 'nangka', 'kelapa', 'melon', 'timun suri'];
sort($ar_buah); // urutkan data secara ascending A - Z
foreach($ar_buah as $buah) {
    echo ucfirst($buah).', '; // awal kalimat saja yang dicetak huruf besar
}
echo '<hr>';
arsort($ar_buah); // urutkan data secara descending Z - A
foreach($ar_buah as $buah){
    echo ucfirst($buah).','; // awal kalimat saja yg di cetak huruf besar
}