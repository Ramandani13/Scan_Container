<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="icon.png" />

	<title>Input-Exim</title>
    <!-- <meta http-equiv="refresh" content="15" /> -->
	<link href="css/app.css" rel="stylesheet">
</head>

<?php  
  
// $url = $_SERVER['REQUEST_URI'];  
  
// header("Refresh: 30; ");  
  
?> 
<body>



		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg" style="padding:10px;">
         
				<a class="sidebar-toggle d-flex">
          <i class=" align-self-center" ></i>
          <span class="align-middle" style="position:relative;top:-10px;right:10px;"><img src="gambar/200.gif"  width="130" height="45"></span>
          <span class="align-middle" style="position:relative;top:-6px;right:134px;"><img src="gambar/gil.jpg"  width="119" height="38"></span>
          <span class="align-middle" style="position:relative;top:17px;right:242px;"><img src="gambar/score.png" style="border-radius:5px;" width="100" height="8"></span>
          <!-- <span class="align-middle"><img src="icon.png"  width="30" height="30"></span>
          <h1 style="font-family: sans-serif;color:white;position:relative;top:0px;right:-5px;font-size:24px;"><b> PACKING</b></h1> -->
 		  <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:-1060px;font-size:19px;" id="jam"><b></b></h1> 
        </a>


				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">

                    <?php

setlocale(LC_TIME, 'id_ID.utf8');

$hariIni = new DateTime();

# lokalisasi tidak berpengaruh
echo $hariIni->format('l F Y') . '<br>';

?>	
						
				</div>
			</nav>
    <main>
 
       <!-- --------------------------------- hasil scann ------------------------------------- -->
       <?php
     include "koneksi.php";
     $dok = 1;
        $sqla = mysqli_query($koneksi,"SELECT SUM(damin) AS count_va_inputa FROM tb_va_input_exim WHERE dok = '$dok' ");
        while ($row =  mysqli_fetch_array($sqla,MYSQLI_ASSOC)) {   
            $count_va_input_doka =  $row['count_va_inputa']  ;                                         
    ?>
        <?php 
            
            $dok2 = 2;
            $sqlb = mysqli_query($koneksi,"SELECT SUM(damin) AS count_va_inputb FROM tb_va_input_exim WHERE dok = '$dok2' ");
            while ($row =  mysqli_fetch_array($sqlb,MYSQLI_ASSOC)) {   
                $count_va_input_dokb =  $row['count_va_inputb']  ; 
            }
        ?>
        <?php                                      
        }
    ?>

    <!-- ----------------------------------------------data countingnya------------------------------------ -->
    <?php
     include "koneksi.php";
     $dok = 1;
        $sql1 = mysqli_query($koneksi,"SELECT COUNT(id_no) AS count_va_input1 FROM tb_va_input_exim WHERE dok = '$dok' ");
        while ($row =  mysqli_fetch_array($sql1,MYSQLI_ASSOC)) {   
            $count_va_input_dok1 =  $row['count_va_input1']  ;                                         
    ?>
        <?php 
            
            $dok2 = 2;
            $sql2 = mysqli_query($koneksi,"SELECT COUNT(id_no) AS count_va_input2 FROM tb_va_input_exim WHERE dok = '$dok2' ");
            while ($row =  mysqli_fetch_array($sql2,MYSQLI_ASSOC)) {   
                $count_va_input_dok2 =  $row['count_va_input2']  ; 
            }
        ?>
        <?php                                      
        }
    ?>

    <!-- ---------------------------------------------- keterangan ---------------------------------- -->
<?php
if ($count_va_input_dok1 == $count_va_input_doka) {
    
    $ket =  '<span style="color:green;">COMPLETE<div><audio src="selesaidok11.mp3" controls autoplay> </audio></div></span>';
     

}else{
    $ket = '<span style="color:red;">PROGRES</span>';
     
}

?>

<?php
if ($count_va_input_dok2 == $count_va_input_dokb) {

    $ket2 =  '<span style="color:green;">COMPLETE<div><audio src="selesaidok22.mp3" controls autoplay> </audio></div></span>';
    
}else{
    $ket2 = '<span style="color:red;">PROGRES</span>';
}

