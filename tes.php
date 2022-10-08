<?php
       include "koneksi.php";
       
       $jumlahdatascan = mysqli_query($koneksi, "SELECT id_no FROM tb_va_input_exim_all WHERE NOT EXISTS ($koneksi, "SELECT hasil_scan FROM tb_va_input_exim_all ")"); 
       while($getdatascan = mysqli_fetch_array($jumlahdatascan)) { 
         $datascann   = $getdatascan['datascan'];
       }
      
      echo  $datascann;
       ?>

