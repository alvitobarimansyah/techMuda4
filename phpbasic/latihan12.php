<?php
// membuat fungsi void
function salam() {
    echo 'Assalamualaikum';
}
//memanggil fungdi
salam();
function say($arg1){
    echo '<br>Guten Morgen '.$arg1.' ?';
}
$siswa = 'Budi';
say($siswa); say('Mimin');
function tanya($arg1 = 'Dewi'){
    echo '<br>Sudah Sarapan '.$arg1.' ?';
}
tanya(); tanya('Bedu');