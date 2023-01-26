<?php

require_once './vendor/autoload.php';


$faker = Faker\Factory ::create();
use Dompdf\Dompdf;


$dompdf = new Dompdf();

$html = "INI COMPOSTER <h1> GG </h1>";
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$dompdf->stream();

?>