<?php
    $dta[0] ["NIM"] ="1122334455";
    $dta[0] ["NAMA"] ="Intan";
    $dta[0] ["ALAMAT"] ="Panjer";
    $dta[0] ["JURUSAN"] ="TI_PAR";
    $dta[0] ["KELAS"] ="J"; 
    $dta[0] ["JKEL"] ="P";


    $dta[1] ["NIM"] ="23456789";
    $dta[1] ["NAMA"] ="Ani";
    $dta[1] ["ALAMAT"] ="Sesetan";
    $dta[1] ["JURUSAN"] ="TI_PAR";
    $dta[1] ["KELAS"] ="J"; 
    $dta[1] ["JKEL"] ="P";

    $dta[2] ["NIM"] ="2201010544";
    $dta[2] ["NAMA"] ="Della";
    $dta[2] ["ALAMAT"] ="Kuta";
    $dta[2] ["JURUSAN"] ="TI_PAR";
    $dta[2] ["KELAS"] ="J"; 
    $dta[2] ["JKEL"] ="P";

    $dta[3] ["NIM"] ="2201010427";
    $dta[3] ["NAMA"] ="Icha";
    $dta[3] ["ALAMAT"] ="Gianyar";
    $dta[3] ["JURUSAN"] ="TI_PAR";
    $dta[3] ["KELAS"] ="J"; 
    $dta[3] ["JKEL"] ="P";

    $dta[4] ["NIM"] ="2201010658";
    $dta[4] ["NAMA"] ="Celi";
    $dta[4] ["ALAMAT"] ="Manggarai";
    $dta[4] ["JURUSAN"] ="TI_PAR";
    $dta[4] ["KELAS"] ="J"; 
    $dta[4] ["JKEL"] ="P";

    $dta[5] ["NIM"] ="2201010522";
    $dta[5] ["NAMA"] ="Vinda";
    $dta[5] ["ALAMAT"] ="karangasem";
    $dta[5] ["JURUSAN"] ="TI_PAR";
    $dta[5] ["KELAS"] ="J"; 
    $dta[5] ["JKEL"] ="P";


    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);