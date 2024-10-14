<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>

<?php  include 'Static/connect/db.php'?>
<?php  include 'includes/header.php'?>
<?php 
        $servicio = $_POST['nombre'];
        $precio = $_POST['precio'];
        $horario = $_POST['horario'];

        $sql =" insert into servicios(nombre, precio, horario) values ('$servicio', $precio, '$horario');";

        $execute = mysqli_query($conn,$sql);
        sleep(3);
        header("Location:create.php");

        ?>
<?php  include 'includes/footer.php'; ?>