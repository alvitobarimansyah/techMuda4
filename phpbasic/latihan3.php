<form method="GET" action="#">
Nama : <input type="text" name="nama">
<br>Mata Pelajaran : 
<select name="matpel">
    <option value="">-- Pilih --</option>
    <option value="IPA">IPA</option>
    <option value="IPS">IPS</option>
    <option value="PKN">PKN</option>
</select>
<br>Nilai : <input type="text" name="nilai">
<br><input type="submit" name="proses" value="Simpan">
</form>
<?php
$nama = $_GET['nama'];
$pelajaran = $_GET['matpel'];
$nilai = $_GET['nilai'];
$proses = $_GET['proses'];
$ket = ($nilai >= 60) ? 'lulus' : 'Gagal';

if($nilai >= 85 && $nilai <= 100) $grade = 'A';
else if($nilai >= 75 && $nilai <= 85) $grade = 'B';
else if($nilai >= 60 && $nilai <= 75) $grade = 'C';
else if($nilai >= 30 && $nilai <= 60) $grade = 'D';
else if($nilai >= 0 && $nilai <= 30) $grade = 'E';
else $grade = '';

switch ($grade) {
    case 'A': $predikat = 'Istimewa'; break;
    case 'B': $predikat = 'Baik'; break;
    case 'C': $predikat = 'Cukup'; break;
    case 'D': $predikat = 'Kurang'; break;
    case 'E': $predikat = 'Buruk'; break;
    default: $predikat = '';
}

if(!empty($proses)){
?>
    <br>Nama Siswa : <?= $nama ?>
    <br>Mata Pelajaran : <?= $pelajaran ?>
    <br>Nilai : <?= $nilai ?>  
    <br>Keterangan : <?= $ket ?> 
    <br>Grade : <?= $grade ?>
    <br>Predikat : <?= $predikat ?> 
<?php } ?>