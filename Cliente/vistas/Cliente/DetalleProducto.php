<?php
// se llama a la base de datos
include('../../../Servidor/PHP/Cliente/RecibirIDProducto.php');
?>

<?php

include('../../../Config/conexion.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['Id'])) {
    header("Location: ../../../Cliente/vistas/Cliente/index.php");
}

$iduser = $_SESSION['Id'];

$sql = "SELECT ID_CLIENTE, NOMBRE, Apellido, NUMERO_DOC, Telefono, Correo FROM cliente WHERE ID_CLIENTE = '$iduser' ";

$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Iconos en font awesome -->
    <link rel="stylesheet" href="../../css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Detalle del Producto</title>
</head>

<body>




    <!-- Configuración del navbar -->

    <?php include 'headerCliente.php'; ?>

    <!-- Detalles del Producto -->
    <div class="container-detalle">
        <div class="container-imagen">
            <div class="img-detalle">
                <img src="data:image/jpg;base64, <?php echo base64_encode($imagen); ?>" alt="<?php echo $nombre; ?>" width="422.38" height="310.84" />
            </div>
        </div>

        <div class="container-info">
            <div class="info-inner">
                <div class="titulo-detalle">
                    <h1><?php echo $nombre; ?></h1>
                </div>

                <p class="descripcion"><?php echo $descripcion; ?></p>
                <p class="precio">Precio: S/<?php echo $precio; ?></p>
                <br>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn" href="agregar_al_carrito.php?id=<?php echo $idProducto; ?>">Agrega al carrito</a>
                </div>
            </div>
        </div>
    </div>


    <style>
        @media (max-width: 768px) {

            /* Estilos para pantallas más pequeñas */
            .container-detalle {
                flex-direction: column;
            }

            /* Añade más estilos para personalizar la apariencia en pantallas pequeñas */
        }

        /* Estilo para el contenedor principal */
        .container-detalle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        /* Estilo para el contenedor de la imagen */
        .container-imagen {
            flex-basis: 40%;
        }

        .img-detalle img {
            max-width: 100%;
            height: auto;
            border-radius: 1em;
        }

        /* Estilo para el contenedor de la información */
        .container-info {
            flex-basis: 55%;
            padding-left: 20px;
        }


        /* Estilo para el título del producto */
        .titulo-detalle h1 {
            font-family: monospace;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 40px;
            margin: 0;
            margin-bottom: 10px;
            position: relative;
            /* Establece posición relativa para el elemento padre */
        }

        /* Estilo para la línea encima del título */
        .titulo-detalle h1::before {
            content: "";
            /* Agrega contenido al elemento pseudo */
            position: absolute;
            /* Establece posición absoluta para el elemento pseudo */
            top: -10px;
            /* Ajusta la posición vertical (encima del título) */
            left: 0;
            /* Ajusta la posición horizontal (alineado con el título) */
            width: 50px;
            /* Ancho de la línea corta */
            height: 3px;
            /* Grosor de la línea */
            background-color: coral;
            /* Color de la línea */
        }

        /* Estilo para la descripción del producto */
        .descripcion {
            font-family: monospace;
            font-size: 15px;
            color: #555;
            margin-bottom: 10px;
            text-transform: capitalize;


        }

        /* Estilo para el precio del producto */
        .precio {
            font-family: monospace;
            font-size: 20px;
            font-weight: bold;
            color: coral;
            margin-bottom: 10px;
        }


        /* Estilo para el botón de agregar al carrito */
        .btn {
            letter-spacing: 2px;
            font-family: monospace;
            display: inline-block;
            padding: 10px 20px;
            background-color: coral;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            position: relative;
            overflow: hidden;
            /* Oculta el contenido fuera del botón */
        }

        .btn:hover {
            background-color: LightSalmon;
        }

        /* Estilo para la línea superior */
        .btn::before,
        .btn::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: coral;
            transition: transform 0.3s ease;
        }

        /* Estilo para la línea superior */
        .btn::before {
            top: 0;
            left: 0;
            transform: scaleX(0);
            /* Inicialmente, la línea está invisible */
            transform-origin: left;
        }

        /* Estilo para la línea inferior */
        .btn::after {
            bottom: 0;
            right: 0;
            transform: scaleX(0);
            /* Inicialmente, la línea está invisible */
            transform-origin: right;
        }

        /* Estilo para las líneas cuando el botón se desplace */
        .btn:hover::before {
            transform: scaleX(1);
            /* Muestra la línea superior */
        }

        /* Estilo para las líneas cuando el botón se desplace */
        .btn:hover::after {
            transform: scaleX(1);
            /* Muestra la línea inferior */
        }
    </style>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Footer -->
    <iframe src="../../../Cliente/vistas/Cliente/footer.html" frameborder="0" scrolling="no" width="100%" height="320px"></iframe>
</body>

</html>