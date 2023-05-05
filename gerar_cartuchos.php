<?php
session_start();
if (!isset($_SESSION['username']) == true) {
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
$sql = "SELECT c.id, c.nome_cartucho_cd, c.ano, c.sistema, u.nome_completo FROM cartuchos c INNER JOIN usuarios u ON c.id_usuario = u.id ORDER BY c.id";
if ($adm != '1') {
  $sql = "SELECT c.id, c.nome_cartucho_cd, c.ano, c.sistema FROM cartuchos c INNER JOIN usuarios u ON c.id_usuario = u.id WHERE u.id = '$id_usuario' ORDER BY c.id";
}
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
if ($adm != '1') {
  $htmlpdf .= "<table class='table table-bordered' style='margin-bottom: 1rem; color: #212529; vertical-align: top; border-color: #dee2e6; box-sizing: border-box;'>
        <thead style='vertical-align: bottom; border-color: inherit; border-style: solid; border-width: 1px; display: table-header-group; color: #212529;'>
          <tr class='table-dark' style='border-width: 1px 1px; color: #fff; border-color: #373b3e; display: table-row; vertical-align: inherit; text-indent: initial; border-spacing: 2px;'>
            <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>ID</th>
            <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Cartucho/CD</th>
            <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Ano</th>
            <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Sistema</th>
            <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Tela</th>
          </tr>
        </thead>
        <tbody>";
} else {
  $htmlpdf .= "<table class='table table-bordered' style='margin-bottom: 1rem; color: #212529; vertical-align: top; border-color: #dee2e6; box-sizing: border-box;'>
          <thead style='vertical-align: bottom; border-color: inherit; border-style: solid; border-width: 1px; display: table-header-group; color: #212529;'>
            <tr class='table-dark' style='border-width: 1px 1px; color: #fff; border-color: #373b3e; display: table-row; vertical-align: inherit; text-indent: initial; border-spacing: 2px;'>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>ID</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Cartucho/CD</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Ano</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Sistema</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Tela</th>
              <th scope='col' style='background-color: #212529; color: #fff; border-width: 1px 1px; padding: 0.5rem 0.5rem;'>Usuário</th>
            </tr>
          </thead>
          <tbody>";
}
while ($row = $result->fetch_assoc()) {
  if ($adm != '1') {
    $htmlpdf .= "<tr class='table-dark' style='border-width: 1px 1px; border-color: #373b3e; display: table-row; vertical-align: inherit; text-indent: initial; border-spacing: 2px;'><th scope='row' style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["id"] . "</th><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["nome_cartucho_cd"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["ano"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["sistema"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'><a href='exibir_imagem.php?id=" . $row["id"] . "'>Ver</a></td></tr>";
  } else {
    $htmlpdf .= "<tr class='table-dark' style='border-width: 1px 1px; border-color: #373b3e; display: table-row; vertical-align: inherit; text-indent: initial; border-spacing: 2px;'><th scope='row' style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["id"] . "</th><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["nome_cartucho_cd"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["ano"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["sistema"] . "</td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'><a href='exibir_imagem.php?id=" . $row["id"] . "'>Ver</a></td><td style='border-width: 1px 1px; padding: 0.5rem 0.5rem;'>" . $row["nome_completo"] . "</td></tr>";
  }
}
$htmlpdf .= "</tbody></table></body></html>";

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($htmlpdf);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$output = $dompdf->output();
file_put_contents("Cartuchos.pdf", $output);
die("<script>
  location.href = 'mostrar_cartuchos.php';
  window.open('Cartuchos.pdf', '_blank').focus();
</script>");
