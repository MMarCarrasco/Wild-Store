<?php
    session_start();
    
    //Si ya se ha logueado no podrá acceder a la página
    if(isset($_SESSION['user'])){
        echo '<script>alert("Ya formas parte de la comunidad"); window.location = "index.html";</script>';
       
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Store</title>
    <link rel="stylesheet" href="./css/login.css">

    <!--Libreria JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--Libreria de AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!--Icono-->
    <script src="https://kit.fontawesome.com/8b1e64f861.js" crossorigin="anonymous"></script>

    <!-- Css link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/registro.css">


</head>
<body>
    <header class="header">

        <a href="index.html" class="logo"> <i class="fas fa-paw"></i> Wild Store </a>
    
        <nav class="navbar">
            <a href="#about">Sobre nosotros</a>
            <a href="productos.php">Tienda</a>
            <a href="#services">Refugios</a>
            <a href="#plan">Trae a un amigo</a>
        </nav>
    
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <a href="carrito.php" class="fas fa-shopping-cart"></a>
            <div class="login-form" id="login-btn"></div>
        </div>
    

    
    </header>

    <!--Cabecera-->
    <section class="banneregistro">

        <div class="content">
            <h3>Todavía no formas parte de la comunidad <span>Registrate</span></h3>
    
        </div>
    
        <img src="image/bottom_wave.png" class="wave" alt="">
    
    </section>

    <main>

        <div class="contenedor__login-register">

            <!--Registro-->
            <form  class="formulario__register" method="POST">
                <h2>Registrarse</h2>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                <input class="submitRegister" value="Registrar"  type="submit"> 
                
            </form>
        </div>


    <!--Footer-->
    <section class="footer">

        <img src="image/top_wave.png" alt="">
    
        <div class="share">
            <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>
    
        <div class="credit"> created by <span> Mª del Mar Carrasco Baena </span> | all rights reserved! </div>
    
    </section>

    <!--JS Link  -->
    <script src="./js/menu.js"></script>
    <script src="./js/ajax.js"></script>
    
    
    
</body>
</html>


