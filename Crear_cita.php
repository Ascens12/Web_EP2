<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>

<?php  include 'Static/connect/db.php'?>
<?php  include 'includes/header.php'?>

<?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idServicio = trim($_POST['id_servicio']);
        $horario = trim($_POST['horario']);
    
        if (empty($idServicio) || empty($horario)) {
            echo "<script>alert('Por favor, completa todos los campos.'); window.history.back();</script>";
            exit(); 
        }
    
        $sql = "INSERT INTO cita (id_servicio, horario) VALUES ('$idServicio', '$horario')";
        if (mysqli_query($conn, $sql)) {
          header("Location:cita.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
        ?>
<?php  include 'includes/footer.php'; ?>