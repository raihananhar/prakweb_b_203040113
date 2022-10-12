<?php

class About {
    public function index($nama = 'Raihan', $pekerjaan = 'Mahasiswa')
    {
        echo "Hallo, nama saya $nama, Saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}