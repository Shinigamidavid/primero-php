<?php
	session_start();
	if(isset($_SESSION['nombre']));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Interfaz Cliente</title>
	<link rel="stylesheet" type="text/css" href="css/estilos_interfazUsuarios.css">
</head>
<body>
	<header>
		<h1>Cliente</h1>
		<p class="text-light p-4"><?php echo $_SESSION['nombre'];?></p>
	</header>
	<nav>Barra de Menu</nav>
	<section>
		<article class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</article>
		<article class="texto" >
			<h3>Título</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
		<article >
			<img class="imagen" src="img/imagen1.jpg">
		</article>
	</section>
	<aside>
		<ol class="menu">
			<li><a href="InterfazAdmin.html">Opción1</a></li>
			<li><a href="">Opción2</a></li>
			<li><a href="">Opción3</a></li>
			<li><a href="">Opción4</a></li>
			<a href="cerrar_sesion.php">Cerrar Sesión</a>
		</ol>
	</aside>
	<footer id="piepag">
		<h2>Información Institucional</h2>
	</footer>
</body>
</html>

<hr>



<hr>
<?php
session_start();
if (isset($_SESSION['nombre']));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz Cliente</title>
    <link rel="stylesheet" href="css/Estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <header>
        <h1>Cliente</h1>
        <p class="text-light p-4"><?php echo $_SESSION['nombre']; ?></p>
    </header>
    <nav>Barra de Menu</nav>
    <section>
        <article class="texto">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Numquam quia ab tempore repudiandae odio provident doloremque necessitatibus eos? Cumque,
            laboriosam temporibus ducimus nihil consectetur eaque neque quia odio quis illum.</article>
    </section>





    <h2>Estan todas tus plantas?</h2>
    <h2>Materas</h2>
    <h1 id="inicio">Introduccion a semilleros</h1>

    <p>
    <pre>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi aut, porro dolor exercitationem, saepe, ducimus nulla rerum quisquam unde minima nobis perspiciatis facere ut explicabo obcaecati voluptatibus necessitatibus temporibus at.</pre>
    </p>
    <hr>
    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b> Sequi voluptate voluptatem vel. Esse excepturi sit, expedita mollitia reprehenderit totam pariatur optio eum <strong>tempora quos dolor atque ipsa magni. Voluptate, unde?</strong></p>
    <p><i>You feel that, right? (Good energy, good energy)</i></p>
    <p>You feel that energy? <mark>(Good energy, good energy)</mark></p>
    <a href="interfaz1.html" target="_blank">Ir pagina interfaz 1</a>
    <br>
    <br>
    <a href="formulario.html">
        <img src="/img/2081adef99a3ae1ee9fee04826997b6f.gif" alt="se perdio la imagen" width="300px" , height="200px">
        <br>
        <a href="mailto:jdavid.martin2581@gmail.com?subject:Vamos a cotizar"> Enviar correo</a><br>

        <button onclick="document.location='formulario.html'">Registrarse</button>
        <br>
        <a href="#inicio">volver a inicio</a>
        <br>
        <a href="interfaz1.html#admin">Administrador</a>
</body>
</body>

</html>