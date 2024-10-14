<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>

<?php  include 'includes/header.php'?>
<?php  include 'Static/connect/db.php'?>

<h6>Agendar cita</h6>
<?php
  $user = $_SESSION['Usuario'];
  ?>
  <h4><?php echo $user; ?> </h4>;
 <h2><a href="logout.php">Cerrar sesion</p></a></h2>

    <table class="table table-success table-striped-columns">
    <thead>
        <tr>
            <th>ID</th>
            <th>Servicio</th>
            <th>Costo</th>
            <th>Horario</th>
    </tr>
        <thead>
            
    <?php 
        $sql = "select * from servicios;";
        $exec = mysqli_query($conn,$sql);
        while($rows = mysqli_fetch_array($exec)){
        ?>
        <tr>
            <th><?php echo $rows['id']; ?></th>
            <th><?php echo $rows['nombre']; ?></th>
            <th><?php echo $rows['precio']; ?></th>
            <th><?php echo $rows['horario'];?></th>
        </tr>
        <?php } ?>

    </table>


    <form method="POST" name="frm1" id="frm1" action="Crear_cita.php">
   <div class="form_container">
     <label for="id_servicio" class="formulario_label" style="color: yellow;">
     ID de servicio:</label>
       <input type="text" name="id_servicio" id="id_servicio" class="formulario_input">
   </div> 
    <div class="form_container">
      <label for="horario" class="formulario_label" style="color: yellow;">
      Horario:</label>
      <input type="text" name="horario" id="horario" class="formulario_input">
    </div>               
        <br>
     <div class="form_container">                    
       <input type="submit" value="Enviar Datos"  class="formulario_btn" onclick="validacion()">                    
       </div> 
       <br></br>
       <script src='Static/js/appvlidacion.js'></script>    
  </form>


<p><a href="javascript:history.back();"><img src="./Static/img/back.png" alt="Regresar"></a></p>
           
<?php  include 'includes/footer.php'; ?>