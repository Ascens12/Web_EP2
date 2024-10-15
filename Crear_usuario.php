<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'Static/connect/db.php';
include 'includes/header.php';

$user = $_POST['usuario'];
$pasw = $_POST['contrasena'];
$email = $_POST['correo'];
$type = "Usuario";

$sql = "INSERT INTO usuarios(Usuario, Contrasena, Correo, tipo) VALUES ('$user', '$pasw', '$email','$type');";
$execute = mysqli_query($conn, $sql);

if ($execute) {
    $mail = new PHPMailer(true);
    
    try {
        // Configuración del servidor SMTP de Gmail
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'aoco220155@upemor.edu.mx';
        $mail->Password   = 'GAe86_10';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Configurar el remitente y destinatario
        $mail->setFrom('aoco220155@upemor.edu.mx', 'BarberShopA');
        $mail->addAddress($email);

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Confirmacion de Creacion de Usuario';
        $mail->Body    = "<p>Hola <strong>$user</strong>,</p>
                          <p>Se ha creado tu cuenta correctamente. Aquí tienes tus datos de acceso:</p>
                          <p><strong>Usuario:</strong> $user</p>
                          <p><strong>Contraseña:</strong> $pasw</p>";

        // Enviar el correo
        $mail->send();
        //echo "El correo de confirmación ha sido enviado a $email.";

        sleep(2);
        header("Location: login.php");
    } catch (Exception $e) {
        echo "No se pudo enviar el correo. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Error al insertar los datos en la base de datos.";
}

include 'includes/footer.php';
?>
