<?php
include "db.php";
$cliente = $_POST['cliente'];
$conn->query("INSERT INTO clientes (nombre) VALUES ('$cliente')");
$cliente_id = $conn->insert_id;

$conn->query("INSERT INTO pedidos (
cliente_id, media_libra_genovesa, media_libra_frutas, media_libra_chocolate,
dos_libras_genovesa, dos_libras_frutas, dos_libras_chocolate,
cinco_libras_genovesa, cinco_libras_frutas, cinco_libras_chocolate
) VALUES (
$cliente_id,
{$_POST['ml_gen']},{$_POST['ml_fru']},{$_POST['ml_cho']},
{$_POST['dl_gen']},{$_POST['dl_fru']},{$_POST['dl_cho']},
{$_POST['cl_gen']},{$_POST['cl_fru']},{$_POST['cl_cho']}
)");
header("Location: pedidos.php");
?>