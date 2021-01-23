<?php
class KonversiSatuanPanjang
{

    public function kilometerKeHektometer($kiloMeter)
    {
        $hasilhek = $kiloMeter * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasilhek . " Hektometer ";
    }

    public function kilometerKeDekameter($kiloMeter)
    {
        $hasil = $kiloMeter * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Dekameter ";
    }

    public function kilometerKeMeter($kiloMeter)
    {
        $hasil = $kiloMeter * 10 * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Meter ";
    }

    public function kilometerKeDesimeter($kiloMeter)
    {
        $hasil = $kiloMeter * 10 * 10 * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Desimeter";
    }

    public function kilometerKeCentimeter($kiloMeter)
    {
        $hasil = $kiloMeter * 10 * 10 * 10 * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Centimeter";
    }

    public function kilometerKeMilimeter($kiloMeter)
    {
        $hasil = $kiloMeter * 10 * 10 * 10 * 10 * 10 * 10;
        echo " $kiloMeter " . " Kilometer = " . $hasil . " Milimeter";
    }

    public function tidakMemilih()
    {
        echo 'Anda tidak memilih';
    }

    public function hitungKonversi($pilih, $kiloMeter)
    {
        switch ($pilih) {
            case 'kilometer ke hektometer':
                $this->kilometerKeHektometer($kiloMeter);
                break;
            case 'kilometer ke dekameter':
                $this->kilometerKeDekameter($kiloMeter);
                break;
            case "kilometer ke meter":
                $this->kilometerKeMeter($kiloMeter);
                break;
            case "kilometer ke desimeter":
                $this->kilometerKeDesimeter($kiloMeter);
                break;
            case "kilometer ke centimeter":
                $this->kilometerKeCentimeter($kiloMeter);
                break;
            case "kilometer ke milimeter":
                $this->kilometerKeMilimeter($kiloMeter);
                break;
            default:
                $this->tidakMemilih($kiloMeter);
        }
    }
}

$kiloMeter = 5;
$pilih = new KonversiSatuanPanjang();
$pilih->hitungKonversi('kilometer ke hektometer', $kiloMeter);
