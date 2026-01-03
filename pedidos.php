<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head><title>Pedidos</title></head>
<body>
<h2>Pedidos</h2>
<table border="1">
<tr><th>Cliente</th><th>Estado</th><th>Fecha</th></tr>
<?php
$res = $conn->query("SELECT pedidos.*, clientes.nombre FROM pedidos JOIN clientes ON pedidos.cliente_id=clientes.id");
while($r=$res->fetch_assoc()){
echo "<tr><td>{$r['nombre']}</td><td>{$r['estado']}</td><td>{$r['fecha']}</td></tr>";
}
?>
</table>
</body>
</html>