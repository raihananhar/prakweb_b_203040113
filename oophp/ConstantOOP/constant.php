<?php

// define('NAMA', 'Raihan Anhar');
// echo NAMA;

// echo "<br>";

// const UMUR = 19;
// echo UMUR;


// class Coba {
//     const NAMA = 'Swan';
// }

// echo Coba::NAMA;

// echo __FILE__;


// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;

?>