<?php
$ar_buah = ['Pepaya', 'Mangga', 'Pisang', 'Jambu'];
$ar_buah[2] = 'Jeruk'; // ganti element array
unset($ar_buah[3]); // hapus buah jambu
// tambah buah baru
$ar_buah[] = 'Naga';
$ar_buah[] = 'Belimbing';
$ar_buah[] = 'Apel';
// cetak data array nama buahnya (valuenya) saja
foreach($ar_buah as $buah){
    echo '<br>Buah '.$buah;
}
echo '<hr>';
// cetak data array key buah dan nama (value) buahnya
foreach($ar_buah as $id => $buah){
    echo '<br>Buah dgn key '.$id.' adalah buah '.$buah;
}