
<?php
ob_start();
require_once './tcpdf/tcpdf.php';

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator("Wael Salah");
$pdf->SetAuthor('Wael Salah');
$pdf->SetTitle('Demonstrating pdf with php');
 
$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0, 6, 255), array(0, 64, 128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));
 
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
 
// set default font subsetting mode
$pdf->setFont('dejavusans', '', 14, '', true);

$pdf->AddPage();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pdf generation</title>
    <style>
        *
        {
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>
<body>

<?php
    $html = <<<EOD
    <h1 style="text-decoration:none;background-color:#CC0000;color:black;">Demonstrating pdf with php</h1>
    <p>In this simple example</p>
    EOD;
    // echo $html;
    $pdf->writeHTML($html);
    echo __DIR__;
    $pdf->Output(__DIR__ . '/test.pdf', 'F');

?>
    <?php echo 'hwfejw' ?>
</body>
</html>