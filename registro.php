<?php 

if ($_POST) {

    if (isset($_POST['cerrar']) && $_POST['cerrar'] == "Eliminar") {
        $archivo = 'registro.js';
        $json = file_get_contents($archivo);
        $usuarios = json_decode($json, true);

        foreach($usuarios as $key => $usuario) {
            if ($usuario['Mail'] == $_POST['Mail']) {
                unset($usuarios[$key]);
            }
        }

        file_put_contents($archivo, "");
        file_put_contents($archivo, json_encode($usuarios));
        setcookie("time", "", time()-3600);
    }

    if (isset($_POST['Mail'])) {
        $usuario = array();
        $archivo = 'registro.js';
        $json = file_get_contents($archivo);
        $usuario = json_decode($json, true);
        setcookie("time", "", time()-3600);

        if (!(isset($_COOKIE['time']))) {
            setcookie("time", time(), time()+30*86400);
        } 
        $usuario[] = array(
            "Nombre" => $_POST['Nombre'],
            "Mail" => $_POST['Mail'],
            "Pass" => $_POST['Pass'],
            "Fecha" => $_POST['Fecha'],
            "Semana" => $_POST['Semana'],
        );

        $json = json_encode($usuario);
        $archivo = "registro.js";
        file_put_contents($archivo,$json);

        header("Location: index.php?Mail=".$_POST['Mail']);
    }

}

?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
    <meta charset="utf-8">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>SUV: Back-End</title>
</HEAD>
<BODY>
<DIV class="cont">
 <DIV class="APP">
 <h1>Lenguajes de programación Back End</h1>
 <p>Registra una nueva cuenta para ingresar a la aplicación para administración de imágenes en línea.</p>

    <DIV class="actividad">
        <h3>Crear una nueva cuenta.</h3>
         
         <!-- FORMULARIO -->
          <form method="POST">
           <p>Nombre:<br>
            <input name="Nombre" type="text" placeholder="Ingresa tu nombre o un alias" class="form"></p>
           <p>Correo electrónico:<br>
            <input name="Mail" type="text" placeholder="Es el que usarás para iniciar sesión" class="form"></p>
           <p>Fecha de nacimiento:<br>
            <input name="Fecha" type="date" placeholder="Ingresa tu fecha de nacimiento" class="form"></p>
           <p>Día favorito de la semana:<br>
            <select name="Semana" class="form">
             <option></option>
             <option>Lunes</option>
             <option>Martes</option>
             <option>Miércoles</option>
             <option>Jueves</option>
             <option>Viernes</option>
             <option>Sábado</option>
             <option>Domingo</option>
            </select></p>
           <p>Constraseña:<br>
            <input name="Pass" type="Password" placeholder="Elige una contraseña" class="form"></p>
            <input type="submit" value="ENVIAR" class="button">
          </form>

 <!-- Termina div "actividad" -->
 </DIV>


 <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
 <b>Código: </b>394485606<br/>
 <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
 <b>Última modificación: </b>21 de junio 2021</p>

 <!-- Termina div "APP" -->
 </DIV>


<!-- Termina div "cont" -->
</DIV>

</BODY>
</HTML>