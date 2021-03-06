<?php
$p1 = ['nama' => 'Budi', 'agama' => 'Islam', 'gender' => 'L', 'divisi' => 'HRD', 'gaji' => 8000000];
$p2 = ['nama' => 'Siti', 'agama' => 'Kristen', 'gender' => 'P', 'divisi' => 'HRD', 'gaji' => 7000000];
$p3 = ['nama' => 'Ani', 'agama' => 'Hindu', 'gender' => 'P', 'divisi' => 'Keuangan', 'gaji' => 10000000];
$p4 = ['nama' => 'Dewi', 'agama' => 'Budha', 'gender' => 'P', 'divisi' => 'Marketing', 'gaji' => 6000000];
$p5 = ['nama' => 'Bedu', 'agama' => 'Konghuchu', 'gender' => 'L', 'divisi' => 'Marketing', 'gaji' => 9000000];
$ar_judul = ['No', 'Nama', 'agama', 'Gender', 'Divisi', 'Gaji'];
$ar_pegawai = [$p1,$p2,$p3,$p4,$p5];
?>
<h3 align="center">Daftar Pegawai</h3>
<table align="center" width="40%" cellpadding="10" cellspacing="0" border="1">
    <thead>
        <tr bgcolor="aqua">
            <?php foreach($ar_judul as $judul) {
                ?>
                <th><?= $judul ?></th>
           <?php } ?>
        </tr>
    </thead>
    <tbody>
    <?php 
    $no = 1;
    $gender = 'gender';
    foreach($ar_pegawai as $pegawai) {
        $warna = ($no % 2 == 1) ? 'azure' : 'aqua';
        $panggilan = ($gender == 'L') ? 'Mr' : 'Mrs';
    ?>
    <tr bgcolor="<?= $warna ?>">
        <td><?= $no ?></td>
        <td><?= $panggilan ?><?= $pegawai['nama'] ?></td>
        <td><?= $pegawai['agama'] ?></td>
        <td><?= $pegawai['gender'] ?></td>
        <td><?= $pegawai['divisi'] ?></td>
        <td align="right">Rp.<?= number_format($pegawai['gaji'], 2, '.', '.') ?></td>
    </tr>
    <?php $no++; } ?>
    </tbody>
    <?php
    $gaji = array_column($ar_pegawai,'gaji');
    $total = array_sum($gaji);
    $jml = count($gaji);
    $max = max($gaji);
    $min = min($gaji);
    $rata2 = $total/$jml;
    $ar_keterangan = [
        'Total Gaji' => $total,
        'Gaji Terendah' => $min,
        'Gaji Tertinggi' => $rata2,
        'Jumlah Pegawai' => $jml,
    ];
    ?>
    <tfoot>
    <?php 
    foreach($ar_keterangan as $keterangan => $hasil) {
    ?>
        <tr>
            <th colspan="5"><?= $keterangan ?></th>
            <th>Rp.<?= number_format($hasil,2,'.','.') ?></th>
        </tr>
    <?php } ?> 
    </tfoot>
</table>