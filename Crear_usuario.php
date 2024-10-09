<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>

<?php  include 'Static/connect/db.php'?>
<?php  include 'includes/header.php'?>
<?php 
        $user = $_POST['usuario'];
        $pasw = $_POST['contrasena'];
        $type = $_POST['tipo'];

        $sql =" insert into usuarios(Usuario, Contrasena, tipo) values ('$user', '$pasw', '$type');";

        $execute = mysqli_query($conn,$sql);
        sleep(3);
        header("Location:create2.php");

        ?>
<?php  include 'includes/footer.php'; ?>