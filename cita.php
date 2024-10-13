<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>

<?php  include 'includes/header.php'?>

 <h6>Agendar cita</h6>
 <h2><a href="logout.php">Cerrar sesion</p></a></h2>
  <form method="POST" name="frm1" id="frm1" action="Crear_cita.php">
   <div class="form_container">
     <label for="id_servicio" class="formulario_label">
      ID de servicio:</label>
       <input type="text" name="id_servicio" id="id_servicio" class="formulario_input">
   </div> 
        <div class="form_container">
         <label for="horario" class="formulario_label">
         Horario:</label>
         <input type="text" name="horario" id="horario" class="formulario_input">
        </div>                  
        <BR>
     <div class="form_container">                    
       <input type="button" value="Enviar Datos"  class="formulario_btn" onclick="validacion()">                    
       </div> 
       <br></br>
       <script src='Static/js/appvacita.js'></script>         
</form>

<p><a href="javascript:history.back();"><img src="./Static/img/back.png" alt="Regresar"></a></p>
           
<?php  include 'includes/footer.php'; ?>