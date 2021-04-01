<?php
//$name_anonce=$_POST['nom_annonce'];
//$description_anonce=$_POST['description_annonce'];
//$prix_anonce=$_POST['prix_annonce'];
//$region_anonce=$_POST['region_annonce'];


// reference the Dompdf namespace
//require_once  '../vendor/autoload.php' ;


// référence l'espace de noms
use  Dompdf\Dompdf ;

// Template to pdf
ob_start();
require_once  '../views/viewToPdf.php' ;

require_once  '../vendor/dompdf/autoload.inc.php' ;

$templatePdf = ob_get_clean();

class Pdf{

    public function CreatePdf(){
        // instanciez et utilisez la classe dompdf
        $dompdf = new Dompdf ();
        $dompdf -> loadHtml ('Hello');

        // (Facultatif) Configurez le format et l'orientation du papier
        $dompdf -> setPaper ( 'A4' , 'landscape' );

        // Rend le HTML au format PDF
        $dompdf -> render ();

        // Sortie du PDF généré dans le navigateur
        $dompdf ->stream ();

    }



}