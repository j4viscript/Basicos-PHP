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
    
        echo "Tu promedio es: ".$_REQUEST['promedio']." ";
        
        if($_REQUEST['promedio'] >= 0 && $_REQUEST['promedio'] <= 30 ){

            echo"Muy deficiente!";
        }
        if($_REQUEST['promedio'] > 30 && $_REQUEST['promedio'] <= 50  ){

            echo"Insuficiente!";
        }
        if($_REQUEST['promedio'] > 50 && $_REQUEST['promedio'] <= 60  ){

            echo"Suficiente!";
        }
        if($_REQUEST['promedio'] > 60 && $_REQUEST['promedio'] <= 70  ){

            echo"Bien!";
        }
        if($_REQUEST['promedio'] > 80 && $_REQUEST['promedio'] <= 90  ){

            echo"Notable!";
        }
        if($_REQUEST['promedio'] > 90 && $_REQUEST['promedio'] <= 100  ){

            echo"Sobresaliente!";
        }
        else if($_REQUEST['promedio'] > 100 || $_REQUEST['promedio'] < 0 ){
            echo"Error!!!";
        }


        ?>
        <h2>Por favor dale siguiente</h1>
		<form method="post" action="calificaciones.php">
			<input type="submit" value="Siguiente">
		</form>
</body>
</html>