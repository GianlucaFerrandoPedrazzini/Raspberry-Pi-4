<?php

$servidor = "localhost";
$usuario = "postgres";
$clave = "tu_contraseña_de_PostgreSQL";
$bd = "keras_db";

$conexion = pg_connect("host=$servidor dbname=$bd user=$usuario password=$clave");

$traer = "SELECT * FROM visitas";

$sql = pg_query($conexion,$traer);

$visitas = pg_fetch_assoc($sql);

if(isset($_POST["boton"])){
    $suma = $visitas["cantidad"] + 1;
    $sumar = "UPDATE visitas SET cantidad = $suma WHERE cantidad = $visitas[cantidad]";
    pg_query($conexion,$sumar);

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Biblioteca Keras</title>

<link rel="stylesheet" href="estilos.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<form method = "POST">
    <button class="btn btn-primary" name="boton" type="submit">Página visitada</button>
</form>

<h1>Visitas: <?php echo $visitas["cantidad"]; ?></h1>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="#">Biblioteca Keras</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Abrir menú">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="#sobre">¿Qué es?</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#secciones">Componentes</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#desarrollo">Herramientas</a>
</li>

</ul>

</div>

</div>

</nav>



<section class="text-center p-5 bg-light">

<div class="container">

<h1>Keras</h1>

<p>
Biblioteca de alto nivel para crear redes neuronales y modelos de inteligencia artificial utilizando Python.
</p>

<a href="https://keras.io/" target="_blank" rel="noopener" class="btn btn-outline-danger me-2">
Visitar página oficial
</a>

<button class="btn btn-outline-danger" onclick="infoKeras()">
Información rápida
</button>

</div>

</section>



<section id="sobre" class="container mt-5">

<h2>¿Qué es Keras?</h2>

<p>
Keras es una biblioteca de aprendizaje profundo escrita en Python que permite construir
y entrenar redes neuronales de manera sencilla. Está diseñada para ser fácil de usar
y funciona sobre motores como TensorFlow.
</p>

<h3>Desarrolladores</h3>

<p>
Keras fue creada por François Chollet y actualmente es desarrollada y mantenida
principalmente por la comunidad de código abierto y el equipo de Google.
</p>

</section>



<section id="secciones" class="container mt-5">

<h2 class="mb-4">Componentes principales</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card h-100">
<div class="card-body">

<h5 class="card-title">Models</h5>

<ul>
<li>Sequential models</li>
<li>Functional API</li>
<li>Model subclassing</li>
</ul>

</div>
</div>
</div>


<div class="col-md-4">
<div class="card h-100">
<div class="card-body">

<h5 class="card-title">Layers</h5>

<ul>
<li>Dense layers</li>
<li>Convolutional layers</li>
<li>Pooling layers</li>
<li>Dropout</li>
</ul>

</div>
</div>
</div>


<div class="col-md-4">
<div class="card h-100">
<div class="card-body">

<h5 class="card-title">Optimizers</h5>

<ul>
<li>SGD</li>
<li>Adam</li>
<li>RMSprop</li>
<li>Adagrad</li>
</ul>

</div>
</div>
</div>


<div class="col-md-4">
<div class="card h-100">
<div class="card-body">

<h5 class="card-title">Loss Functions</h5>

<ul>
<li>Binary Crossentropy</li>
<li>Categorical Crossentropy</li>
<li>Mean Squared Error</li>
</ul>

</div>
</div>
</div>


<div class="col-md-4">
<div class="card h-100">
<div class="card-body">

<h5 class="card-title">Datasets</h5>

<ul>
<li>MNIST</li>
<li>CIFAR-10</li>
<li>IMDB</li>
<li>Boston Housing</li>
</ul>

</div>
</div>
</div>


<div class="col-md-4">
<div class="card h-100">
<div class="card-body">

<h5 class="card-title">Callbacks</h5>

<ul>
<li>EarlyStopping</li>
<li>ModelCheckpoint</li>
<li>TensorBoard</li>
</ul>

</div>
</div>
</div>

</div>

</section>



<section id="desarrollo" class="container mt-5">

<h2>Herramientas de desarrollo</h2>

<div class="row g-4">

<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h5 class="card-title">TensorFlow Backend</h5>

<ul>
<li>Ejecución de modelos</li>
<li>Aceleración con GPU</li>
<li>Optimización del entrenamiento</li>
</ul>

</div>

</div>

</div>


<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h5 class="card-title">Keras API</h5>

<ul>
<li>Interfaz simple</li>
<li>Diseño modular</li>
<li>Creación rápida de modelos</li>
</ul>

</div>

</div>

</div>


<div class="col-md-4">

<div class="card h-100">

<div class="card-body">

<h5 class="card-title">Aplicaciones</h5>

<ul>
<li>Reconocimiento de imágenes</li>
<li>Procesamiento de lenguaje natural</li>
<li>Predicción de datos</li>
<li>IA aplicada a medicina</li>
</ul>

</div>

</div>

</div>

</div>

</section>



<section class="container mt-5">

<h2>Ejemplos de uso</h2>

<div class="row g-4">

<div class="col-md-4">
<img src="keras1.jpeg" alt="Image classification from scratch" class="img-fluid rounded shadow">
</div>

<div class="col-md-4">
<img src="keras2.jpeg" alt="Image classification from scratch" class="img-fluid rounded shadow">
</div>

<div class="col-md-4">
<img src="keras3.jpeg" alt="Image classification with Vision Transformer" class="img-fluid rounded shadow">
</div>

</div>

</section>



<footer class="bg-dark text-light text-center p-3 mt-5">

<p>Presentación de Biblioteca - Keras</p>

</footer>


<script src="script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>