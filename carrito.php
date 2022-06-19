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

    <!--Bootstraps-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Libreria JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Css link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/carrito.css">

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

<!-- header -->

<!-- Cabecera  -->

<section class="bannercarrito">

    <div class="content">
        <h3>Tu <span>carro</span> de compra </h3>
    </div>

    <img src="image/bottom_wave.png" class="wave"> 

</section>

<!-- Pedido -->
<div class="container">
    <div id="main" class="row">

    <ul class="lista">
        <h1>Articulos en mi cesta</h1>
        <ul class="cabeceraP row">
            <li class="col-md-1">Animal</li>
            <li class="col-md-2">Tipo</li>
            <li class="col-md-1">Cantidad</li>
            <li class="col-md-2">Precio</li>
        </ul>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "wildstore");
            $result = mysqli_query($conn, "SELECT * FROM carrito");
                    

            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <li class="producto row">
        
            <h3><?php echo $mostrar['nombre'] ?></h3>
            <div class=" col-md-3 col-12"><b>Animal: </b><?php echo $mostrar['animal'] ?></div>
            <div class="col-md-3 col-12"><b>Tipo: </b> <?php echo $mostrar['tipo'] ?></div>
            <div class="col-md-2 col-12"><b class="p">Cantidad: </b><span><?php echo $mostrar['cantidad'] ?></span></div>
            <div class="precio col-md-2 col-6"><b class="p">Precio: </b><span class="precio"><?php echo $mostrar['precio'] ?> </span>€</div>
            <div class="col-md-2 col-6">            <form  action="php/papelera.php" method="POST">
                <input type="hidden" class="idprod" name="idprod" value="<?php echo $mostrar['idcarrito'] ?>">                 
                <input type="submit" class="elimina" value="E"><i class="p fas fa-trash-alt"></i>
            </form>

            

            </div>


        </li>

        <?php } ?> 
    </ul>


    <div class="total row">
        <p class="vacio"></p>
        <div class="envio"><p>Coste de envio: 3€</p></div>
        <div class="ptotal"><p></p></div>
        
    </div>

    <div>
        <form  action="" method="POST">
            <input type="hidden" name="cliente" value="cliente">
            <input type="hidden" name="total" value= "10">
            <input type="hidden" name="contenido" value="limentacioan">                   
            <input type="submit" class="finalizar" value="Finalizar compra">
        </form>
        
    </div>



    </div>
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
<script src="js/menu.js"></script>
<script src="js/carrito.js"></script>

</body>
</html>