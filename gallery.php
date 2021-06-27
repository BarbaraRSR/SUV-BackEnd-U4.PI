<?php
    session_start();
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

        <h3>Subir archivo</h3>
		<!-- FORMULARIO -->
        <form method="POST" action="estatus.php" enctype="multipart/form-data">
        <input type="file" name="archivo" class="form">

        <button type="submit" name="upload" class="button">Subir</button>
        </form>

		<h3>Galería</h3>
         <div class="gallery">
         <?php
         foreach (glob("uploads/*.*") as $filename) {
          echo "<div class='uno'><img src='$filename'><br><a href='delete.php?file=$filename'>Eliminar</a></div>";
         }
         ?>
         </div>

 <!-- Termina div "actividad" -->
 </DIV>
 <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>

 <!-- Termina div "APP" -->
 </DIV>


<!-- Termina div "cont" -->
</DIV>

</BODY>
</HTML>