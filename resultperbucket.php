<?php
error_reporting(0);
?>

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

	<title>Result-Bucket</title>
    <!-- <meta http-equiv="refresh" content="15" /> -->
	<link href="css/app.css" rel="stylesheet">
</head>

<?php  
  
// $url = $_SERVER['REQUEST_URI'];  
  
// header("Refresh: 300; ");  
  
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
    <h1 class="card-title mb-0" style="font-size:30px;text-align:center;"><b>EXIM PRODUCTION EXPORT</b></h1>
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
height:320px;
overflow:auto;
}
.scroll3{
display:block;
border: 1px solid white;
padding:10px;
margin-top:5px;
margin-left:10px;
width:220px;
height:250px;
overflow:auto;
}
.scroll4{
display:block;
border: 1px solid white;
padding:10px;
margin-top:-250px;
margin-left:250px;
width:220px;
height:250px;
overflow:auto;
}
.scroll5{
display:block;
border: 1px solid white;
padding:10px;
margin-top:-250px;
margin-left:490px;
width:220px;
height:250px;
overflow:auto;
}
.scroll6{
display:block;
border: 1px solid white;
padding:10px;
margin-top:-250px;
margin-left:730px;
width:220px;
height:250px;
overflow:auto;
}
.scroll7{
display:block;
border: 1px solid white;
padding:10px;
margin-top:-250px;
margin-left:970px;
width:220px;
height:250px;
overflow:auto;
}
.resultvaning{
    position:relative;
    top:-60px;
    right:10px;
}

</style>


<form id="in-bar" method="get" action="" class="fill-barcode">
			<p style="margin-left: 2%;">
				<!-- <input style="position:relative;background-color:#F8F8FF;border-radius:5px;" type="date" name="dani" placeholder="Input di sini" autofocus required="1"> -->
				<input style="position:relative;background-color:#F8F8FF;border-radius:5px;" type="text" name="invoic" placeholder="Input invoice" autofocus  >
				<!-- <input style="position:relative;background-color:#F8F8FF;border-radius:5px;" type="text" name="order_noo" placeholder="Input order no" >
				<input style="position:relative;background-color:#F8F8FF;border-radius:5px;" type="text" name="do_no" placeholder="Input do no" > -->
				<div id="toggle" onclick="showHide();"></div>
			</p>
			<td><input type="submit"  value="OK" hidden=""></td>
</form>
<div class="scroll3">
    
<center><h4><b style="color:blue;">TOTAL ORDER NO</b></h4></center>
    <h1 style="color:red;"><center><?php
    include "koneksi.php";
    if(isset($_GET['invoic'])){
    $invoic = $_GET['invoic'];
    $jumlahorderno = mysqli_num_rows(mysqli_query($koneksi, "SELECT DISTINCT order_no FROM tb_va_input_exim_all WHERE invoice_no = '$invoic'"));
    echo $jumlahorderno  ;
    }
    ?></center></h1>
<table class="table table-hover my-0">
<thead>
                        <tr>
                        <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ORDER NO.</center></th>               
                        </th>     
                        </tr>
                    </thead> 
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
                    
                      if(isset($_GET['invoic'])){
                        // $dtgl = $_GET['dani'];
                        // $invoic = $_GET['invoic'];
                        $invoic = $_GET['invoic'];
                        // $order_noo = $_GET['order_noo'];
                        // $do_no = $_GET['do_no'];
                        $no=1;
                        $ambildataorder = mysqli_query($koneksi, "SELECT DISTINCT order_no FROM tb_va_input_exim_all WHERE invoice_no = '$invoic'");
                        }else{
                        $ambildataorder = 'kosong';
                        }
                            while($tampil = mysqli_fetch_array($ambildataorder)){
                            ?>
                         
                          <tr>
                            
                                  <td><?php echo $no++ ?></td>
                                  <td><?php echo $tampil['order_no']; ?></td>
                                 
                                  <?php $or =  $tampil['order_no']; ?>
                              </tr>
                          <?php    
                      }
                  ?>

</table>
                    </div>


<div class="scroll4">
   
<center><h4><b style="color:blue;">TOTAL DO NO</b></h4></center>
    <h1 style="color:red;"><center><?php
    include "koneksi.php";
    if(isset($_GET['invoic'])){
    $invoic = $_GET['invoic'];
    $jumlahdono = mysqli_num_rows(mysqli_query($koneksi, "SELECT DISTINCT m3 FROM tb_va_input_exim_all WHERE invoice_no = '$invoic' "));
    echo $jumlahdono  ;
    }
    ?></center></h1>
