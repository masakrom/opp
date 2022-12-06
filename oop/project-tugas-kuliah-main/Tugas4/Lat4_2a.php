<?php

class mahasiswa
{
    public $nama;
    public $nim;

    public function __construct($a, $b)
    {
        $this->nama = $a;
        $this->nim = $b;
        echo 'Kelas telah dibuat<br/><br/>';
    }

    public function cetak()
    {
        echo $this->nama.'<br/>'.$this->nim.'<br/><br/>';
    }

    public function __destruct()
    {
        echo 'Kelas telah dihancurkan';
    }
}
