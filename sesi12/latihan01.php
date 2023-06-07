<?php
    $dta["NIM"] ="1122334455";
    $dta["NAMA"] ="Intan";
    $dta["ALAMAT"] ="Panjer";
    $dta["JURUSAN"] ="TI_PAR";
    $dta["KELAS"] ="J"; 
    $dta["JKEL"] ="P";


    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);