?>

    <h1 class="card-title mb-0" style="font-size:30px;text-align:center;"><b>CONTROL SHEET VANNING EXIM</b></h1><br><br><br><br>

    <!-- <h3 style="margin-left:1150px;margin-top:-30px;color:red;" ><b>DOK 1</b></h3><h1 style="margin-left:1260px;color:blue;margin-top:-40px;" ><?php  echo $count_va_input_doka?>/<?php echo $count_va_input_dok1 ?>&nbsp;<span style="color:black;">case</span>&nbsp;&nbsp;<?php echo $ket ?></h1>
    <h3 style="margin-left:1150px;margin-top:10px;color:blue;" ><b>DOK 2</b></h3><h1 style="margin-left:1260px;color:blue;margin-top:-38px;" ><?php  echo $count_va_input_dokb?>/<?php echo $count_va_input_dok2 ?>&nbsp;<span style="color:black;">case</span>&nbsp;&nbsp;<?php echo $ket2 ?></h1>
 -->
 
<!-- <span></span><img src="../static/img/icons/4.png"  size="100%">&nbsp;</span> -->
<div id="wrapper">  
    <div id="blue">
     <div id="tanggal"></div>				 
   </div>

   <style type="text/css">
#gradient3 {
    background-image: linear-gradient(to bottom right, #483D8B, #000000);
}

.scroll2{
display:block;
border: 1px solid white;
padding:10px;
margin-top:5px;

width:100%;
height:300px;
overflow:auto;
}
.scroll3{
display:block;
border: 1px solid white;
padding:10px;
margin-top:5px;

width:100%;
height:300px;
overflow:auto;
}
.resultvaning{
    position:relative;
    top:-60px;
    right:10px;
}

</style>

<form id="in-bar" method="POST" action="" class="fill-barcode">
			<p style="position:relative;margin-left: 2%;margin-top:-50px;">
				<center><input style="position:relative;top:-170px;background-color:#F8F8FF;border-radius:5px;" type="text" name="dani" autofocus placeholder="Input Case"></center>
				<div id="toggle" onclick="showHide();"></div>
			</p>
			<td><input type="submit" name="kirim1" value="OK" hidden=""></td>
            
<div class="scroll2">

<table class="table table-hover my-0" style="position:relative;top:-130px; " >

<thead>
    <?php
    error_reporting(0);
$cekcont = mysqli_query($koneksi,"SELECT (cont) AS contt FROM tb_va_input_exim WHERE dok='1' ");
while($hasilcont = mysqli_fetch_array($cekcont)){
     $dokcont = $hasilcont['contt'];
 }
 $cekdo = mysqli_query($koneksi,"SELECT (m3) AS do FROM tb_va_input_exim WHERE dok='1' ");
 while($hasildo = mysqli_fetch_array($cekdo)){
      $dokdo = $hasildo['do'];
  }
    ?>
