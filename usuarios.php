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

   <!-- MENÚ DE NAVEGACIÓN -->
   <DIV class="menu">
    <ul>
	  <li><a href="index.php">Inicio</a></li>
	  <li><a href="gallery.php">Galería</a></li>
	  <li><a href="usuarios.php">Usuarios</a></li>
	  <li><a href="logout.php">Salir</a></li>
    </ul>
  </DIV>


    <DIV class="actividad">
      <h3>Listado de usuarios</h3>
      
      <?php
	  $archivo = 'registro.js';
	  $json = file_get_contents($archivo);
	  $usuarios = json_decode($json, true);
	  
	  if (isset($usuarios) && !empty($usuarios)) {

		echo "<a href='file-word.php'>Exportar a Word</a>   ";
		echo "<a href='file-excel.php'>Exportar a Excel</a>  ";
		echo "<a href='file-pdf.php'>Exportar a PDF</a>  ";
		echo "<br /> <br />";

		foreach($usuarios as $Usuario) {
			echo "Nombre: " . $Usuario['Nombre'] . "<br />";
			echo "Correo: " .$Usuario['Mail'] . "<br />";
			echo "Fecha de nacimiento: " .$Usuario['Fecha'] . "<br />";
			echo "Día favorito de la semana: " .$Usuario['Semana'] . "<br /><br />";
		}
    
		} else {
		echo "No hay datos.";
		}

		?>

      <br>
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