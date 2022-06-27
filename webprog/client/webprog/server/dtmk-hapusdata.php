<?php
    $output["error"] = true;
    if(isset($_POST["txCODE"])){ 
        $cx = $_POST["txCODE"]; 
        include_once("dbkoneksi2.php");
        $sql = "DELETE FROM mk WHERE CODE='$cx'";
        $hsl = mysqli_query($cnn, $sql);
        $output["error"] = false;
    }

    echo json_encode($output);