<center><b style="background-color:red;font-size:40px;color:white;">DOK 1</b>&nbsp;No Cont :<b style="font-size:30px;color:red;"><?= $dokcont ?></b></center>
<center>No DO :<b style="font-size:30px;color:#FF00FF;"><?= $dokdo ?></b></center>
<h1 style="position:relative;background-color:white;width:650px;height:110px;top:-110px;left:1100px;border:4px solid black;font-size:90px;"><?php  echo $count_va_input_doka?>/<?php echo $count_va_input_dok1 ?>&nbsp;<span style="color:black;font-size:50px;">case</span>&nbsp;<span style="font-size:50px;"><?php echo $ket ?></span></h1>
<a style="font-weight:bold;position:relative;top:-120px; " href="importan/form.php">IMPORT ALL </a>
<button style="position:relative;margin-left:20px;top:-120px;"><a href="exsport-txt1.php"><h style="color:red;">Download Text</h></a></button>
<button style="position:relative;margin-left:20px;top:-120px;"><a href="exsport-excel.php"><h style="color:red;">Download Excel</h></a></button>
&nbsp;<a style="color:green;position:relative;top:-120px;" href="result_vaning.php">Result Vaning?</a>
&nbsp;<a style="color:blue;position:relative;top:-120px;" href="resultperbucket.php">Trace Bucket?</a>
<a style="color:red; font-weight: bold;position:relative;margin-left:1000px;top:-120px;" href="garansi_dok1.php" >DELETE DOK 1</a>

                        <tr>
                        <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>INVOICE NO</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ORDER NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>LOT NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CASE NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CKD SET NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DESTINATION CODE</center></th>                             
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CASE TYPE</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO DO</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ID NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CONT</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>HASIL SCAN</center></th> 
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DOK</center></th>                 
                        </th>     
                        </tr>
                    </thead> 
                    <?php
                      include "koneksi.php";
                      
                      $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_va_input_exim where dok = '1' ");
                          while($tampil = mysqli_fetch_array($ambildata)){
                            
                          ?>
                         <?php
                             if($tampil['id_no'] == $tampil['hasil_scan']){
                                $clor = 'lime';
                             }else{
                                $clor = 'white';
                             }

                             if($tampil['id_no'] == $tampil['hasil_scan']){
                                $tulisan = 'black';
                             }else{
                                $tulisan = 'red';
                             }
                         ?>
                          <tr>
                                  <!-- <td>$no</td> -->

                                  
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['invoice_no']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['order_no']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['lot_no']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['case_no']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['ckd_set_no']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['destination']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['case_type']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['m3']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['id_no']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['cont']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['hasil_scan']; ?></td>
                                  <td style="color:<?= $tulisan ?>;background-color:<?= $clor; ?>"><?php echo $tampil['dok']; ?></td>
                            
                              </tr>
                          <?php    
                      }
                  ?><br><br>

</table>
            </div>            
                  
<!-- --------------------------------------------------------------------------------------------------- -->
<div class="scroll3">
<table class="table table-hover my-0" style="position:relative;top:-130px;">

<thead>
<?php
$cekcont2 = mysqli_query($koneksi,"SELECT (cont) AS contt2 FROM tb_va_input_exim WHERE dok='2' ");
while($hasilcont2 = mysqli_fetch_array($cekcont2)){
     $dokcont2 = $hasilcont2['contt2'];
 }
 $cekdo2 = mysqli_query($koneksi,"SELECT (m3) AS do2 FROM tb_va_input_exim WHERE dok='2' ");
 while($hasildo2 = mysqli_fetch_array($cekdo2)){
      $dokdo2 = $hasildo2['do2'];
  }
    ?>
<center><b style="background-color:BLUE;font-size:40px;color:white;">DOK 2</b>&nbsp;No Cont :<b style="font-size:30px;color:blue;"><?= $dokcont2 ?></b></center>
<center>No DO :<b style="font-size:30px;color:#FF00FF;"><?= $dokdo2 ?></b></center>
<h1 style="position:relative;background-color:white;width:650px;height:110px;top:-110px;left:1100px;border:4px solid black;font-size:90px;">&nbsp;<?php  echo $count_va_input_dokb?>/<?php echo $count_va_input_dok2 ?>&nbsp;<span style="color:black;font-size:50px;">case</span>&nbsp;<span style="font-size:50px;"><?php echo $ket2 ?></span></h1>
<button style="position:relative;margin-left:20px;top:-120px;"><a href="exsport-txt2.php"><h style="color:red;">Download Text</h></a></button>
<button style="position:relative;margin-left:20px;top:-120px;"><a href="exsport-excel2.php"><h style="color:red;">Download Excel</h></a></button>
<a style="color:red; font-weight: bold;position:relative;margin-left:1290px;top:-120px;" href="garansi_dok2.php" >DELETE DOK 2</a>
                        <tr>
                        <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>INVOICE NO</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ORDER NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>LOT NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CASE NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CKD SET NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DESTINATION CODE</center></th>                             
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CASE TYPE</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DO NO</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ID NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CONT</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>HASIL SCAN</center></th>                 
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DOK</center></th>                   
                        </th>     
                        </tr>
                    </thead> 
                    <?php
                      include "koneksi.php";
                      
                      $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_va_input_exim where dok = '2'");
                          while($tampil = mysqli_fetch_array($ambildata)){
                          ?>
                          <?php
                             if($tampil['id_no'] == $tampil['hasil_scan']){
                                $clorr = 'lime';
                             }else{
                                $clorr = 'white';
                             }

                             if($tampil['id_no'] == $tampil['hasil_scan']){
                                $tulisann = 'black';
                             }else{
                                $tulisann = 'red';
                             }
                         ?>
                         
                          <tr>
                                  <!-- <td>$no</td> -->
   
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['invoice_no']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['order_no']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['lot_no']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['case_no']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['ckd_set_no']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['destination']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['case_type']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['m3']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['id_no']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['cont']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['hasil_scan']; ?></td>
                                  <td style="color:<?= $tulisann;?>;background-color:<?= $clorr; ?>"><?php echo $tampil['dok']; ?></td>
                            
                              </tr>
                          <?php    
                      }
                  ?><br><br>

