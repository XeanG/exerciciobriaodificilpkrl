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

function deletesistema($id)
{
  $delete = "window.location.href = 'delete_sistema.php?id=" . $id . "'";
  $string = 'onclick="' . $delete . '"';
  return $string;
}

function updatesistema($id)
{
  $update = "window.location.href = 'update_sistema.php?id=" . $id . "'";
  $string = 'onclick="' . $update . '"';
  return $string;
}

$id_usuario = $_SESSION['id'];
$adm = $_SESSION['admin'];