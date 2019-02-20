<?php
    $nama="Abimanyu Prakoso";
    function tampil_nama(){
        global $nama;
        echo "Nama : ".$nama;
    }
    tampil_nama();
    echo "<br>";
    echo "Jadi fungsi global dalam hal ini supaya";
    echo "<br>";
    echo "variabel nama dapat diakses di dalam funsi tampil_nama";
?>