</table>
            
            </div>



                  
<style type="text/css">
#tampil_modal{
    padding-top:10em;
    background-color:rgba(0,0,0,0.8);
    position:fixed;
    top:0;
    bottom:0;
    left:0;
    right:0;
    z-index:10;
    display:block;
}
#modal{
    padding:15px;
    font-size:20px;
    text-align:center;
    background:#ff1493;
    color:#fff;
    width:480px;
    border-radius:15px;
    margin:0 auto;
    margin-bottom:20px;
    padding-bottom:50px;
    z-index:9;   
}
#modal_atas{
    width:100%;
    background:#ff00ff;
    text-align:left;
    padding :15px;
    margin-left:-15px;
    font-size:15px;
    margin-top:-15px;
    border-top-left-radius:15px;
    border-top-right-radius:15px;
    color:yellow;
}
#oke{
    background:#c0392b;
    border:none;
    float:right;
    width:80px;
    height:auto;
    color:#fff;
    margin-right:5px;
    cursor:pointer;
}
.info{
    position:relative;
    font-family: stock;
    font-size: 30px;
    color: blue;
    background-color:white;
    font-style:italic;
    border:1px solid white;
    width:1690px;
    height:50px;
    top:10px;
    left:-27px;

}
.imga{
    background-image: url(bg-kuning.jfif);
    background-position:center;
    background-size:cover;

}
    </style>



                  <?php
// include database connection file
include "koneksi.php";
$set_jam = '60'; 
 $set_menit = '04'; ///untuk setting selisih 4 menit 
 $waktu_indonesia = time() + (60 * 60 * 7) ;
 $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
 $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
 $jam_ori = gmdate('H:i:s', $waktu_indonesia);
 $jam_oriw = gmdate('H:i', $waktu_indonesia);
 $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
 $nama_tahun = gmdate('Y', $waktu_indonesia);
 $hari=gmdate('D', $waktu_indonesia);
 $nama_bulan = gmdate('M-Y', $waktu_indonesia);
 $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
 $nama_hari=gmdate('D', $waktu_indonesia);
 $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
 $bulan_nama2 = gmdate('M', $waktu_indonesia);
  $jam_ori1 = gmdate('H:i', $waktu_indonesia);
error_reporting(0);
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['kirim1']))

