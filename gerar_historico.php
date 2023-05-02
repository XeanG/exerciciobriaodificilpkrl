<?php
session_start();
if (!isset($_SESSION['username']) == true || $_SESSION["admin"] == 0) {
  session_destroy();
  header('location:index.php');
}

require './vendor/autoload.php';
require 'vars_functions.php';

$id_usuario = $_SESSION['id'];
$adm = $_SESSION['admin'];

header('Content-Type: text/html; charset=UTF-8');

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_regex_encoding('UTF-8');

$conn = new mysqli('localhost', 'root', '', 'AHAHAHABORGES');
$sql = "SELECT d.id, d.nome_cartucho_cd, d.ano, d.sistema, d.dia, u.nome_completo FROM deletados d INNER JOIN usuarios u ON d.id_usuario = u.id ORDER BY d.id";
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
  <title>Cartuchos</title>
  </head>
  <body>";
// Checa se há algum resultado
if ($result->num_rows > 0) {
  // Exibe cada cartucho em uma tabela
  $htmlpdf .= "<table class='table table-bordered'>
          <thead>
            <tr class='table-dark'>
              <th scope='col'>ID</th>
              <th scope='col'>Nome do cartucho/CD</th>
              <th scope='col'>Ano</th>
              <th scope='col'>Sistema</th>
              <th scope='col'>Usuário</th>
              <th scope='col'>Data de exclusão</th>
            </tr>
          </thead>
          <tbody>";
  while ($row = $result->fetch_assoc()) {
    $htmlpdf .= "<tr><th scope='row'>" . $row["id"] . "</th><td>" . $row["nome_cartucho_cd"] . "</td><td>" . $row["ano"] . "</td><td>" . $row["sistema"] . "</td><td>" . $row["nome_completo"] . "</td><td>" . $row["dia"] . "</td></tr>";
  }
  $htmlpdf .= "</tbody></table></body></html>";
} else {
  $htmlpdf .= "<h3 class='text-center'>Nenhum cartucho encontrado.</h3></body></html>";
}

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($htmlpdf);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream();
