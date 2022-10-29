<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;


class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token) {

        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
        
    }

    public function enviarConfirmacion() {
        //Crear el objeto de email

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'ed1849356dd6a6';
        $mail->Password = '81fbc18a05c954';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'Appsalon.com');     //Add a recipient
        $mail->Subject = 'Confirma tu cuenta';
        
        //Set html

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . " </strong>Has Creado tu cuenta en appsalon, solo debes
        confirmarla presionando el siguiente enlace:</p>";
        $contenido .= "<p>Presiona aquí:<a href='http://localhost:8080/confirmar-cuenta?token=" . $this->token ."'>
        Confirmar cuenta</a></p>";
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;


        //Enviar el mail

        $mail->send();
    }

    public function enviarIntrucciones() {

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'ed1849356dd6a6';
        $mail->Password = '81fbc18a05c954';

        $mail->setFrom('cuentas@appsalon.com');
        $mail->addAddress('cuentas@appsalon.com', 'Appsalon.com');     
        $mail->Subject = 'Restablece tu password';
        
        //Set html

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        
        $contenido = "<html>";
        $contenido .= "<p><strong>Hola " . $this->nombre . " </strong>Has solicitado restablecer tu password, puedes hacerlo
        presionando el siguiente enlace:</p>";
        $contenido .= "<p>Presiona aquí:<a href='http://localhost:8080/recuperar?token=" . $this->token ."'>
        Restablecer password</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= "</html>";

        $mail->Body = $contenido;


        //Enviar el mail

        $mail->send();
    }

}