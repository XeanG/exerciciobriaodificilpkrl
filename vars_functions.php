<?php
function onclickdelete($id)
{
  $delete = "window.location.href = 'delete.php?id=" . $id . "'";
  $string = 'onclick="' . $delete . '"';
  return $string;
}

function onclickupdate($id)
{
  $update = "window.location.href = 'update.php?id=" . $id . "'";
  $string = 'onclick="' . $update . '"';
  return $string;
}

$id_usuario = $_SESSION['id'];
$adm = $_SESSION['admin'];