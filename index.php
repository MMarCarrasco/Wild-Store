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

    <!--Libreria JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Css link  -->
    <link rel="stylesheet" href="css/style.css">

    <!--Libreria de AJAX-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


</head>
<body>
    
<!-- header-->

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-paw"></i> Wild Store </a>

    <nav class="navbar">
        <a href="#about">Sobre nosotros</a>
        <a href="productos.php">Tienda</a>
        <a href="#services">Refugios</a>
        <a href="#plan">Bienestar</a>
    </nav>

    <?php
    
    //Si se inicia de sesion aparecera el nombre de usuario y el icono de carrito
    if(isset($_SESSION['user'])){
    ?>
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div id="login-btn"></div><form  class="login-form" ></form>
        <a href="carrito.php" class="fas fa-shopping-cart"></a>
        <span class="user"><?php echo $_SESSION['user']?></span> <a class="salirsesion" href="php/cerrarsesion.php">Salir</a>
    </div>


    <?php }else{  //En caso de no haber iniciado sesion se mantendra el original?> 

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

<!-- header -->

<!-- Cabecera de inicio  -->

<section class="home" >

    <div class="content">
        <h3> <span>¡Hola!</span> Bienvenido a Wild Store </h3>

    </div>

    <img src="image/bottom_wave.png" class="wave" alt="">

</section>

<!-- Cabecera -->

<!-- Sobre nosotros  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/about_img.png" alt="tienda">
    </div>

    <div class="content">
        <h3>Sobre <span>nosotros</span></h3>
        <p>Tu tienda para animales favorita, apostando desde hace más de 30 por los mejores productos y un amplio abanico de artículos 
            de alimentación y accesorios de todo tipo, para toda clase de animales de compañía. Entre nuestro productos destacamos la 
            alimentación, accesorios aptos para toda clase de animales de compañía, ofreciendo a nuestros clientes, un servicio de 
            asesoramiento con trato cercano para ayudarle a decidir lo mejor para su fiel amigo. </p>
        
    </div>

</section>

<!-- Sobre nosotros -->

<!-- Productos destacados -->

<div class="dog-food">

    <div class="image">
        <img src="image/dog_food.png" alt="comida de perro">
    </div>

    <div class="content">
        <h3> <span>air dried</span> Ternera </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat iure illo, repudiandae rem porro sunt.</p>
        <div class="amount">14.90€</div>
        <a href="productos.php"> <img src="image/shop_now_dog.png" alt="boton hueso verde"> </a>
    </div>

</div>

<div class="cat-food">

    <div class="content">
        <h3> <span>Air dried</span> Salmon </h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat iure illo, repudiandae rem porro sunt.</p>
        <div class="amount">14.90€</div>
        <a href="productos.php"> <img src="image/shop_now_cat.png" alt="boton pez azul"> </a>
    </div>

    <div class="image">
        <img src="image/cat_food.png" alt="comida de gato">
    </div>

</div>


<!-- Refugios  -->

<section class="services" id="services">

    <h1 class="heading"> Refugios con los que <span>colaboramos</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-dog"></i>
            <h3>Arca de noe Sevilla</h3>
            <a href="https://arcadenoe.org/" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-cat"></i>
            <h3>Defensa felina</h3>
            <a href="https://defensafelina.org/" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-horse"></i>
            <h3>Asociacion defensa equidos</h3>
            <a href="https://asociaciondefensaequidos.org/" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-crow"></i>
            <h3>Pajaros caidos</h3>
            <a href="https://www.pajaroscaidos.org.ar/" class="btn">read more</a>
        </div>

       <!-- <div class="box">
            <i class="fas fa-frog"></i>
            <h3>Asociacion protectora de animales exoticos</h3>
            <a href="https://www.apaecatalunya.com/" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-kiwi-bird"></i>
            <h3>El cortijillo de la Lola</h3>
            <a href="https://elcortijillodelalola.org/" class="btn">read more</a>
        </div>-->

    </div>

</section>

<!-- Banner -->

<section class="plan" id="plan">

    <h1 class="heading"> Bienestar <span>de tu amigo</span> </h1>

    <div class="box-container">

        <img src="image/protege.jpg" alt="banner sobre leismaniosis">

    </div>

</section>


<!--Contacto-->
<section class="contact" id="contact">

    <div class="image">
        <img src="image/contact_img.png" alt="mujer con perro en brazo">
    </div>

    <form action="" method="post">
        <h3>Contacta con nosotros</h3>
        <input type="text" name="nombre" id="nombre" placeholder="Tu nombre"  class="box">
        <input type="email" name="email" id="email" placeholder="Escribe tu email" class="box">
        <textarea id="comentario" name="comentario" placeholder="Deje su comentario" cols="30" rows="10"></textarea>
        <input type="checkbox" id="privacidad" name="privacidad"><label for="privacidad"> He leido y acepto la <a href="#">política de privacidad</a></label>
        <input type="submit" value="enviar" class="btn enviar">
    </form>

    <div class="textServer"></div>


</section>



<!--Contacto--> 

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
<script src="js/menu.js"></script>
<script src="js/ajax.js"></script>

</body>
</html>