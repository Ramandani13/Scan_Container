<?php
  error_reporting (0);
  header("content-disposition:attachment;filename=Data-Weighting.txt");
  
                      include "koneksi.php";             
                          $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_va_input_exim WHERE dok = '2' ");
                          while($tampil = mysqli_fetch_array($ambildata)){  
                            $separator = "\r";
                                   echo $tampil['hasil_scan'].$separator; 
                                   
                                  
                      }
                  ?> 
                  