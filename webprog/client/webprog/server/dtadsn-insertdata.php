<?php
    $h["error"] = 1; 
    if(isset($_POST["txNIDN"])){
        include_once("dbkoneksi2.php");
        $nidn = $_POST["txNIDN"];
        $nama = $_POST["txNAMA"];
        $jkel = $_POST["txJKEL"];
        $sts = $_POST["txSTS"];

        $sql = "INSERT INTO dsn(NIDN,NAMA,JK,STS) VALUES('$nidn','$nama','$jkel','$sts')";
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);