{    
    $dan ='VU05429VU08431';
   echo $cekk = $_POST['dani'].$dan;  
    $nama1  = substr($cekk,0,12);

        if (strlen($cekk) >= 39 AND strlen($cekk) <= 41 ){
                        include "koneksi.php";
                            $ambildata2 = mysqli_query($koneksi,"SELECT (id_no) AS triger FROM tb_va_input_exim WHERE id_no = '$nama1'");
                            while($tampil2 = mysqli_fetch_array($ambildata2))
                            {
                        $triger = $tampil2['triger'];     
                        echo $triger;                                         
                            }     
                                                                        
                        if($nama1 ==  $triger ){

                        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_va_input_exim WHERE hasil_scan='$nama1' "));
                            if($cek > 0){
                                    echo '<div id="tampil_modal"><div id="modal"><div id="modal_atas">warning</div><p>DATA SUDAH ADA !!!</p>
                                    <a href="index.php"><button id="oke">oke</button></a></div></div><audio src="exim.mp3" controls autoplay> </audio>';

                            } else {
                                $cekdok = mysqli_query($koneksi,"SELECT (dok) AS dokk FROM tb_va_input_exim WHERE id_no='$nama1' ");
                                while($hasildok = mysqli_fetch_array($cekdok)){
                                    echo $dokn = $hasildok['dokk'];
                                }    
                                    if($dokn == '1'){  
                                    $result = mysqli_query($koneksi, "UPDATE tb_va_input_exim SET hasil_scan='$nama1',damin='1' where id_no='$nama1' "); 
                                    $result1 = mysqli_query($koneksi, "UPDATE tb_va_input_exim_all SET hasil_scan='$nama1',damin='1',tgll='$tanggal_ori',jam_dami='$jam_ori' where id_no='$nama1' ");
                                            echo '<audio src="dok1ok.mp3" controls autoplay></audio>';
                                            echo '<META HTTP-EQUIV="Refresh" Content="3; URL=index.php ">'; 
                                    }else{
                                        $result = mysqli_query($koneksi, "UPDATE tb_va_input_exim SET hasil_scan='$nama1',damin='1' where id_no='$nama1' "); 
                                    $result1 = mysqli_query($koneksi, "UPDATE tb_va_input_exim_all SET hasil_scan='$nama1',damin='1',tgll='$tanggal_ori',jam_dami='$jam_ori' where id_no='$nama1' ");
                                            echo '<audio src="dok2ok.mp3" controls autoplay></audio>';
                                            echo '<META HTTP-EQUIV="Refresh" Content="3; URL=index.php ">'; 
                                    }

                                    // echo "<meta http-equiv=\"refresh\"content=\"0;URL=index.php\"/>";
                                                }
                        }else{
                        echo '<div id="tampil_modal"><div id="modal"><div id="modal_atas">warning</div><p>DATA TIDAK TERDAFTAR DI MASTER</p>
                        <a href="index.php"><button id="oke">oke</button></a></div></div><audio src="exim.mp3" controls autoplay> </audio>';     
                        }
        }elseif (strlen($cekk) >= 27 AND strlen($cekk) <= 29 ){
                        include "koneksi.php";
                            $ambildata2 = mysqli_query($koneksi,"SELECT (id_no) AS triger FROM tb_va_input_exim WHERE id_no = '$nama1'");
                            while($tampil2 = mysqli_fetch_array($ambildata2))
                            {
                        $triger = $tampil2['triger'];     
                        echo $triger;                                         
                            }     
                                                                        
                        if($nama1 ==  $triger ){

                        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_va_input_exim WHERE hasil_scan='$nama1' "));
                            if($cek > 0){
                                    echo '<div id="tampil_modal"><div id="modal"><div id="modal_atas">warning</div><p>DATA SUDAH ADA !!!</p>
                                    <a href="index.php"><button id="oke">oke</button></a></div></div><audio src="exim.mp3" controls autoplay> </audio>';

                            } else {
                                $cekdok = mysqli_query($koneksi,"SELECT (dok) AS dokk FROM tb_va_input_exim WHERE id_no='$nama1' ");
                                while($hasildok = mysqli_fetch_array($cekdok)){
                                    echo $dokn = $hasildok['dokk'];
                                }    
                                    if($dokn == '1'){  
                                    $result = mysqli_query($koneksi, "UPDATE tb_va_input_exim SET hasil_scan='$nama1',damin='1' where id_no='$nama1' "); 
                                    $result1 = mysqli_query($koneksi, "UPDATE tb_va_input_exim_all SET hasil_scan='$nama1',damin='1',tgll='$tanggal_ori',jam_dami='$jam_ori' where id_no='$nama1' ");
                                            echo '<audio src="dok1ok.mp3" controls autoplay></audio>';
                                            echo '<META HTTP-EQUIV="Refresh" Content="3; URL=index.php ">'; 
                                    }else{
                                        $result = mysqli_query($koneksi, "UPDATE tb_va_input_exim SET hasil_scan='$nama1',damin='1' where id_no='$nama1' "); 
                                    $result1 = mysqli_query($koneksi, "UPDATE tb_va_input_exim_all SET hasil_scan='$nama1',damin='1',tgll='$tanggal_ori',jam_dami='$jam_ori' where id_no='$nama1' ");
                                            echo '<audio src="dok2ok.mp3" controls autoplay></audio>';
                                            echo '<META HTTP-EQUIV="Refresh" Content="3; URL=index.php ">'; 
                                    }

                                    // echo "<meta http-equiv=\"refresh\"content=\"0;URL=index.php\"/>";
                                                }
                        }else{
                        echo '<div id="tampil_modal"><div id="modal"><div id="modal_atas">warning</div><p>DATA TIDAK TERDAFTAR DI MASTER</p>
                        <a href="index.php"><button id="oke">oke</button></a></div></div><audio src="exim.mp3" controls autoplay> </audio>';     
                        }
            
        }elseif(strlen($cekk) <= 12){
            echo '<div id="tampil_modal"><div id="modal"><div id="modal_atas">warning</div><p>DO NOT INPUT MANUALLY</p>
            <a href="index.php"><button id="oke">oke</button></a></div></div><audio src="DONOT.mp3" controls autoplay> </audio>';
        
        }elseif(strlen($cekk) == 26){
            echo '<div id="tampil_modal"><div id="modal"><div id="modal_atas">warning</div><p>DO NOT INPUT MANUALLY</p>
            <a href="index.php"><button id="oke">oke</button></a></div></div><audio src="DONOT.mp3" controls autoplay> </audio>';
        
        }
        
        // elseif(strlen($cekk) == 26){
        //     echo '<div id="tampil_modal"><div id="modal"><div id="modal_atas">warning</div><p>DO NOT INPUT MANUALLY..!!</p>
        //     <a href="index.php"><button id="oke">oke</button></a></div></div><audio src="DONOT.mp3" controls autoplay> </audio>';
        
        // }
    // $result = mysqli_query($koneksi, "UPDATE tb_va_input_exim SET invoice_no='$invoice_no',order_no='$order_no',
    // lot_no='$lot_no',case_no='$case_no',ckd_set_no='$ckd_set_no',destination='$destination',case_type='$case_type'
    // ,m3='$m3',id_no='$id_no',cont='$cont',hasil_scan='$hasil_scan',check1='$check1' where hasil_scan='$dani' ");
   
}

