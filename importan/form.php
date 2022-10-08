<!--
-- Source Code from My Notes Code (www.mynotescode.com)
--
-- Follow Us on Social Media
-- Facebook : http://facebook.com/mynotescode/
-- Twitter  : http://twitter.com/code_notes
-- Google+  : http://plus.google.com/118319575543333993544
--
-- Terimakasih telah mengunjungi blog kami.
-- Jangan lupa untuk Like dan Share catatan-catatan yang ada di blog kami.
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Import Data Packing Master | AMP</title>

		<!-- Load File bootstrap.min.css yang ada difolder css -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
		<?php
	ini_set("display_errors",0);
	$server = "localhost"; 
    $dbusername = "root";  
    $dbpassword = "";  
    $namadb="db_ppe";
  
    $koneksi = mysqli_connect($server, $dbusername, $dbpassword,$namadb) or die ("<font size='5px' color='red'>---Terjadi Masalah Koneksi || Tolong di refresh ya---</br></br>Info by Ditto Sefiano</font>");
	?>

	
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Style untuk Loading -->
		<style>
        #loading{
			background: whitesmoke;
			position: absolute;
			top: 140px;
			left: 82px;
			padding: 5px 10px;
			border: 1px solid #ccc;
		}
		</style>

		<!-- Load File jquery.min.js yang ada difolder js -->
		<script src="js/jquery.min.js"></script>

		<script>
		$(document).ready(function(){
			// Sembunyikan alert validasi kosong
			$("#kosong").hide();
		});
		</script>
	</head>
	<body>
		<!-- Membuat Menu Header / Navbar -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: white;"><b>Import Data Packing Master</b></a>
				</div>
				<p class="navbar-text navbar-right hidden-xs" style="color: white;padding-right: 10px;">
				<p class="navbar-text navbar-right hidden-xs" style="color: white;padding-right: 10px;">
					<a style="background: #d34836; padding: 0 10px; border-radius: 4px; color: #ffffff; text-decoration: none;" href="../../va-input-exim/index.php">Main Menu</a>
				</p>
				</p>
			</div>
		</nav>

		<!-- Content -->
		<div style="padding: 0 15px;">
			<!-- Buat sebuah tombol Cancel untuk kemabli ke halaman awal / view data -->
			

			<h3>Form Import Data</h3>
			<hr>

			<!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
			<form method="post" action="" enctype="multipart/form-data">
				
				<!--
				-- Buat sebuah input type file
				-- class pull-left berfungsi agar file input berada di sebelah kiri
				-->
				<input type="file" name="file" class="pull-left">

				<button type="submit" name="preview" class="btn btn-success btn-sm">
					<span class="glyphicon glyphicon-eye-open"></span> Preview
				</button>
			</form>

			<hr>

			<!-- Buat Preview Data -->
			<?php
			// Jika user telah mengklik tombol Preview
			if(isset($_POST['preview'])){
				//$ip = ; // Ambil IP Address dari User
				$nama_file_baru = 'data.xlsx';

				// Cek apakah terdapat file data.xlsx pada folder tmp
				if(is_file('tmp/'.$nama_file_baru)) // Jika file tersebut ada
					unlink('tmp/'.$nama_file_baru); // Hapus file tersebut

				$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
				$tmp_file = $_FILES['file']['tmp_name'];

				// Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
				if($ext == "xlsx"){
					// Upload file yang dipilih ke folder tmp
					// dan rename file tersebut menjadi data{ip_address}.xlsx
					// {ip_address} diganti jadi ip address user yang ada di variabel $ip
					// Contoh nama file setelah di rename : data127.0.0.1.xlsx
					move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);

					// Load librari PHPExcel nya
					require_once 'PHPExcel/PHPExcel.php';

					$excelreader = new PHPExcel_Reader_Excel2007();
					$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp
					$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

					// Buat sebuah tag form untuk proses import data ke database
					echo "<form method='post' action='import.php'>";

					

					echo "<table class='table table-bordered'>
					<tr>
						<th colspan='5' class='text-center'>Preview Data</th>
					</tr>
					<tr>
						<th>INVOICE NO</th>
						<th>ORDER NO</th>
						<th>LOT NO</th>
						<th>CASE NO</th>
						<th>CKD SET NO</th>
						<th>DESTINATION</th>
						<th>CASE TYPE</th>
						<th>M3</th>
						<th>ID NO</th>
						<th>CONT</th>
						<th>HASIL SCAN</th>
						<th>CHECK</th>
						<th>DOK</th>
		
					</tr>";

					// Buat sebuah div untuk alert validasi kosong
					$numrow = 1;
					$kosong = 0;
					foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel
						// Ambil data pada excel sesuai Kolom
						
						
                        $invoice_no=$row['A'];
                        $order_no=$row['B'];
                        $lot_no=$row['C'];
                        $case_no=$row['D'];
                        $ckd_set_no=$row['E'];
                        $destination=$row['F'];
                        $case_type=$row['G'];
                        $m3=$row['H'];
                        $id_no=$row['I'];
                        $cont=$row['J'];
                        $hasil_scan=$row['K'];
                        $check1=$row['L'];
                        $dok=$row['M'];
						


						// Cek jika semua data tidak diisi
						if($invoice_no == "" && $order_no == "" && $lot_no == "" && $case_no == "" && $ckd_set_no == "" && $destination == "" && $case_type == "" && $m3 == "" && $id_no == "" && $cont == "" && $hasil_scan == "" && $check1 == "" && $dok == "")
							continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

						// Cek $numrow apakah lebih dari 1
						// Artinya karena baris pertama adalah nama-nama kolom
						// Jadi dilewat saja, tidak usah diimport
						if($numrow > 1){
							// Validasi apakah semua data telah diisi
							$invoice_no_td = ( ! empty($invoice_no))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$order_no_td = ( ! empty($order_no))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$lot_no_td = ( ! empty($lot_no))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$case_no_td = ( ! empty($case_no))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$ckd_set_no_td = ( ! empty($ckd_set_no))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$destination_td = ( ! empty($destination))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$case_type_td = ( ! empty($case_type))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$m3_td = ( ! empty($m3))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$id_no_td = ( ! empty($id_no))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$cont_td = ( ! empty($cont))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$hasil_scan_td = ( ! empty($hasil_scan))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$check1_td = ( ! empty($check1))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$dok_td = ( ! empty($dok))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
							
							// Jika salah satu data ada yang kosong
							

							if($invoice_no == "" or $order_no == "" or $lot_no == "" or $case_no == "" or $ckd_set_no == "" or $destination == "" or $case_type == "" or $m3 == "" or $id_no == "" or $cont == "" or $hasil_scan == "" or $check1 == "" or $dok == ""){
								$kosong++; // Tambah 1 variabel $kosong
							}

							echo "<tr>";
							echo "<td".$invoice_no_td.">".$invoice_no."</td>";
							echo "<td".$order_no_td.">".$order_no."</td>";
							echo "<td".$lot_no_td.">".$lot_no."</td>";
							echo "<td".$case_no_td.">".$case_no."</td>";
							echo "<td".$ckd_set_no_td.">".$ckd_set_no."</td>";
							echo "<td".$destination_td.">".$destination."</td>";
							echo "<td".$case_type_td.">".$case_type."</td>";
							echo "<td".$m3_td.">".$m3."</td>";
							echo "<td".$id_no_td.">".$id_no."</td>";
							echo "<td".$cont_td.">".$cont."</td>";
							echo "<td".$hasil_scan_td.">".$hasil_scan."</td>";
							echo "<td".$check1_td.">".$check1."</td>";
							echo "<td".$dok_td.">".$dok."</td>";
												
							echo "</tr>";

							
						}

						$numrow++; // Tambah 1 setiap kali looping
					}

					echo "</table>";

					// Cek apakah variabel kosong lebih dari 1
					// Jika lebih dari 1, berarti ada data yang masih kosong
					if($kosong > 1){
					?>
						<script>
						$(document).ready(function(){
							// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
							$("#jumlah_kosong").html('<?php echo $kosong; ?>');

							$("#kosong").show(); // Munculkan alert validasi kosong
						});
						</script>
					<?php
					}else{ // Jika semua data sudah diisi
						echo "<hr>";

						// Buat sebuah tombol untuk mengimport data ke database
						echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
					}

					echo "</form>";
				}else{ // Jika file yang diupload bukan File Excel 2007 (.xlsx)
					// Munculkan pesan validasi
					echo "<div class='alert alert-danger'>
					Hanya File Excel 2007 (.xlsx) yang diperbolehkan
					</div>";
				}
			}
			?>
		</div>
	</body>
</html>
