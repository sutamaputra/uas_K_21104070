<?php
    $h["error"] = 1; 
    if(isset($_POST["txNIDN"])){
        include_once("dbkoneksi2.php");
        $nidn = $_POST["txNIDN"];
        $nama = $_POST["txNAMA"];
        $sts =  $_POST["txSTS"];
        $jkel = $_POST["txJKEL"];

        $sql = "UPDATE dsn SET 
            NAMA='$nama',
            STS='$sts',
            JK='$jkel'
            WHERE NIDN='$nidn'";
            
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);