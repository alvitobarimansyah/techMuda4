<form method="POST" action="#">
    <table align="center" width="40%" cellpadding="10" cellspacing="0">
        <thead>
            <tr bgcolor="aqua">
               <th colspan="2">Form Belanja</th>
            </tr>
        </thead>
        <tbody>
            <tr bgcolor="azure">
               <td>Pelanggan</td>
               <td>
                    <input type="text" name="pelanggan" >
               </td>
            </tr>
            <tr bgcolor="azure">
                <td>Produk</td>
                <td>
                    <select name="produk">
                        <option value="">-- Pilih --</option>
                        <option value="TV">TV</option>
                        <option value="AC">AC</option>
                        <option value="Kulkas">Kulkas</option>
                    </select>
                </td>
            </tr>
            <tr bgcolor="azure">
                <td>Jumlah</td>
                <td>
                    <input type="text" name="jumlah">
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr bgcolor="darkcyan">
                <th colspan="2">
                    <input type="submit" name="proses" value="Beli">
                    <input type="reset" name="unproses" value="Batal">
                </th>
            </tr>
        </tfoot>
    </table>
</form>
<?php
$pelanggan = $_POST['pelanggan'];
$kategori = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$proses = $_POST['proses'];

switch ($kategori) {
    case 'TV' : $hargaSatuan = 3000000; break;
    case 'AC' : $hargaSatuan = 4000000; break;
    case 'Kulkas' : $hargaSatuan = 5000000; break;
    default: $hargaSatuan = 0;
}

$hargaKotor = $hargaSatuan * $jumlah;

if($kategori == 'Kulkas' && $jumlah >= 3) $diskon = $hargaKotor * 0.3;
else if($kategori == 'AC' && $jumlah >= 4) $diskon = $hargaKotor * 0.2;
else $diskon = $hargaKotor * 0.1;

$ppn = ($hargaKotor - $diskon) * 0.1;

$hargaBayar = ($hargaKotor - $diskon) + $ppn;
if(!empty($proses)) {
?>
    <br>Nama Pelanggan : <?= $pelanggan ?>
    <br>Produk Pilihan : <?= $kategori ?>
    <br>Jumlah Beli : <?= $jumlah ?>
    <br>Harga Satuan : <?= $hargaSatuan ?>
    <br>Harga Kotor : <?= $hargaKotor ?>
    <br>Diskon : <?= $diskon ?>
    <br>PPN : <?= $ppn ?>
    <br>Harga Bayar : <?= $hargaBayar ?>
<?php } ?>