?>
</form>
<?php

include "koneksi.php";
$set_jam = '60'; 
 $set_menit = '04'; ///untuk setting selisih 4 menit 
 $waktu_indonesia = time() + (60 * 60 * 7) ;
 $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
 $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
 $jam_ori = gmdate('H:i:s', $waktu_indonesia);
 $jam_oriw = gmdate('H:i', $waktu_indonesia);
 $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
 $nama_tahun = gmdate('Y', $waktu_indonesia);
 $hari=gmdate('D', $waktu_indonesia);
 $nama_bulan = gmdate('M-Y', $waktu_indonesia);
 $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
 $nama_hari=gmdate('D', $waktu_indonesia);
 $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
 $bulan_nama2 = gmdate('M', $waktu_indonesia);
  $jam_ori1 = gmdate('H:i', $waktu_indonesia);

$no=1;
$ambildata = mysqli_query($koneksi,"SELECT COUNT(DISTINCT cont) AS jmlh_container FROM tb_va_input_exim_all WHERE jam_dami >='07:00:00'  and tgll ='$tanggal_ori' ");

    while($row = mysqli_fetch_array($ambildata,MYSQLI_ASSOC)){
      $hasil =  $row['jmlh_container']  ;
            
    ?> 
    <?php    
}
?>

<!-- ==================== untuk menentukan total container cbu ========================== -->
<?php

