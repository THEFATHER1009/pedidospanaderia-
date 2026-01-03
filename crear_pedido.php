<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head><title>Nuevo Pedido</title></head>
<body>
<h2>Nuevo Pedido</h2>
<form action="guardar_pedido.php" method="POST">
Cliente: <input type="text" name="cliente" required><br><br>
<h3>Media Libra</h3>
Genovesa <input type="number" name="ml_gen" value="0">
Frutas <input type="number" name="ml_fru" value="0">
Chocolate <input type="number" name="ml_cho" value="0">
<h3>Dos Libras</h3>
Genovesa <input type="number" name="dl_gen" value="0">
Frutas <input type="number" name="dl_fru" value="0">
Chocolate <input type="number" name="dl_cho" value="0">
<h3>Cinco Libras</h3>
Genovesa <input type="number" name="cl_gen" value="0">
Frutas <input type="number" name="cl_fru" value="0">
Chocolate <input type="number" name="cl_cho" value="0"><br><br>
<button type="submit">Guardar</button>
</form>
</body>
</html>