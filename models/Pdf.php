<?php
$name_anonce=$_POST['nom_annonce'];
//$description_anonce=$_POST['description_annonce'];
//$prix_anonce=$_POST['prix_annonce'];
//$region_anonce=$_POST['region_annonce'];


// reference the Dompdf namespace
use Dompdf\Dompdf;
require_once '../vendor/autoload.php';

class Pdf{

    public function CreatePdf(){

        // instantiate and use the dompdf class
                $dompdf = new Dompdf();
                $dompdf->loadHtml("hello world");

        // (Optional) Setup the paper size and orientation
                $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
                $dompdf->render();

        // Output the generated PDF to Browser
                $dompdf->stream();


    }



}