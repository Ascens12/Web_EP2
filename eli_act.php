<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}

?>

<?php  include 'Static/connect/db.php'?>
<?php  include 'includes/header.php'?>
<h2><a href="logout.php">Cerrar sesion</p></a></h2>
<?php 
$user = $_SESSION['Usuario'];
    $sql = "SELECT tipo FROM usuarios WHERE Usuario = '$user';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['tipo'] !== 'Administrador') {
      header("Location: login.php"); // Redirige a la página de usuario si no es administrador
      exit();
  }

  ?>

<table class="table table-striped">
    <thead class = "thead-light">
    <tr>
        <th>ID</th>
        <th>Servicio</th>
        <th>Costo</th>
        <th>Eliminar</th>
        <th>Actualizar</th>
        
</tr>
    <thead class = "thead-light">
        
<?php 
    $sql = "select * from servicios;";
    $exec = mysqli_query($conn,$sql);
    while($rows = mysqli_fetch_array($exec)){
    ?>
    <tr>
        <th><?php echo $rows['id']; ?></th>
        <th><?php echo $rows['nombre']; ?></th>
        <th><?php echo $rows['precio']; ?></th>
        <th><a href= "eliminar.php?id=<?php echo $rows['id']?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash-off" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M3 3l18 18" />
  <path d="M4 7h3m4 0h9" />
  <path d="M10 11l0 6" />
  <path d="M14 14l0 3" />
  <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l.077 -.923" />
  <path d="M18.384 14.373l.616 -7.373" />
  <path d="M9 5v-1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
</svg> </a> </th>


        <th><a href= "actualizar.php?id=<?php echo $rows['id']?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
  <path d="M16 5l3 3" />
  <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6" />
</svg> </a> </th>
        <th> </th>
    </tr>
    <?php } ?>


</table>

<p><a href="admin.php"><img src="./Static/img/back.png"></p>
<?php  include 'includes/footer.php'; ?>