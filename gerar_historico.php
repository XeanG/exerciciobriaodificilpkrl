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
$sql = "SELECT d.id, d.nome_cartucho_cd, d.ano, d.sistema, d.dia, u.nome_completo FROM deletados d INNER JOIN usuarios u ON d.id_usuario = u.id ORDER BY d.dia ASC";
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
  <title>Histórico de Exclusão</title>
  </head>
  <body>";
// Checa se há algum resultado
if ($result->num_rows > 0) {
  // Exibe cada cartucho em uma tabela
  $htmlpdf .= "<table class='table table-bordered' style='margin-bottom: 1rem; color: #212529; vertical-align: top; border-color: #dee2e6; box-sizing: border-box;'>
          <thead style='vertical-align: bottom; border-color: inherit; border-style: solid; border-width: 1px; display: table-header-group; color: #212529;'>
            <tr class='table-dark' style='border-width: 1px 1px; color: #fff; border-color: #373b3e; display: table-row; vertical-align: inherit; text-indent: initial; border-spacing: 2px;'>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>ID</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Cartucho/CD</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Ano</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Sistema</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Usuário</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Data de exclusão</th>
            </tr>
          </thead>
          <tbody style='display: table-row-group; color: #212529; text-indent: initial; border-spacing: 2px;'>";
  while ($row = $result->fetch_assoc()) {
    $htmlpdf .= "<tr class='table-dark' style='border-width: 1px 1px; border-color: #373b3e; display: table-row; vertical-align: inherit; text-indent: initial; border-spacing: 2px;'><th scope='row' style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["id"] . "</th><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["nome_cartucho_cd"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["ano"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["sistema"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["nome_completo"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["dia"] . "</td></tr>";
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
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
