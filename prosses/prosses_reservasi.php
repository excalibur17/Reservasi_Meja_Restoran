<?php
include "connect.php";
$name =  (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username =  (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$nohp =  (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$check_in_date =  (isset($_POST['check_in_date'])) ? htmlentities($_POST['check_in_date']) : "";
$check_out_date =  (isset($_POST['check_out_date'])) ? htmlentities($_POST['check_out_date']) : "";
$jumlah_orang =  (isset($_POST['jumlah_orang'])) ? htmlentities($_POST['jumlah_orang']) : "";


// $message = "";

if (empty($_POST['input_resevasi_validate'])) {
    $query = mysqli_query($conn, "INSERT INTO tb_reservasi (nama,username,nohp,check_in_date,check_out_date,jumlah_orang) 
    VALUES ('$name','$username','$nohp','$check_in_date','$check_out_date','$jumlah_orang')");
    if ($query) {
        $message = '<script>alert("berhasil melakukan reservasi")
            window.location="../Reservasi"
            </script>';
            echo $message;
    } else {
        $message = '<script>alert("gagal melakukan reservasi")
        window.location="../Reservasi"
            </script>';
    }
}


