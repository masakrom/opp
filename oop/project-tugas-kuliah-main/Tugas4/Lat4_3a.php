<?php

class mahasiswa
{
    private $nama;
    private $nim;

    public function __construct()
    {
    }

    public function setNama($a)
    {
        $this->nama = $a;
    }

    public function setNim($b)
    {
        $this->nim = $b;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function destruct()
    {
    }
}
