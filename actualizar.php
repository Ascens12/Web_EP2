<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>
<?php  include 'Static/connect/db.php'?>

<?php
if(isset($_GET['id'])){
    $ID = $_GET['id'];
    $SQL = "select * from servicios where id = $ID;";
    $resul = mysqli_query($conn,$SQL);
    if(mysqli_num_rows($resul)==1){
        $row = mysqli_fetch_array($resul);
        $nombre = $row['nombre'];
        $precio = $row['precio'];
        //echo $nombre . " | " . $precio;
    }
}

if(isset($_POST['actualizar'])){
$id = $_GET['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$sql= "UPDATE servicios SEt nombre = '$nombre', precio = '$precio' where id = $id;";
mysqli_query($conn,$sql);
header("Location:eli_act.php");
}


?>

<?php  include 'includes/header.php'?>
<form action="actualizar.php?id=<?php echo $_GET['id'];?>" method="POST">
<div class="form_container">
<label>Nombre del servicio:
<input type="text" name="nombre" id="nombre" value="<?php echo $nombre;?>" 
class = "formulario_input">

</label>
</div>
<br></br>
<div class="form_container">
<label>Precio del servicio
<input type="text" name="precio" id="precio" value="<?php echo $precio;?>" 
class = "formulario_input">
</label>
</div>
<br></br>
<BUTTON name="actualizar" class="formulario_btn"> Actualizar </BUTTON>

</form>

<?php  include 'includes/footer.php'; ?>