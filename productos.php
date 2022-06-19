<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wild Store</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Css link  -->
    <link rel="stylesheet" href="css/style.css">

    <!--Libreria JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--Libreria de AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body>
    
<!-- header-->

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-paw"></i> Wild Store </a>

    <nav class="navbar">
        <a href="./#about">Sobre nosotros</a>
        <a href="productos.php">Tienda</a>
        <a href="./#services">Refugios</a>
        <a href="./#plan">Bienestar</a>
    </nav>

    
    <?php if(isset($_SESSION['user'])){ ?>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div id="login-btn"></div><form  class="login-form" ></form>
        <a href="carrito.php" class="fas fa-shopping-cart"></a>
        <span class="user"><?php echo $_SESSION['user']?></span> <a class="salirsesion" href="php/cerrarsesion.php">Salir</a>
    </div>


    <?php }else{ ?> 

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="carrito.php" class="fas fa-shopping-cart"></a>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="php/login.php" class="login-form" method="post">
        <h3>Inicia sesión</h3>
        <input type="email" id="emailI" name="email" placeholder="Email"class="box">
        <input type="password" id="contrasenaI" name="contrasena" placeholder="Contraseña" class="box">
        <input type="submit" value="Entrar" class="btn submitLogin">

        <div class="links">
            <a href="registro.php">Registrarse</a>
        </div>
    </form>

    <?php } ?>  

</header>


<!-- Cabecera-->
<section class="bannertienda">

    <div class="content">
        <h3>Nuestros <span>productos</span></h3>
    </div>

    <img src="image/bottom_wave.png" class="wave" alt="">

</section>
<!-- Cabecera -->

<!--Productos -->

<section class="shop" id="shop">

    <h1 class="heading">Nuestros <span> alimentos </span> </h1>

    <div class="box-container">

        <?php
            $tipo = "alimentacion";
            $conn = mysqli_connect("localhost", "root", "", "wildstore");
            $result = mysqli_query($conn, "SELECT * FROM producto WHERE tipo='$tipo'");
                    

            while($mostrar=mysqli_fetch_array($result)){
        ?>

        <div class="box">

            <div class="image">
                <img src="image/<?php echo $mostrar['imagen'] ?>" alt="">
            </div>
            <div class="content">
                <h3><?php echo $mostrar['nombre'] ?></h3>
                <div class="amount"> <?php echo $mostrar['animal'] ?> </div>
                <div class="amount"> <?php echo $mostrar['precio'] ?>€</div>
                
                <form  action="php/pedido.php" method="POST">
                    <input type="hidden" class="nomproducto" name="nombre" value="<?php echo $mostrar['nombre'] ?>">
                    <input type="hidden" class="animalproducto" name="animal" value="<?php echo $mostrar['animal'] ?>">
                    <input type="hidden" class="precioproducto" name="precio" value="<?php  echo $mostrar['precio'] ?>">
                    <input type="hidden" class="tipoproducto" name="tipo" value="alimentacion">                   
                     <input type="submit" class="carrito" value="Añadir carrito">
                </form>

            </div>
        </div>

        <?php } ?>   
    </div>

    <h1 class="heading"> Nuestros <span> complementos </span> </h1>

    <div class="box-container">

        <?php
             $tipo = "complemento";
             $conn = mysqli_connect("localhost", "root", "", "wildstore");
             $result = mysqli_query($conn, "SELECT * FROM producto WHERE tipo='$tipo'");
                    

            while($mostrar=mysqli_fetch_array($result)){
        ?>

        <div class="box">

        <div class="image">
            <img src="image/<?php echo $mostrar['imagen'] ?>" alt="">
        </div>
        <div class="content">
            <h3><?php echo $mostrar['nombre'] ?></h3>
            <div class="amount"> <?php echo $mostrar['animal'] ?> </div>
            <div class="amount"> <?php echo $mostrar['precio'] ?>€</div>
            
            <form  action="php/pedido.php" method="POST">
                <input type="hidden" class="nomproducto" name="nombre" value="<?php echo $mostrar['nombre'] ?>">
                <input type="hidden" class="animalproducto" name="animal" value="<?php echo $mostrar['animal'] ?>">
                <input type="hidden" class="precioproducto" name="precio" value="<?php  echo $mostrar['precio'] ?>">
                <input type="hidden" class="tipoproducto" name="tipo" value="complmento">                   
                <input type="submit" class="carrito" value="Añadir carrito">
            </form>

        </div>
</div>

        <?php } ?>   
    </div>

</section>

<!--Productos-->

<section class="footer">

    <img src="image/top_wave.png" alt="">

    <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

    <div class="credit"> Create by <span> Mª del Mar Carrasco </span> | all rights reserved! </div>

</section>


<!-- JS link  -->
<script src="js/menu.js"></script>


</body>
</html>