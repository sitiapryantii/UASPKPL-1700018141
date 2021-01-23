<?php

interface KonversiSatuanPanjangInterface
{
    public function eksekusi($kiloMeter);
}


class KmtoHek implements
    KonversiSatuanPanjangInterface
{
    public function eksekusi($kiloMeter)

    {
        $hasil = $kiloMeter * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Hektometer ";
    }
}

class KmtoDek implements
    KonversiSatuanPanjangInterface
{
    public function eksekusi($kiloMeter)
    {

        $hasil = $kiloMeter * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Dekameter ";
    }
}

class KmtoM implements
    KonversiSatuanPanjangInterface
{
    public function eksekusi($kiloMeter)
    {

        $hasil = $kiloMeter * 10 * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Meter ";
    }
}

class KmtoDm implements
    KonversiSatuanPanjangInterface
{
    public function eksekusi($kiloMeter)
    {

        $hasil = $kiloMeter * 10 * 10 * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Desimeter";
    }
}

class KmtoCm implements
    KonversiSatuanPanjangInterface
{
    public function eksekusi($kiloMeter)
    {

        $hasil = $kiloMeter * 10 * 10 * 10 * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Centimeter";
    }
}

class Kmtomil implements
    KonversiSatuanPanjangInterface
{
    public function eksekusi($kiloMeter)
    {

        $hasil = $kiloMeter * 10 * 10 * 10 * 10 * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Milimeter";
    }
}

class Nochoise implements
    KonversiSatuanPanjangInterface
{
    public function eksekusi($kiloMeter)
    {

        echo 'Anda tidak memilih';
    }
}


class KonversiJarak
{
    public static function pilihan($pilih)
    {
        switch ($pilih) {
            case 'kilometer ke hektometer';
                return new KmtoHek;
                break;
            case 'kilometer ke dekameter';
                return new KmtoDek;
                break;
            case 'kilometer ke meter';
                return new KmtoM;
                break;
            case 'kilometer ke desimeter';
                return new KmtoDm;
                break;
            case 'kilometer ke centimeter';
                return new KmtoCm;
                break;
            case 'kilometer ke milimeter';
                return new Kmtomil;
                break;
            case 'kilometer ke hektometer';
                return new Nochoise;
                break;
        }
    }
}

$kiloMeter = 5;
// Operasi Jika memilih penjumlahan
KonversiJarak::pilihan('kilometer ke hektometer')->eksekusi($kiloMeter);
echo '<br>';
