<?php

// Jualan produk
// Komik
// Game


class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0; 

    public function __construct($judul = "$judul", $penulis = "$penulis", $penerbit = "$penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("One piace", "Eichiro oda", "RED", 530000, 100);

$produk2 = new Produk("GOD OF WAR", "David jaffe", "Sony Computer", 250000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
?>