<?php
    define("DBHOST","127.0.0.1");
    define("DBUSER","root");
    define("DBPASCODE","");
    define("DBNAME","mahasiswa");
    define("DBPORT","3306");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,) or 
        die("Koneksi ke DBMS Mysql gagal<br>");
    $sql = "CREATE DATABASE ".DBNAME.";";
    if(mysqli_query($cnn,$sql)){
        echo "Database ".DBNAME." berhasil dibuat";
    }else{
        echo "Database ".DBNAME." Gagal dibuat, check kondisi server database";
        die();
    }
    mysqli_select_db($cnn, DBNAME);
    $sql = "CREATE TABLE mhs(
        NIM VARCHAR(8) PRIMARY KEY,
        NAMA VARCHAR(25),
        JURUSAN VARCHAR(15),
        JK VARCHAR(1),
        TGLLAHIR date
    )";
    if(mysqli_query($cnn,$sql)){
        echo "Tabel mhs berhasil dibuat";
    }else{
        echo "Tabel mhs tidak berhasil dibuat";
    }

    mysqli_select_db($cnn, DBNAME);
    $sql = "CREATE TABLE dsn(
        NIDN VARCHAR(8) PRIMARY KEY,
        NAMA VARCHAR(25),
        JK VARCHAR(1),
        STS VARCHAR(1)
    )";
    if(mysqli_query($cnn,$sql)){
        echo "Tabel mhs berhasil dibuat";
    }else{
        echo "Tabel mhs tidak berhasil dibuat";
    }

    mysqli_select_db($cnn, DBNAME);
    $sql = "CREATE TABLE mk(
        CODE VARCHAR(4) PRIMARY KEY,
        MK VARCHAR(25),
        SKS INT (2),
        SMSTR VARCHAR (10)
    )";
    if(mysqli_query($cnn,$sql)){
        echo "Tabel mk berhasil dibuat";
    }else{
        echo "Tabel mk tidak berhasil dibuat";
    }