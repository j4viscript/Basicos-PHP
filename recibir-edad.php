<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    if($_REQUEST["edad"] >= "18")
    {
        echo "Tu edad es ".$_REQUEST["edad"]." años y cumples con la edad para conducir";
    }
    else{
        echo "Tu edad es ".$_REQUEST["edad"]." aun eres muy pequeño para conducir";
    }

    ?>

    <h4>Ingresa tu promedio general del ultimo semestre</h4>
    <form method="post" action="recibir-calificaciones.php">
			<input type="text" name="promedio">
			<input type="submit" value="enviar">
		</form>
</body>
</html>