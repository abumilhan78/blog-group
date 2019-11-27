<?php
class Database
{
    public $host = "localhost",
        $user = "root",
        $pass = 123,
        $db = "blog2";

    public $koneksi;

    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi) {
            // echo "berhasil";
        } else {
            echo "Koneksi Database Gagal";
        }
    }
}

$db = new Database();

// OOP Kategori
include 'kategori.php';

// OOP Artikel
include 'artikel.php';

//OOP frontend
include 'frontend.php';
