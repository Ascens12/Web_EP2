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
        $email = $_POST['correo'];
        $type = "Usuario";

        $sql =" insert into usuarios(Usuario, Contrasena, Correo, tipo) values ('$user', '$pasw', '$email','$type');";

        $execute = mysqli_query($conn,$sql);
        sleep(2);
        header("Location:create2.php");

        ?>
<?php  include 'includes/footer.php'; ?>