<?php

require 'vendor/autoload.php';
/*include_once './mostrar_cartuchos.php';*/
$conn = new mysqli('localhost', 'root', 'mysqluser', 'AHAHAHABORGES');
$query = ('SELECT id, nome_cartucho_cd, ano, sistema, id_usuario FROM cartuchos'); 
$resultado = $conn->query($query);
$htmlpdf='';
while($row_usuario = $resultado->fetch_assoc()){
    $htmlpdf.='<h1>'.$row_usuario["nome_cartucho_cd"].'</h1>';
    $htmlpdf.='<h1>'.$row_usuario["ano"].'</h1>';
    $htmlpdf.='<h1>'.$row_usuario["sistema"].'</h1>';
    $htmlpdf.='<h1>'.$row_usuario["id_usuario"].'</h1>';
}


use Dompdf\Dompdf;
$dompdf = new Dompdf(['enable_remote' => true ]);
$dompdf->loadHtml($htmlpdf);
$dompdf->setPaper('A4','portrait');
$dompdf->render();
$dompdf->stream();


?>