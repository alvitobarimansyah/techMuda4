<?php
require_once 'gempa.php';

$g1 = new Gempa('Tokyo', 1);
$g2 = new Gempa('Depok', 2);
$g3 = new Gempa('Washington', 3);
$g4 = new Gempa('Kyoto', 4);
$g5 = new Gempa('Hiroshima', 5);
$g6 = new Gempa('Nagasaki', 6);
$g7 = new Gempa('Hokaido', 7);
$g8 = new Gempa('Osaka', 8);
$g9 = new Gempa('Yokohama', 9);
$g10 = new Gempa('Wuhan', 10);

$g1->cetak();
$g2->cetak();
$g3->cetak();
$g4->cetak();
$g5->cetak();
$g6->cetak();
$g7->cetak();
$g8->cetak();
$g9->cetak();
$g10->cetak();