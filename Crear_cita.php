<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>

<?php  include 'Static/connect/db.php'?>
<?php  include 'includes/header.php'?>
<?php 
        $id = $_POST['id_servicio'];
        $horario = $_POST['horario'];

        $sql ="insert into cita(id_servicio, horario) values ($id, '$horario');";

        $execute = mysqli_query($conn,$sql);
        sleep(2);
        header("Location:cita.php");

        ?>
<?php  include 'includes/footer.php'; ?>