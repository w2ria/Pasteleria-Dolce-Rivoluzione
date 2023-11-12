<!-- Esto hace que la session se siga manteniendo abierta -->
<?php
include('../../../Servidor/PHP/EmpleadoServidor/SessionAbierta.php');
?>
<!-- ----------------------------------------------------------- -->


<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabla de pedidos </title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../Cliente/css/styleEmpleado.css">
  <script src="../../../Cliente/js/inicioEmpleado.js"></script>
</head>


<body>
  <!-------- incluir el  navbar ----->
  <?php include '../../../Cliente/vistas/Empleado/headerSecundario.php'; ?>


  <h1 class="text-center">Tabla Pedido</h1>

  <form id="formFiltros" style="border: 2px solid #783f04; margin: 20px; padding: 20px;" method="GET">
    <label for="cantidad">Mostrar cantidad de productos:</label>
    <select name="cantidad" id="cantidad">
        <option value="10" <?= (isset($productosPorPagina) && $productosPorPagina == 10 ? 'selected' : '') ?>>10</option>
        <option value="20" <?= (isset($productosPorPagina) && $productosPorPagina == 20 ? 'selected' : '') ?>>20</option>
        <option value="30" <?= (isset($productosPorPagina) && $productosPorPagina == 30 ? 'selected' : '') ?>>30</option>
        <option value="40" <?= (isset($productosPorPagina) && $productosPorPagina == 40 ? 'selected' : '') ?>>40</option>
        <option value="50" <?= (isset($productosPorPagina) && $productosPorPagina == 50 ? 'selected' : '') ?>>50</option>
    </select>
    <button type="submit" class="btn btn-success">Aplicar</button>
</form>

  <div class="container">
    <a href="../Empleado/agregarPedido.php" class="btn btn-success" style="margin-bottom:4px">Agregar nuevo pedido</a>
    <table class="table table-hover text-center">
      <thead>
        <tr>
          <th scope="col" style="background-color:#f9cb9c;">ID</th>
          <th scope="col" style="background-color:#f9cb9c;">Cliente</th>
          <th scope="col" style="background-color:#f9cb9c;">Empleado</th>
          <th scope="col" style="background-color:#f9cb9c;">Fecha</th>
          <th scope="col" style="background-color:#f9cb9c;">Monto final</th>
          <th scope="col" style="background-color:#f9cb9c;">Metodo de pago</th>
          <th scope="col" style="background-color:#f9cb9c;">Estado</th>
          <th scope="col" style="background-color:#f9cb9c;">Acciones</th>
          <th scope="col" style="background-color:#f9cb9c;">Detalle Pedido</th>
        </tr>
      </thead>

      <tbody>
        <?php include('../../../Servidor/PHP/EmpleadoServidor/listaPedido.php'); ?>
      </tbody>

    </table>

  </div>


  <style>
    #bar a {
      border-style: none;
      background-color: #f9cb9c;
      border-radius: 10px;
    }

    .container {
      font-family: monospace;
      margin-top: 1em;
      margin-bottom: 1em;
      border-radius: 1em;
    }
  </style>

    <!-- script para confirmacion de eliminar un empleado -->
    <script src="../../../Cliente/js/confirma_elim_pedido.js"> </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="../../../Cliente/js/inicioEmpleado.js"></script>
</body>

</html>