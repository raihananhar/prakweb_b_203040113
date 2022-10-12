<?php

class About {
    public function index($nama = 'Raihan', $pekerjaan = 'Mahasiswa', $umur = '19' )
    {
        echo "Hallo, nama saya $nama, Saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
    }
    public function page()
    {
        echo 'About/page';
    }
}