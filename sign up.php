<?php include 'Static/connect/db.php'?>
<?php include 'includes/header.php'?>

<?php
    session_start();

    $user = $_POST['usuario'];
    $password = $_POST['contrasena'];

    $sql = "insert into usuarios values ('$user','$password');";

    $execute = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($execute);

    header("Location: login.php");
    
?>