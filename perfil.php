
<?php

include('config/conexion.php');

session_start();
if (!isset($_SESSION['Id'])){
    header("Location: indexCliente.php");

}

$iduser = $_SESSION['Id'];

$sql = "SELECT ID_CLIENTE, Nombre, Apellido, NUMERO_DOC, Telefono, Correo FROM cliente WHERE ID_CLIENTE = '$iduser' ";

$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="css/perfil.css" />
    <!-- Iconos en font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Productos</title>
</head>

<body>
    <!-- Configuración del navbar -->
    <header>
        <div class="header-left">
            <div class="logo">
                <a href="indexCliente.php">
                    <img src="img/logo.png" alt="" />
                </a>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="indexCliente.php">Inicio</a>
                    </li>
                    <li>
                        <a href="productos.php" class="active">Productos</a>
                    </li>
                    <li>
                        <a href="nosotros.html">Nosotros</a>
                    </li>
                </ul>
                <div class="perfil-carrito">
                    <a href="perfil.html"><i class="fa-solid fa-user"></i></a>
                    <a href="carrito.html"><i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </nav>
        </div>
        <div class="header-right">
            <div class="perfil-carrito">
                <a href="perfil.html"><i class="fa-solid fa-user"></i></a>
                <a href="carrito.html"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
    <script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("nav");
        hamburger.onclick = function () {
            nav.classList.toggle("active");
        };
    </script>


   

        <body class="PerfilCliente">

            <section class="grid-container">
                <div class="icono">
                   
                    <i class="fa-solid fa-circle-user"></i>
                </div>
                <div class="nombre">
                    <h1>Hola, <?php echo utf8_decode($row['Nombre']); ?></h1>
                </div>
            </section>
        
            <!--<nav>
                <a href="#">Mi perfil</a>
                <a href="#">Mis pedidos</a>
            </nav> -->
        
            <main class="grid-container">
                <section class="perfil">
                    <h2>Mi Perfil</h2>
                    <ul>
                        <li><i class="fa-solid fa-user"></i> Nombre: <?php echo utf8_decode($row['Nombre']); ?></li>
                        <li><i class="fa-regular fa-user"></i> Apellido: <?php echo utf8_decode($row['Apellido']); ?></li>
                        <li><i class="fa-solid fa-address-card"></i> Número de documento: <?php echo utf8_decode($row['NUMERO_DOC']); ?></li>
                        <li><i class="fa-solid fa-phone"></i> Número de teléfono: <?php echo utf8_decode($row['Telefono']); ?></li>
                        <li><i class="fa-solid fa-envelope"></i> Correo electrónico: <?php echo utf8_decode($row['Correo']); ?></li>
                        
                    </ul>
                    
                    <button>Editar</button>
                </section>
            </main>
        
        </body>

       



    <!-- Footer -->
    <footer>
        <div class="container__footer">
            <div class="box__footer">
                <div class="logo">
                    <img src="img/logo.png" alt="" />
                </div>
            </div>
            <div class="box__footer">
                <h2>Nosotros</h2>
                <a href="nosotros.html">¿Quiénes somos?</a>
                <a href="#">Política de privacidad</a>
                <a href="#">Política de cookies</a>
                <a href="#">Libro de reclamaciones</a>
            </div>

            <div class="box__footer">
                <h2>Contáctanos</h2>
                <a href="#"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a>
                <a href="#"><i class="fa-regular fa-envelope"></i> Correo</a>
                <a href="#"><i class="fa-solid fa-phone"></i> Teléfono</a>
                <a href="#"><i class="fa-solid fa-location-dot"></i> Av San Juan N° 1061, SJM 15801</a>
            </div>

            <div class="box__footer">
                <h2>Síguenos</h2>
                <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
            </div>
        </div>

        <div class="box__copyright">
            <hr />
            <p>Todos los derechos reservados © 2023 <b>Pastelería Dolce Rivoluzione</b></p>
        </div>
    </footer>

</body>

</html>