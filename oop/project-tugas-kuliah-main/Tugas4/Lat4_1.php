<?php

    //class mobil
    class Mobil
    {
        public $nama;
        public $merk;

        public function getInfo()
        {
            echo 'Nama mobil: '.$this->nama.'<br/>';
            echo 'Merk: '.$this->merk.'<br/>';
        }
    }
    //bagian main
    $ferari = new Mobil();
    $ferari->nama = 'xxx';
    $ferari->merk = 'aaa';
    $ferari->getInfo();
