<?php session_start();
if (!isset($_SESSION['Usuario'])) {
  header("Location: login.php"); // Redirige al login si no ha iniciado sesión
  exit();
}
?>

<?php  include 'includes/header.php'?>

 <h2>Registrar Usuario</h2>
 <h3><a href="logout.php">Cerrar sesion</p></a></h3>
  <form method="POST" name="frm1" id="frm1" action="Crear_usuario.php">
   <div class="form_container">
     <label for="usuario" class="formulario_label">
      Usuario:</label>
       <input type="text" name="usuario" id="Usuario" class="formulario_input">
   </div> 
        <div class="form_container">
         <label for="precio" class="formulario_label">
         Contrasena:</label>
         <input type="password" name="contrasena" id="Contrasena" class="formulario_input">
        </div>           
    <div class="form_container">
     <label for="nombre" class="formulario_label">
      Tipo:</label>
       <input type="text" name="tipo" id="tipo" class="formulario_input">
   </div>        
        <BR>
     <div class="form_container">                    
       <input type="button" value="Enviar Datos"  class="formulario_btn" onclick="validacion()">                    
       </div> 
       <br></br>
       <script src='Static/js/validaciones.js'></script>         
</form>

<p><a href="admin.php"><img src="./Static/img/back.png"></p>
           
<?php  include 'includes/footer.php'; ?>