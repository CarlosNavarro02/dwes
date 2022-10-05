<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de chequeo de credenciales</h1>
    <?php
        if(isset($_GET['envio'])) {
         if(!empty($_GET['nombreusu'])) {
            $usuario = $_GET['nombreusu'];
            echo "<br> Usuario introducido :" . $usuario;
        }else {
            echo "<br> No has introducido ningun usuario";
            }
        }
        if(isset($_GET['envio'])) {
            if(!empty($_GET['passwd'])) {
                $pass = $_GET['passwd'];
                echo "<br> Usuario introducido :" . $pass;
            }else {
                echo "<br> No has introducido ninguna contraseña";
            }
        }
        if(isset($_GET['envio'])) {
            if(!empty($_GET['asignaturas'])) {
                $asiganturas = $_GET['asignaturas'];
                foreach ($asignaturas as $asignatura) {
                    echo "<br> Tu lenguaje de programacion es : " . $asignatura;
                }
            }else {
                echo "<br> No te gusta la programacion";
            }
        }
        if(isset($_GET["envio"])) {
            if(!empty($_GET["equipo"])) {
                $equipo = $_GET["equipo"];
                echo "<br> Equipo introducido : " . $equipo;
            }else {
                echo "<br> No has introducido ningun equipo";
            }
        }
        if(isset($_GET['envio'])){
            if(!empty($_GET['menus'])) {
                $menus = $_GET['menus'];
                foreach ($menus as $menus) {
                    echo "<br> Has introducio estos menus : " . $menus;
                }
            }else {
                echo "<br> No has introducido ninguna menu";
            }
        }
            
        
       
        
        
    ?>
</body>
</html>