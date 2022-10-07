<?php

class Produk
{

  public $judul = "judul",
         $penulis = "penulis",
         $penerbit = "penerbit",
         $harga = 0;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "One Piace";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "God Of War";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "One piace";
$produk3->penulis = "Eichiro oda";
$produk3->penerbit = "RED";
$produk3->harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo  "<br>";
// echo $produk3->getLabel();


$produk4 = new Produk();
$produk4->judul = "God Of War";
$produk4->penulis = "david jeff";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 300000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();