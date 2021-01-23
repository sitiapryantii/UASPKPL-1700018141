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
            return TRUE;
        }
    }


    function main($ipk, $lamakuliah)
    {
        if ($this->ipk($ipk) == TRUE) {
            if ($this->lamaKuliah($lamakuliah) == TRUE) {
                return 'Selamat, Anda cumlaude';
            } else {
                return 'Anda Tidak Cumlaude, Kuliah terlalu lama';
            }
        } else {
            return 'Anda Tidak Cumlaude, Nilai IPK Kurang';
        }
    }
}

$transaksi = new KonversiStatusKelulusan;
$ipk = 3;
$lamakuliah = 5;
$cek = $transaksi->main($ipk, $lamakuliah);
echo $cek;
