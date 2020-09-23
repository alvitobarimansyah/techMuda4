function pembelian(){
    //1.tangkap id form
    var frm = window.document.getElementById("produk");
    //2.tangkap elements form
    var barang = frm.nama.value;
    var kategori = frm.jenis.value;
    //casting/konversi tipe data
    var hrg = parseInt(frm.harga.value);
    var jml = parseInt(frm.jumlah.value);
    var total = hrg * jml;
    //penempatan hasil
    frm.tohar.value = total;
    //cetak populasi data
    alert(
        "Nama Produk : " + barang +
        "<br>Jenis Produk : " + kategori +
        "<br>Harga Produk : Rp. " + hrg +
        "<br>Jumlah Beli : " + jml +
        "<br>Total Harga : Rp. " + total
    )
}