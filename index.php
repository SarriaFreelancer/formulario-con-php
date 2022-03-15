<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<main class="contenedor centrar-texto">
        <h2 class="centrar-texto parrafo">Este es un Formulario para realizar operaciones matematicas</h2>

        <div class="contacto-bg"> </div>
    <h2>Mostrar el Resultado</h2>
    <?php
        $base = $_REQUEST['base'];
        $altura = $_REQUEST['altura'];
        //Resultado 
        $area = $base * $altura;
    echo 'El Area del Triangulo es: '.$area;
            
    ?>
    <br><br>
    <a class="boton boton--primario" href="index.html">Volver</a>
    </main>
    <footer>
    <h4 class="food centrar-texto" >sarriafreelancer7@gmail.com</h4></footer>
    
</body>
</html>