<?php

class kendaraan {
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
    var $model;

    function statusHarga()
    {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
    function setMerek($x)
    {
        $this->merek = $x;
    }
    function setHarga($x)
    {
        $this->harga = $x;
    }
    function setModel($x)
    {
        $this->model = $x;
    }
    function bacaMerek()
    {
        return $this->merek;
    }
     function bacaHarga()
     {
        return $this->harga;
     }
     function bacaModel()
     {
        return $this->model;
     }
}
echo"<pre>";
$kendaraan1 = new kendaraan();
$kendaraan1->setMerek ("Toyota Supra MK5");
$kendaraan1->setHarga (100000000000000);
$kendaraan1->setModel("JDM");
echo 'Harga dari '. $kendaraan1->bacaMerek().' model '.$kendaraan1->bacaModel().' adalah Rp '.$kendaraan1->bacaHarga();

echo"<pre>";

$kendaraan2 = new kendaraan();
$kendaraan2->setMerek ("Bmw M4 COUPE");
$kendaraan2->setHarga (50000000000000);
$kendaraan2->setModel ("EDM");
echo 'Harga dari '. $kendaraan2->bacaMerek().' model '.$kendaraan2->bacaModel().' adalah Rp'.$kendaraan2->bacaHarga();

echo"<pre>";

$kendaraan3 = new kendaraan();
$kendaraan3->setMerek ("Subara BRZ");
$kendaraan3->setHarga (4000000000000);
$kendaraan3->setModel ("JDM");
echo 'Harga dari '. $kendaraan3->bacaMerek().' model '.$kendaraan3->bacaModel().' adalah Rp '.$kendaraan3->bacaHarga();
?>