<table class="table table-hover my-0">
<thead>
                        <tr>
                        <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DO NO.</center></th>               
                        </th>     
                        </tr>
                    </thead> 
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
                    
                      if(isset($_GET['invoic'])){
                        // $dtgl = $_GET['dani'];
                        // $invoic = $_GET['invoic'];
                        $invoic = $_GET['invoic'];
                        // $order_noo = $_GET['order_noo'];
                        // $do_no = $_GET['do_no'];
                        $no=1;
                        $ambildataorder = mysqli_query($koneksi, "SELECT DISTINCT m3 FROM tb_va_input_exim_all WHERE invoice_no = '$invoic'");
                        }else{
                        $ambildataorder = 'kosong';
                        }
                            while($tampil = mysqli_fetch_array($ambildataorder)){
                            ?>
                         
                          <tr>
                                
                                  <td><?php echo $no++ ?></td>
                                  <td><?php echo $tampil['m3']; ?></td>
                                 
                            
                              </tr>
                          <?php    
                      }
                  ?>

</table>
                    </div>

<div class="scroll5">
   
   <center><h4><b style="color:blue;">TOTAL CONTAINER</b></h4></center>
       <h1 style="color:red;"><center><?php
       include "koneksi.php";
       if(isset($_GET['invoic'])){
       $invoic = $_GET['invoic'];
       $jumlahcontainer = mysqli_num_rows(mysqli_query($koneksi, "SELECT DISTINCT cont FROM tb_va_input_exim_all WHERE invoice_no = '$invoic' "));
       echo $jumlahcontainer  ;
       }
       ?></center></h1>
   <table class="table table-hover my-0">
   <thead>
                           <tr>
                           <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO</center></th>
                               <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO CONTAINER.</center></th>               
                           </th>     
                           </tr>
                       </thead> 
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
                       
                         if(isset($_GET['invoic'])){
                           // $dtgl = $_GET['dani'];
                           // $invoic = $_GET['invoic'];
                           $invoic = $_GET['invoic'];
                           // $order_noo = $_GET['order_noo'];
                           // $do_no = $_GET['do_no'];
                           $no=1;
                           $ambildataorder = mysqli_query($koneksi, "SELECT DISTINCT cont FROM tb_va_input_exim_all WHERE invoice_no = '$invoic'");
                           }else{
                           $ambildataorder = 'kosong';
                           }
                               while($tampil = mysqli_fetch_array($ambildataorder)){
                               ?>
                            
                             <tr>
                                   
                                     <td><?php echo $no++ ?></td>
                                     <td><?php echo $tampil['cont']; ?></td>
                                    
                               
                                 </tr>
                             <?php    
                         }
                     ?>
   
   </table>
                       </div>


<div class="scroll6">
   
   <center><h4><b style="color:blue;">HASIL SCAN CASE</b></h4></center>
       <h1 style="color:red;"><center><?php
       include "koneksi.php";
       if(isset($_GET['invoic'])){
       $invoic = $_GET['invoic'];
       $jumlahscan = mysqli_query($koneksi, "SELECT count(damin) as scan FROM tb_va_input_exim_all WHERE invoice_no = '$invoic' GROUP BY damin "); 
       while($getscan = mysqli_fetch_array($jumlahscan)) { 
         $scann   = $getscan['scan'];
       }
        

       $jumlahdatascan = mysqli_query($koneksi, "SELECT count(id_no) as datascan FROM tb_va_input_exim_all WHERE invoice_no = '$invoic' "); 
       while($getdatascan = mysqli_fetch_array($jumlahdatascan)) { 
         $datascann   = $getdatascan['datascan'];
       }
       
    }
       ?>
       <span><h1 style="color:red;"><?= $scann ?>/<span style="color:green;"><?= $datascann ?></h1></span></span>
       </center>
    </h1>
   <table class="table table-hover my-0">
   <thead>
                           <tr>
                           <!-- <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>INVOICE NO</center></th> -->
                               <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO.</center></th>               
                               <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DO NO.</center></th>               
                           </th>     
                           </tr>
                       </thead> 
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
                       
                         if(isset($_GET['invoic'])){
                           // $dtgl = $_GET['dani'];
                           // $invoic = $_GET['invoic'];
                           $invoic = $_GET['invoic'];
                           // $order_noo = $_GET['order_noo'];
                           // $do_no = $_GET['do_no'];
                           $no=1;
                           $ambildatascan = mysqli_query($koneksi, "SELECT hasil_scan FROM tb_va_input_exim_all WHERE invoice_no = '$invoic'");
                           }else{
                           $ambildatascan = 'kosong';
                           }
                               while($tampil = mysqli_fetch_array($ambildatascan)){
                               ?>
                            
                             <tr>
                                    <td><?php echo $no++ ?></td>
                                     <td><?php echo $tampil['hasil_scan']; ?></td>
                                    
                               
                                 </tr>
                             <?php    
                         }
                     ?>
   
   </table>
                       </div>

