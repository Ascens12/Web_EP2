<?php  include 'Static/connect/db.php'?>
<?php  include 'includes/header.php'?>
<h2><a href="logout.php">Cerrar sesion</p></a></h2>
<table class=table-primary>
    <thead>
    <tr>
        <th>ID</th>
        <th>Servicio</th>
        <th>Costo</th>
</tr>
    <thead>
        
<?php 
    $sql = "select * from servicios;";
    $exec = mysqli_query($conn,$sql);
    while($rows = mysqli_fetch_array($exec)){
    ?>
    <tr>
        <th><?php echo $rows['id']; ?></th>
        <th><?php echo $rows['nombre']; ?></th>
        <th><?php echo $rows['precio']; ?></th>
    </tr>
    <?php } ?>


</table>
<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: user.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>
<p><a href="javascript:history.back();"><img src="./Static/img/back.png" alt="Regresar"></a></p>
<?php  include 'includes/footer.php'; ?>
