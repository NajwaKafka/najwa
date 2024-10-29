<?php
class Mahasiswa {
    public $nama;
    public $npm;

    public function biodataMahasiswa() {
        return "Nama: " . $this->nama .",<br> NPM: " . $this->npm;
    }
}

$mahasiswa = new Mahasiswa();
$mahasiswa->nama = "Najwa Kafka";
$mahasiswa->npm = "23753108";     

echo $mahasiswa->biodataMahasiswa(); 
?>
