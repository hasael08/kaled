<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $codigo =$_POST['codigo'];
   $descripcion =$_POST['descripcion'];
   $nombre =$_POST['nombre'];
   $proveedor=$_POST['proveedor'];
   $preciocompra=$_POST['preciocompra'];
   $precioventa=$_POST['precioventa'];
   $categoria=$_POST['categoria'];
   $stock=$_POST['stock'];
   echo "Registro"."</br>";
   echo  "Codigo= ".$codigo."</br>";
   echo "Descripcion= ".$descripcion."</br>";
   echo "Nombre= ".$nombre."</br>";
   echo "Proveedor= ".$proveedor."</br>";
   echo "Precio de compra= ".$preciocompra."</br>";
   echo "Precio de venta=".$precioventa."</br>";
   echo "Categoria= ".$categoria."</br>";
   echo "Stock= ".$stock."</br>";
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div>
    <h1>Registro de productos</h1>
    <form action="formu.php" method="post">
        <input type="text" name="codigo" placeholder="Codigo"> <input type="text" name="descripcion" placeholder="Descripcion">
        <p><input type="text" name="nombre" placeholder="Nombre"> <input type="text" name="proveedor" placeholder="proveedor"></p>
        <p><input type="text" name="preciocompra" placeholder="Precio de Compra"> <input type="text" name="precioventa" placeholder="Precio de Venta"></p>
        <p><select name="categoria" id="categoria">
            <option value="Frutas">Frutas</option>
            <option value="Verduras">Verduras</option>
            <option value="Verduras">Verduras</option>
        </select> <input type="text" name="stock" placeholder="Stock"></p>
        <br/> <input type="submit" value="Registrar">
    </form>
    </div>
</body>
</html>