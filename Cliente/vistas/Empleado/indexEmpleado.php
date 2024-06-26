<!-- Esto hace que la session se mantega abierta en cada pagina  -->
<?php
include('../../../Servidor/PHP/EmpleadoServidor/SessionAbierta.php');
?>
<!-- --------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Empleado</title>
  <link rel="stylesheet" href="../../../Cliente/css/styleAdmin.css">
  <!-- Iconos en font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      border-bottom: none;
    }

    .card {
      border: 2px solid #783f04;
      border-radius: 10px;
      padding: 20px;
      margin: 10px;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      background-color: white;
      width: calc(50% - 20px);
    }

    .card i {
      font-size: 36px;
      color: #783f04;
      margin-bottom: 10px;
    }

    .card h2 {
      color: #783f04;
      font-size: 1.5rem;
      margin: 10px
    }

    @media (max-width: 768px) {
      .card-container {
        flex-direction: column;
        align-items: center;
      }

      .card {
        width: 100%;
        margin: 10px 0;
      }
    }
  </style>
</head>



<body>
  <!-- SIDEBAR -->
  <?php include '../../../Cliente/vistas/Empleado/headerEmpleado.php'; ?>

  <!-- HOME -->
  <section class="home-section">
    <div class="home-content">
      <i class='fa-solid fa-bars'></i>
      <span class="text">Inicio</span>
    </div>

    <!-- CARDS -->
    <div class="card-container">
      <a href="pedidos.php" class="card">
        <i class="fas fa-shopping-cart"></i>
        <h2>Pedido</h2>
      </a>
      <a href="../Empleado/productoEmpleado.php" class="card">
        <i class="fas fa-box"></i>
        <h2>Productos</h2>
      </a>

    </div>

  </section>



  <script src="../../../Cliente/js/inicioAdministrador.js"></script>
</body>

</html>