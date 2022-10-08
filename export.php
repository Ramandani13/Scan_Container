<?php

// nama file hasil export
$namaFile = "datamhs.txt";

// karakter separator
$separator = "\t";

// koneksi ke mysql
include "koneksi.php";

// header file text
header("Content-type: text/plain");
header("Content-Disposition: attachment; filename=".$namaFile);

// query sql baca semua data dlm tabel mhs
$query = "SELECT * FROM tb_va_input_exim";
$hasil = mysqli_query($query);
while ($data = mysqli_fetch_array($hasil))
{   
    // mengisi data mhs ke file text dengan separator 
    echo $data['date_tgl'].$separator.$data['destination'].$separator.$data['id_no'].$separator.$data['cont'].$separator.$data['dok']."\r\n";
}

?>