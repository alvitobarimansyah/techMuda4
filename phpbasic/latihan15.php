<?php
//sertakan file classnya
require_once 'latihan14.php';
//buat object
$n1 = new Bank('Budi','001',3000000);
$n2 = new Bank('Siti','002',4000000);
$n3 = new Bank('Ani','003',5000000);
$n4 = new Bank('Bedu','004',1000000);
//panggil member class
//echo $n1->norek; // nggak bisa diakses karena protected
//echo $n1->saldo; // ngggak bisa diakses karena private
//echo $n1->nama; // bisa diakses karena public

$n1->setor(2000000); $n3->setor(1000000);
$n2->ambil(500000); $n3->ambil(2500000);
echo '<h3 align="center">'.Bank::BANK.'</h3>';
$n1->cetak(); $n2->cetak(); $n3->cetak(); $n4->cetak();
echo 'Jumlah Nasabah : '.Bank::$jml.'orang';