<div class="scroll7">
   
   <center><h4><b style="color:blue;">BELUM SCAN</b></h4></center>
       <h1 style="color:red;"><center><?php
       include "koneksi.php";
       if(isset($_GET['invoic'])){
       $invoic = $_GET['invoic'];
       $jumlahbelumscan = mysqli_num_rows(mysqli_query($koneksi, "SELECT id_no FROM tb_va_input_exim_all WHERE hasil_scan = '' and invoice_no = '$invoic' "));
       echo $jumlahbelumscan ;
       }
       ?></center></h1>
   <table class="table table-hover my-0">
   <thead>
                           <tr>
                           <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO</center></th>
                               <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DO NO.</center></th>               
                           </th>     
                           </tr>
                       </thead> 
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
                       
                         if(isset($_GET['invoic'])){
                           // $dtgl = $_GET['dani'];
                           // $invoic = $_GET['invoic'];
                           $invoic = $_GET['invoic'];
                           // $order_noo = $_GET['order_noo'];
                           // $do_no = $_GET['do_no'];
                           $no=1;
                           $jumlahdatablmscan = mysqli_query($koneksi, "SELECT id_no FROM tb_va_input_exim_all WHERE hasil_scan = '' and invoice_no = '$invoic'");   
                           }else{
                           $jumlahdatablmscan = 'kosong';
                           }
                           while($getdatablmscan = mysqli_fetch_array($jumlahdatablmscan)){
                               ?>
                            
                             <tr>
                            
                                     <td><?php echo $no++ ?></td>
                                     <td><?php echo $datablmscann = $getdatablmscan['id_no']; ?></td>
                                    
                               
                                 </tr>
                             <?php    
                         }
                     ?>
   
   </table>
                       </div>


<div class="scroll2">
<table class="table table-hover my-0">



<thead>

                        <tr>
                        
                        <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>TANGGAL</center></th>
                        <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>INVOICE NO</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ORDER NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>LOT NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CASE NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CKD SET NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DESTINATION CODE</center></th>                             
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CASE TYPE</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DO NO</center></th>
                            <!-- <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>M3</center></th> -->
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ID NO.</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CONT</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>HASIL SCAN</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CHECK</center></th>     
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DOK</center></th>                 
                        </th>     
                        </tr>
                    </thead> 
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
                     

                      if(isset($_GET['invoic'])){
                        // $dtgl = $_GET['dani'];
                        $invoic = $_GET['invoic'];
                        // $order_noo = $_GET['order_noo'];
                        // $do_no = $_GET['do_no'];
                            $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_va_input_exim_all WHERE invoice_no = '$invoic'");
                            // $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_va_input_exim_all WHERE order_no = '$order_noo'");
                            // $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_va_input_exim_all WHERE m3 = '$do_no'");
                        }else{
                            $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_va_input_exim_all WHERE tgll = '$tanggal_ori' ");}
                            while($tampil = mysqli_fetch_array($ambildata)){
                            ?>
                         
                          <tr>
                                  <!-- <td>$no</td> -->
                                  <td><?php echo $tampil['tgll']; ?></td>
                                  <td><?php echo $tampil['invoice_no']; ?></td>
                                  <td><?php echo $tampil['order_no']; ?></td>
                                  <td><?php echo $tampil['lot_no']; ?></td>
                                  <td><?php echo $tampil['case_no']; ?></td>
                                  <td><?php echo $tampil['ckd_set_no']; ?></td>
                                  <td><?php echo $tampil['destination']; ?></td>
                                  <td><?php echo $tampil['case_type']; ?></td>
                                  <td><?php echo $tampil['m3']; ?></td>
                                 
                                  <td><?php echo $tampil['id_no']; ?></td>
                                  <td><?php echo $tampil['cont']; ?></td>
                                  <td><?php echo $tampil['hasil_scan']; ?></td>
                                  <td><?php echo $tampil['check1']; ?></td>
                                  <td><?php echo $tampil['dok']; ?></td>
                            
                              </tr>
                          <?php    
                      }
                  ?><br><br>

</table>
                    </div>












                    <a href="index.php"><img src="back.png"  style="width:45px; height:45px; position:relative;left:1600px;top:-780px;"></a>
	        </main>        
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
                            <a href="#" class="text-muted">&copy; <strong ><b>2022 <i style="color:blue;">Ramandani Gilang S [19968]</i> YIMM-WJF.</b></strong></a>	 
							</p>
						</div>
                        <div>
                            <marquee class="info" direction="center" scrollamount="10">PATUHI PROTOKOL KESEHATAN COVID-19 DEGAN MELAKUKAN 3M DAN HINDARI 3K</marquee>
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