

<?php  include 'includes/header.php'?>

 <h2>Crear Usuario</h2>
  <form method="POST" name="frm1" id="frm1" action="Crear_usuario.php">
   <div class="form_container">
     <label for="usuario" class="formulario_label">
      Usuario:</label>
       <input type="text" name="usuario" id="Usuario" class="formulario_input">
   </div> 
   <div class="form_container">
     <label for="contrasena" class="formulario_label">
      Contraseña:</label>
       <input type="password" name="contrasena" id="Contrasena" class="formulario_input">
   </div> 
        <div class="form_container">
         <label for="correo" class="formulario_label">
         Correo:</label>
         <input type="text" name="correo" id="Correo" class="formulario_input">
        </div>          
        <BR>
     <div class="form_container">                    
       <input type="button" value="Enviar Datos"  class="formulario_btn" onclick="validacion()">                    
       </div> 
       <br></br>
       <script src='Static/js/userValidacion.js'></script>         
  </form>

<p><a href="javascript:history.back();"><img src="./Static/img/back.png" alt="Regresar"></a></p>
           
<?php  include 'includes/footer.php'; ?>