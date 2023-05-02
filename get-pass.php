<?php

/*Abrimos la sesión*/
session_start();
include "db_conn.php";

/*Validamos los campos post html*/
if(isset($_POST['emailget']) && isset($_POST['emailvalidate'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /*validamos y pasamos el valor de post en variables*/
    $email_get = validate($_POST['emailget']);
    $email_validate = validate($_POST['emailvalidate']);

    /*Cadena de consulta mediante el correo ingresado*/
    $sql = "SELECT password, name FROM users WHERE email = '$email_get'";
    $result = mysqli_query($conn, $sql);

    /*validamos si existen registros*/
    if (mysqli_num_rows($result) === 1 ){
        $row = mysqli_fetch_assoc($result);
        /*seteo de variables contraseña y usuario*/
        $pass = $row['password'];
        $name_u = $row['name'];

        /* seteamos a quien mandamos el correo */
        $emailto = $email_validate;
        /* titulo del correo */
        $titlemail = "Recuperación de Contraseña";
        /*contenido incluyendo la contraseña, maquetado con html*/
        $message = '<html>'.
        '<head><title>Recuperación de Contraseña</title>
                <style type="text/css">
                h1{
                    color: #ff2e63;
                }
                p{
                    font-size: 1rem;
                }
                img{
                    width: 10rem;
                    height: 10rem;
                }
            </style>       
        </head>'.
        '<body><h1>Hola '. $name_u. '</h1>'.
        'Esta es tu contraseña '. $pass .' Si no la solicitaste ignora este mensaje y ponte en contácto con tu administrador.'.
        '<hr>'.
        'Enviado por Guias De La Salud'.
        '<hr>'.
        '<p>Por favor, no responda este mensaje.</p>'.
        '</body>'.
        '</html>';
        /*definimos la version del MIME*/
        $emailadmin = 'MIME-Version: 1.0' . "\r\n";
        /*tipo de texto html*/
        $emailadmin .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        /*email de origen*/
        $emailadmin .= "From: GuiasDeLaSalud<devcande10@gmail.com>". "\r\n";
        
        /*Si el correo es enviado marca mensaje de exito en el html, de lo contrario marca error*/
        if(mail($emailto,$titlemail,$message,$emailadmin)){
            header("Location: login-form.php?successemail=Correo enviado con éxito, abre tu bandeja e inicia sesión.");
            exit();
        }else{
            header("Location: login-form.php?erroremail=Error, intenta más tarde.");
            exit();
        }
    }else{
        header("Location: login-form.php?errornot=El correo proporcionado no es válido o no ha sido registrado.");
        exit();
    }
}