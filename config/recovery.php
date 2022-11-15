<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require '../PHPMailer/Exception.php';
    require '../PHPMailer/PHPMailer.php';
    require '../PHPMailer/SMTP.php';
    
require_once('config.php');

$email = $_POST['email'];
$query = "SELECT * FROM usuarios where correo = '$email' AND status = 1";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if($result->num_rows>0){
$mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp-mail.outlook.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'karen123glez@hotmail.com';
        $mail->Password   = 'Hellokitty666';
        $mail->Port       = 587;

        $mail->setFrom('karen123glez@hotmail.com', 'Karen');
        $mail->addAddress('karensglez13@gmail.com', 'Usuario de prueba');
        $mail->isHTML(true);
        $mail->Subject = 'Recuperación de contraseña';
        $mail->Body    = 'Hola! Este es un correo para poder recuperar tu contraseña. 
                          Por favor, visita la página <a href="localhost/spending_tracker/change_password.php?id="</a>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        header("Location: ../index.php?message=ok");
    } catch (Exception $e) {
        header("Location: ../index.php?message=error");
}
}
else{
    header("Location: ../index.php?message=not_found");
}
?>