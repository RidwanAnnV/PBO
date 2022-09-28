<?php
// buat class laptop
class Obat {
  
   private $pemilik = "Rahmat";
   private $merk = "Panadol";
   
   public function __construct(){
     //echo "Ini berasal dari Constructor Laptop";

   }
  
   public function beliObat(){
     return "$this->pemilik Beli Obat $this->merk ";
  
   }
   public function __destruct(){
     //echo "Ini berasal dari Destructor Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
 $Obat= new Obat();
  
echo "<br />";
echo $Obat->beliObat();
echo "<br />";
?>