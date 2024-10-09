<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>

<?php  include 'Static/connect/db.php'?>
<?php  include 'includes/header.php'?>
<?php
if(isset($_GET['id'])){
  $ID = $_GET['id'];
  $delete = "delete from servicios where id=$ID;";
  $execute = mysqli_query($conn,$delete);
  sleep(2);
  header("Location:eli_act.php");
}
?>
<?php  include 'includes/footer.php'; ?>