<?php

// reference the Dompdf namespace
use Dompdf\Dompdf;

require __DIR__ . "/vendor/autoload.php";

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml("<h1>Olá Mundo!</h1><p>Esse é o meu primeiro pdf!</p>");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("file.pdf", ["Attachment" => false]);
