<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center><h1>YOKOSO</h1></center>



<?php

class Obat{

    private $penjual = 'Ridwan';
    private $obat = 'Paramex';
    private $harga = '10.000.000.000.000';
    private $pembeli = 'Person';
    private $tanggal = '22-2-2022';

    public function __construct()
    {
        
    }

    public function BeliObat(){
        return "<center><h3> $this->penjual <br> Menjual $this->obat </br> kepada $this->pembeli <br> seharga $this->harga </br>tanggal<br>$this->tanggal</h3></br></center>";
    }

    public function __destruct()
    {
        
    }
}
$Obat= new Obat();
  
echo "<br />";
echo $Obat->beliObat();
echo "<br />";
?>
<body>
    <center><h1>TOKO OBAT TERLARANG</h1></center>
</body>
</html>