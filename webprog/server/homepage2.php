<?php
   include_once("dbkoneksi2.php");
   $sql = "SELECT NIDN, NAMA, JK, STS FROM dsn";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);
