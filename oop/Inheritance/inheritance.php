<?php

// Jualan produk
// Komik
// Game


class Produk {
    public $judul = "judul", 
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0,
           $jmlHalaman = "jmlHalaman",
           $waktuMain = 0;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk-> judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public function getInfoProduk() {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}
$produk1 = new Komik("One piace", "Eichiro oda", "RED", 60000, 100, 0);

$produk2 = new Game("GOD OF WAR", "David jaffe", "Sony Computer", 250000, 0, 50);

// Komik : One Piace | Eichiro oda, Red (Rp. 60000) - 100 Halaman.
// Game : God of war | David jaffe, Sony Computer (Rp. 250000) - 50 jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>