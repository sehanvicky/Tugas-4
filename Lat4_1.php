<?php
//class mobil
Class Mobil{
public $nama;
public $merk;
function getInfo(){
echo "Nama mobil: ".$this->nama."<br/>";
echo "Merk: ".$this->merk."<br/>";
}
}
//bagian main
$ferari=new Mobil();
$ferari->nama="BMW";
$ferari->merk="im7";
$ferari->getInfo();
?>