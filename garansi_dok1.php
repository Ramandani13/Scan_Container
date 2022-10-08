<?php
include "koneksi.php";
$sumdatadok1 = mysqli_query($koneksi,"SELECT COUNT(id_no) as id_no  FROM  tb_va_input_exim where dok = '1'");
                                $tampilsumdatadok1 = mysqli_fetch_array($sumdatadok1,MYSQLI_ASSOC);
                                   $sumcountdok1 = $tampilsumdatadok1['id_no'] ;

$sumscandok1 = mysqli_query($koneksi,"SELECT SUM(damin) as damin  FROM tb_va_input_exim where dok = '1'");
                                $tampilsumscandok1 = mysqli_fetch_array($sumscandok1,MYSQLI_ASSOC);
                                    $sumscandok1 = $tampilsumscandok1['damin'] ;

if($sumcountdok1 == $sumscandok1){
    $result = mysqli_query($koneksi, "DELETE FROM tb_va_input_exim WHERE dok = '1' ");
    header("Location:index.php");
}else{
?>
    <center><div style="width:720px;height:410px;background-image:url(gambar/salahweight.png);background-size:cover;margin-top:70px;border-radius:5px;">
        <!-- <a href="pages-ipack1.php"><input style="position:relative;top:280px;left:-75px;width:120px;height:40px;" type="text" placeholder="Scan Code Disini" name="dani"></a> -->
        <form id="in-bar" method="POST" action="" class="fill-barcode" name="pal">
                    <p style="margin-left: 2%;">
                        <center><input style="position:relative;width:400px;height:40px;top:235px;right:0px;background-color:white;border-radius:5px;color:black;text-align:center;" type="password" name="konfirmasiitem" placeholder="Scan Code Disini" autofocus required><center>
                       
                        <div id="toggle" onclick="showHide();"></div>
                    </p>
                <td><input type="submit"  value="OK" name="klik" hidden=""></td>
        </form>
    </div></center>
<?php
    if(isset($_POST['klik'])){
        $konfirmasiitem1 = $_POST["konfirmasiitem"];

        $sql1 = "SELECT * FROM user WHERE passwordweight='".$konfirmasiitem1."' ";
        $hasil1 = mysqli_query ($koneksi,$sql1);
        $jumlah1 = mysqli_num_rows($hasil1);
        if ($jumlah1>0) {
            $result = mysqli_query($koneksi, "DELETE FROM tb_va_input_exim WHERE dok = '1' ");
            header("Location:index.php");
        
        }else{
            echo "<script>alert('Kode SALAH..!')</script>";
        }
    }
}
?>
