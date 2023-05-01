<?php

require './vendor/autoload.php';

header('Content-Type: text/html; charset=UTF-8');

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_regex_encoding('UTF-8');

$conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');
$sql = "SELECT c.id, c.nome_cartucho_cd, c.ano, c.sistema, u.nome_completo FROM cartuchos c INNER JOIN usuarios u ON c.id_usuario = u.id ORDER BY c.id";
$result = $conn->query($sql);
$htmlpdf = "<!DOCTYPE html>
<html lang='pt-BR'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css'>
  <link rel='stylesheet' href='/css/style.css'>
</head>
<body>
<table class='table table-bordered'>
<thead>
  <tr class='table-dark'>
    <th scope='col'>ID</th>
    <th scope='col'>Nome do cartucho/CD</th>
    <th scope='col'>Ano</th>
    <th scope='col'>Sistema</th>
    <th scope='col'>Tela</th>
  </tr>
</thead>
<tbody>";
while ($row = $result->fetch_assoc()) {
  $htmlpdf .= "<tr><th scope='row'>" . $row["id"] . "</th><td>" . $row["nome_cartucho_cd"] . "</td><td>" . $row["ano"] . "</td><td>" . $row["sistema"] . "</td><td><a href='exibir_imagem.php?id=" . $row["id"] . "'>Ver</a></td><td>" . $row["nome_completo"] . "</td></tr>";
}
$htmlpdf .= "</body></html>";

use Dompdf\Dompdf;

$dompdf = new Dompdf(['enable_remote' => true]);
$dompdf->loadHtml($htmlpdf);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream();
