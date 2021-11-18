<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/styles-recibir-nombre.css">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo "Bienvenido ".$_REQUEST["nombre"]."!!";?>
    </h1>
    <span>Ingresa tu edad</span>
    <br>
    <form method="post" action="recibir-edad.php">
			<input type="text" name="edad">
			<input type="submit" value="enviar">
    </form>
</body>
</html>
  