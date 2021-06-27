<?php
session_start();

$Mensaje = "";
$Redirect = false;

if ($_POST) {
    $archivo = 'registro.js';
    $json = file_get_contents($archivo);
    $usuarios = json_decode($json, true);

    if (isset($usuarios) && !empty($usuarios)) {
    foreach($usuarios as $Usuario) {
        if ($Usuario['Mail'] == $_POST['Username'] && $Usuario['Pass'] == $_POST['Password']) {
            $Redirect = true;
            break;
        }
    }}

    if ($Redirect) {
 		header("Location: index.php".$_POST['Mail']);
    } else {
        $Mensaje = "Usuario o contraseña incorrecto.<br />";
    }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML lang="en">
<HEAD>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- Google font --><link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>SUV: Back-End</title>
</HEAD>
<BODY>
<DIV class="cont">

    <DIV class="APP">
    <h1>Lenguajes de programación Back End</h1>
    <p>Aplicación para administración de imágenes en línea.</p>

    <DIV class="actividad">
        <!-- FORMULARIO -->
		<h4>Ingresa tus datos para iniciar sesión</h4>
		<form method="post" name="Login_Form">
			<label for="">Usuario</label><br>
			<input name="Username" type="email" placeholder="Ingresa tu correo electrónico" class="form"><br>
			<label for="">Contraseña</label><br>
			<input name="Password" type="password" class="form" placeholder="Ingresa tu contraseña"><br>
			<br>
			<input type="submit" value="Login" class="button">
			<p class="error"><?php echo $Mensaje; ?></p>
		</form>
		
		<p>¿Aún no tienes cuenta? <a href="registro.php">Regístrate aquí</a>.</p>
 <!-- Termina div "actividad" -->
 </DIV>

 <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
 <b>Código: </b>394485606<br/>
 <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
 <b>Última modificación: </b>24 de junio 2021</p>

 <!-- Termina div "APP" -->
 </DIV>

<!-- Termina div "cont" -->
</DIV>

</BODY>
</HTML>