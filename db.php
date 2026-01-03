<?php
$conn = new mysqli("sql112.infinityfree.com", "if0_40818227", "1118289563", "if0_40818227_capi1212");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>