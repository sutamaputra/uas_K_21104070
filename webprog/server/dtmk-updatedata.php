<?php
    $h["error"] = 1; 
    if(isset($_POST["txCODE"])){
        include_once("dbkoneksi2.php");
        $code = $_POST["txCODE"];
        $mk = $_POST["txMK"];
        $sks =  $_POST["txSKS"];
        $smstr = $_POST["txSMSTR"];

        $sql = "UPDATE mk SET 
            MK='$mk',
            SKS='$sks',
            SMSTR='$smstr' 
            WHERE CODE='$code'";
            
        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            $h["error"] = 0; 
        }
    }
    echo json_encode($h);