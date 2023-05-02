<?php
/*abrimos la sesión*/
session_start();
/*incluimos el archivo de conexión*/
include "db_conn.php";

/*validamos los campos enviados en el post*/
if (isset($_POST['uname']) && isset($_POST['password'])) {

    /*Validamos los datos recibidos*/
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /*Seteamos el dato en variables*/
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    $ip = $_SERVER["REMOTE_ADDR"];
    $captcha = $_POST['g-recaptcha-response'];
    $secretKey = '6Ld1VSglAAAAAAlGrA2q-qXDzb9EL8lJ5qS65knP';

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha&remoteip=$ip");

    $atributos = json_decode($response, TRUE);

    /*Se valida si son strings vacíos*/
    if(empty($uname)){
        header("Location: login-form.php?error=El Correo Es Requerido");
        exit();

    }else if(empty($pass)){
        header("Location: login-form.php?error=La Contrasena Es Requerida");
        exit();
        
    }else if(!$atributos['success']){
        header("Location: login-form.php?error=Por favor, válida el captcha");
        exit();
    }else{
        /*Se manda la cadena de consulta*/
        $sql = "SELECT * FROM users WHERE email = '$uname' AND password = '$pass' Or name = '$uname' And password = '$pass'";

        /*se valida la consulta y se agrega la cadena de conexión*/
        $result = mysqli_query($conn, $sql);

        /*se valida si el registro existe o se encuentra*/
        if (mysqli_num_rows($result) === 1 ){
            $row = mysqli_fetch_assoc($result);
            $name_u = $row['name'];
            if($row['email'] === $uname && $row['password'] === $pass){
                
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                
                function generarCodigo($longitud) {
                    $key = '';
                    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
                    $max = strlen($pattern)-1;
                    for($i=0;$i < $longitud;$i++) $key .= $pattern[mt_rand(0,$max)];
                    return $key;
                }   
                $num_result =generarCodigo(10);

                $sql = "UPDATE users SET code = '$num_result' WHERE email = '$uname'";
                $result = mysqli_query($conn, $sql);
                
                $sql = "SELECT code FROM users WHERE email = '$uname'";
                $result = mysqli_query($conn, $sql);

                If (mysqli_num_rows($result) === 1){
                    $row = mysqli_fetch_assoc($result);
                    $codigo = $row['code'];

                    $emailto = $uname;
                    /* titulo del correo */
                    $titlemail = "Validación Dos Pasos";
                    /*contenido incluyendo la contraseña, maquetado con html*/
                    $message = '<html>'.
                    '<head><title>Código de Validación</title>
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
                    '<body><h1>Hola Admin</h1>'.
                    'Este es tu código de validación '. $codigo .' Si no lo solicitaste ignora este mensaje y ponte en contácto con tu administrador.'.
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
                        header("Location: validated-code.php?emailOrUname=$uname");
                        exit();
                    }else{
                        header("Location: validated-code.php?erroremail=Error, intenta más tarde.");
                        exit();
                    }
                }else{
                    header("Location: validated-code.php?emailOrUname=$uname");
                    exit();
                }
 
            }else{
                header("Location: login-form.php?error=El usuario o contrasena es incorrecto.");
                exit();
            }

        }else {
            header("Location: login-form.php?error=Datos Invalidos O No Existen");
        exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}