$result = mysqli_query($koneksi, "SELECT COUNT(DISTINCT container) AS jmlh_contcbu FROM tb_va_input_cbu WHERE jamm >='07:00:00' and tgl ='$tanggal_ori'");
 
while($row = mysqli_fetch_array($result))
{
    $no_cont_cbu=$row['jmlh_contcbu'];

}
?>

<!-- ==================== untuk menentukan total plan CBU========================== -->
<?php

$resultcbu = mysqli_query($koneksi, "SELECT * FROM tb_va_total_container_cbu ");
 
while($user_datacbu = mysqli_fetch_array($resultcbu))
{
    $total_plan_containercbu=$user_datacbu['total_plan'];

}
?>

<!-- ==================== untuk menentukan total plan ========================== -->
<?php

$result = mysqli_query($koneksi, "SELECT * FROM tb_va_total_container ");
 
while($user_data = mysqli_fetch_array($result))
{
    $total_plan_container=$user_data['total_plan'];

}
?>
<button class="imga" style="position:relative;height:100px;width:250px;left:10px;top:-680px;border-radius:10px;color:white;"><a href="data_kontainer_harian.php" ><h2 style="color:black;"><b>ACT / PLAN CONT</b></h2><br><h1 style="color:black;font-size:45px;margin-top:-25px;"><b><?= $hasil; ?>/<?= $total_plan_container; ?></b></h1></a></button>
<button class="imga" style="position:relative;height:100px;width:250px;left:10px;top:-680px;border-radius:10px;color:white;"><a href="#" ><h2 style="color:blue;"><b>ACT CBU</b></h2><br><h1 style="color:red;font-size:45px;margin-top:-25px;"><b style="color:green;"><?= $no_cont_cbu; ?></b>/<b><?= $total_plan_containercbu; ?></b></h1></a></button>
<div style="position:relative;margin-left:1600px;top:-780px;"><a href="http://172.20.232.10/packing/dashboardppe/pilihan_vaning.php"><img style="border-radius:20px;" src="gambar/orb.gif" width="50px" height="50px;"></a>	</div>
         
	        </main>     
            <div>
                            <marquee class="info" direction="center" scrollamount="10"><b>PATUHI PROTOKOL KESEHATAN COVID-19 DENGAN MELAKUKAN 3M DAN HINDARI 3K</b></marquee>
                        </div>   
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
                            <a href="#" class="text-muted">&copy; <strong ><b>2022 <i style="color:blue;">Ramandani Gilang S [19968]</i> YIMM-WJF.</b></strong></a>	 
							</p>
						</div>
                        						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<?php
 $set_jam = '60'; 
 $set_menit = '04'; ///untuk setting selisih 4 menit 
 $waktu_indonesia = time() + (60 * 60 * 7) ;
 $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
 $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
 $jam_ori = gmdate('H:i:s', $waktu_indonesia);
 $jam_oriw = gmdate('H:i', $waktu_indonesia);
 $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
 $nama_tahun = gmdate('Y', $waktu_indonesia);
 $hari=gmdate('D', $waktu_indonesia);
 $nama_bulan = gmdate('M-Y', $waktu_indonesia);
 $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
 $nama_hari=gmdate('D', $waktu_indonesia);
 $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
 $bulan_nama2 = gmdate('M', $waktu_indonesia);
  $jam_ori1 = gmdate('H:i', $waktu_indonesia);

include "koneksi.php";

?>


<script src="js/app.js"></script>
	
<script type="text/javascript">
 window.onload = function() { jam(); }

function jam() {
 var e = document.getElementById('jam'),
 d = new Date(), h, m, s;
 h = d.getHours();
 m = set(d.getMinutes());
 s = set(d.getSeconds());

 e.innerHTML = h +':'+ m +':'+ s;

 setTimeout('jam()', 1000);
}

function set(e) {
 e = e < 10 ? '0'+ e : e;
 return e;
}
$(document).on('keypress', 'input,select', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
        console.log($next.length);
        if (!$next.length) {
       $next = $('[tabIndex=1]');        }
        $next.focus() .click();
    }
});

    </script>

</body>

</html>