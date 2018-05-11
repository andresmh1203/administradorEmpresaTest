<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Usuario</title>
    <link rel="stylesheet" type="text/css" href="./css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="./css/estilo-v3.3-panel-control.css"/>
</head>
<body>
    <div id="conenedor">
        <div class="barra-herramientas">
            <div id="volver-mapa"> 
                <img src="icon/icons8-go-back-16.png" alt="volver-icono" id="volver-icono">
            </div>
            
        </div><!--.barra-herramientas-->
        <img src="icon/icons8-user-male-30.png" alt="icono-user"><br>
        <h1>Panel Usuario</h1>
        <form method="post" id="formulario-uptade-usuario">

        </form>
    </div>


    <footer role="contentinfo">
        <div id="creditos">
            <label for="icons8">Iconos:</label>&nbsp;
            <a href="https://icons8.com" id="icons8" target="_blank">Icon pack by Icons8.</a>
        </div>
    </footer>

    <script>
    
        //*************** Funciones Varias ******************
        document.getElementById('volver-mapa').addEventListener('click', function (){
            window.open ('geolocalizacion-v4.3.php', '_self');
        });

    </script>
</body>
</html>