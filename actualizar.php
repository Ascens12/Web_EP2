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
        $horario = $row['horario'];
        //echo $nombre . " | " . $precio;
    }
}

if(isset($_POST['actualizar'])){
$id = $_GET['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$horario = $_POST['horario'];
$sql= "UPDATE servicios SEt nombre = '$nombre', precio = '$precio', horario = '$horario' where id = $id;";
mysqli_query($conn,$sql);
header("Location:eli_act.php");
}


?>

<?php  include 'includes/header.php'?>
<form action="actualizar.php?id=<?php echo $_GET['id'];?>" method="POST">

<div class="form_container">
     <label for="nombre" class="formulario_label">
     Nombre del servicio:</label>
       <input type="text" name="nombre" id="nombre" class="formulario_input" value="<?php echo $nombre;?>">
   </div> 
        <div class="form_container">
         <label for="precio" class="formulario_label">
         Costo del servicio:</label>
         <input type="text" name="precio" id="precio" class="formulario_input" value="<?php echo $precio;?>"        
         onkeypress="if((event.keyCode < 48) || (event.keyCode >57)){
         event.returnValue=false;
         } "  maxlength="4">
        </div>          
    <div class="form_container">
      <label for="horario" class="formulario_label">
      Horario:</label>
      <input type="text" name="horario" id="horario" class="formulario_input" value="<?php echo $horario;?>">
    </div> 
<br></br>
<BUTTON name="actualizar" class="formulario_btn"> Actualizar </BUTTON>

</form>
<p><a href="eli_act.php"><img src="./Static/img/back.png"></p>
<?php  include 'includes/footer.php'; ?>