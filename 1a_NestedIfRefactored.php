<?php
class KonversiStatusKelulusan
{
    function ipk($ipk)
    {
        if ($ipk >= 3.5 &&  4) {
            return TRUE;
        }
    }
    function lamaKuliah($lamakuliah)
    {
        if ($lamakuliah <= 4) {
            return true;
        }
    }

    function main($ipk, $lamakuliah)
    {
        if ($this->ipk($ipk) == false) {
            return 'Anda Tidak Cumlaude, Nilai IPK Kurang';
        }
        if ($this->lamaKuliah($lamakuliah) == false) {
            return 'Anda Tidak Cumlaude, Kuliah terlalu lama';
        }
        return 'Anda Lulus Cumlaude';
    }
}


$transaksi = new KonversiStatusKelulusan;
$ipk = 3.5;
$lamakuliah = 5;
$cek = $transaksi->main($ipk, $lamakuliah);
echo $cek;
