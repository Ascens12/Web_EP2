
<?php include 'Static/connect/db.php'?>
<?php include 'includes/header.php'?>

<?php
    session_start();

    $user = $_POST['usuario'];
    $password = $_POST['contrasena'];

    $sql = "select * from usuarios where Usuario = '$user' and Contrasena = '$password';";

    $execute = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($execute);

    if(($row['Usuario'] == $user) && ($row['Contrasena'] == $password)){
        if($row['tipo'] == 'Administrador'){
            $_SESSION['Usuario'] = $user; 
            header("Location: admin.php");
        }else{
            $_SESSION['Usuario'] = $user; 
            header("Location: user.php");
        }
    }else{
        header("Location: login.php");
    }
?>