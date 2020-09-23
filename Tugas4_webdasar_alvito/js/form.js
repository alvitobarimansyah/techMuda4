function penilaian(){
    var frm = window.document.getElementById("formNilaiSiswa");
    var nms = frm.namaSiswa.value;
    var matpel = frm.mapel.value;
    var hasil = (frm.nilaiSiswa.value);
    var ket;
    var grade;
    var predikat;

    if (hasil >= 85 && hasil == 100) var grade = "A";
    else if(hasil > 75 && hasil <= 85) var grade = "B";
    else if(hasil > 60 && hasil <= 75) var grade = "C";
    else if(hasil > 30 && hasil <= 60) var grade = "D";
    else if(hasil > 0 && hasil <= 30) var grade ="E";
    else var grade = "";

   switch (grade) {
    case "A": var predikat = "Istimewa"; break;
    case "B": var predikat = "Baik"; break;
    case "C": var predikat = "Cukup"; break;
    case "D": var predikat = "kurang"; break;
    case "E": var predikat = "Buruk"; break;
    default: break;
   }
   
   if (hasil >= 60) var ket = "Lulus";
   else var ket = "Gagal";

   document.write (
       "Nama Siswa : " + nms +
       "<br>Mata Pelajaran : " + matpel +
       "<br>Nilai : " + hasil +
       "<br>Grade : " + grade +
       "<br>Predikat : " + predikat +
       "<br>Keterangan : " + ket 
   )

}