<?php
    $output["error"] = true;
    if(isset($_GET["code"])){ 
        $cx = $_GET["code"]; 
        include_once("dbkoneksi2.php");
        $sql = "SELECT CODE, MK, SKS, SMSTR FROM mk WHERE CODE='$cx'";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = false;
        $output["sql"] = $sql;
    }

    echo json_encode($output);