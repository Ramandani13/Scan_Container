<?php
error_reporting(0);
include "koneksi.php";

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = 'data.xlsx';

	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';

	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

	$numrow = 1;
	foreach($sheet as $row){
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
                        $tanggalkey=date("Y-m-d");
			// Buat query Insert
			//$query = "INSERT INTO tbl_packing_master (case_no,case_qty,case_type,cs_gross_weight,packing_line,carton_no,carton_type,seq,part_no,part_name,stock_loc,weight,qty_carton,qty_case,min,max,bag_qty,lot_size,packing_spec,cycle_time) VALUES('".$case_no."','".$case_qty."','".$case_type."','".$cs_gross_weight."','".$packing_line."','".$no."','".$carton_type."'.'".$seq."','".$component_part."','".$component_name."','".$stock_loc."','".$weight."','".$qty_per_carton."','".$qty_per_case."','".$min_carton."','".$max_carton."','".$bag_qty."','".$lot_size."','".$packing_spec."','".$cycle_time."')";
			$query = mysqli_query($koneksi,"INSERT INTO tb_va_input_exim (id,invoice_no,order_no,lot_no,case_no,ckd_set_no,destination,case_type,m3,id_no,cont,hasil_scan,check1,dok) VALUES('','$invoice_no','$order_no','$lot_no','$case_no','$ckd_set_no','$destination','$case_type','$m3','$id_no','$cont','','$check1','$dok')");
			$query1 = mysqli_query($koneksi,"INSERT INTO tb_va_input_exim_all (id,invoice_no,order_no,lot_no,case_no,ckd_set_no,destination,case_type,m3,id_no,cont,hasil_scan,check1,dok) VALUES('','$invoice_no','$order_no','$lot_no','$case_no','$ckd_set_no','$destination','$case_type','$m3','$id_no','$cont','','$check1','$dok')");
			
			$query = "INSERT INTO tb_va_input_exim VALUES('".$invoice_no."','".$order_no."','".$lot_no."','".$case_no."','".$ckd_set_no."','".$destination."','".$case_type."','".$m3."','".$id_no."','".$cont."','".$hasil_scan."','".$check1."','".$dok."')";
			// Eksekusi $query
			mysqli_query($koneksi, $query);
		}

		$numrow++; // Tambah 1 setiap kali looping
	}
}

header('location:../index.php'); // Redirect ke halaman awal
?>
