<?php

class Mahasiswa {
    public $nama;
    public $nim;
    public $semester;

    public function __construct($nama) {
        $this->nama = $nama;
        echo 'Mahasiswa baru telah datang! <br />';
    }
    
    public function makan($nama) {
        echo $nama . ' sedang makan <br />'; 
    }
}

$siti = new Mahasiswa('Siti Aisyah');

$tono = new Mahasiswa('Tono Sutanto');


echo $siti->nama . '<br />';
echo $tono->nama;