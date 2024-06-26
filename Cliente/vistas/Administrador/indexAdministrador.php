<?php
include('../../../Config/conexion.php');
include('../../../Servidor/PHP/Administrador/SessionAbiertaAdmin.php');
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Inicio Administrador</title>
  <link rel="stylesheet" href="../../../Cliente/css/styleAdmin.css">
  <link rel="stylesheet" href="../../../Cliente/css/styleIndexAdministrador.css">
  <!-- Iconos en font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <!-- SIDEBAR -->
  <div class="sidebar close">
    <div class="logo-details">
      <img src="../../../Cliente/recursos/img/logo.png" alt="Imagen de un pastel del logo de la empresa" />
      <span class="logo_name">Pastelería Dolce Rivoluzione</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="../../../Cliente/vistas/Administrador/indexAdministrador.php">
          <i class='fa-solid fa-house'></i>
          <span class="link_name">Inicio</span>
        </a>
        <ul class="sub-menu blank">
          <li><a href="../../../Cliente/vistas/Administrador/indexAdministrador.php" class="link_name">Inicio</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="listaproductos.php">
            <i class='fas fa-box'></i>
            <span class="link_name">Productos</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a href="listaproductos.php" class="link_name">Productos</a></li>
        </ul>
      </li>
      <li>
        <a href="../../../Cliente/vistas/Administrador/listarAdministrador.php">
          <i class='fas fa-users'></i>
          <span class="link_name">Usuarios</span>
        </a>
        <ul class="sub-menu blank">
          <li><a href="../../../Cliente/vistas/Administrador/listarAdministrador.php" class="link_name">Usuarios</a></li>
        </ul>
      </li>
      <li>
        <a href="../../../Cliente/vistas/Administrador/listarEmpleados.php">
          <i class="fa-solid fa-users-line"></i>
          <span class="link_name">Empleados</span>
        </a>
        <ul class="sub-menu blank">
          <li><a href="../../../Cliente/vistas/Administrador/listarEmpleados.php" class="link_name">Empleados</a></li>
        </ul>
      </li>
      <li>
        <a href="demanda.php">
          <i class='fas fa-chart-bar'></i>
          <span class="link_name">Demanda</span>
        </a>
        <ul class="sub-menu blank">
          <li><a href="demanda.php" class="link_name">Demanda</a></li>
        </ul>
      </li>
      <li>
        <div class="icon-link">
          <a href="ingresos.php">
            <i class='fas fa-chart-line'></i>
            <span class="link_name">Ingresos</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a href="ingresos.php" class="link_name">Ingresos</a></li>
        </ul>
      </li>

      <li>
      <div class="profile-details">
        <div class="profile-content">
          <i class="fa-solid fa-user"></i>
        </div>
        <div class="name-job">
          <div class="profile_name">
            <?php
            echo $_SESSION['nombre_usuario']; // Mostrar el nombre del usuario
            ?>
          </div>
          <div class="job">Administrador</div>
        </div>
        <i class='fa-solid fa-arrow'></i>
      </div>  
  </li>
  <li>
  <a href="#" onclick="confirmLogout()">
    <i class="fa-solid fa-sign-out"></i>
    <span class="link_name">Cerrar sesión</span>
  </a>
</li>

<script>
function confirmLogout() {
  Swal.fire({
    title: "¿Estás seguro de que deseas cerrar sesión?",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sí, cerrar sessión",
    cancelButtonText: "Cancelar"
  }).then((result) => {
    if (result.isConfirmed) {
      // Si el usuario hace clic en "Sí, cerrar sesión", redirige al archivo de cierre de sesión
      window.location.href = "../../../Servidor/PHP/Administrador/cerrarSessionAdmin.php";
    }
    // Si el usuario hace clic en "Cancelar", no se hace nada
  });
}
</script>

      
  </ul>
  </div>

  <!-- HOME -->
  <section class="home-section">
    <div class="home-content">
      <i class='fa-solid fa-bars'></i>
      <span class="text">Inicio</span>
    </div>

    <!-- CARDS -->
    <div class="card-container">
      <a href="listaproductos.php" class="card">
        <i class="fas fa-box"></i>
        <h2>Productos</h2>
      </a>
      <a href="listarAdministrador.php" class="card">
        <i class="fas fa-users"></i>
        <h2>Usuarios</h2>
      </a>
      <a href="listarEmpleados.php" class="card">
        <i class="fa-solid fa-users-line"></i>
        <h2>Empleados</h2>
      </a>
      <a href="demanda.php" class="card">
        <i class="fas fa-chart-bar"></i>
        <h2>Productos más vendidos</h2>
      </a>
      <a href="ingreso.php" class="card">
        <i class="fas fa-chart-line"></i>
        <h2>Reporte de ingresos de ventas</h2>
      </a>
    </div>
  </section>

  <script src="../../../Cliente/js/inicioAdministrador.js"></script>
      <!-- Scrip para diseño del mensaje de cerrar session -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
