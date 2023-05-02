<?php

/*Se abre la sesión*/
session_start();
include "db_conn.php";

if(isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        $email = validate($_POST['email']);
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);

        if(empty($email)){
            header("Location: new-user.php?error=El Correo Es Requerido");
            exit();
    
        }else if(empty($uname)){
            header("Location: new-user.php?error=El Usuario Es Requerido");
            exit();

        }else if(empty($pass)){
            header("Location: new-user.php?error=La Contraseña Es Requerida");
            exit();

        }else {
            /*Consulta sql para mysql*/
            $sql = "SELECT * FROM users WHERE email = '$email'";

            $result = mysqli_query($conn, $sql);
            /*Si el correo ya existe manda mensaje de error*/
            if (mysqli_num_rows($result) === 1 ){
                header("Location: new-user.php?error=Este correo ya está registrado");
                exit();
            }else{
                /*Si el usuario es nuevo, inserta los datos a MySql*/
                $sql = "INSERT INTO users (email, password, if_remember, name, code) VALUES ('$email','$pass','0','$uname', '');";

                $result = mysqli_query($conn, $sql);
                header("Location: register-success.php?success=Usuario registrado correctamente, por seguridad vuelve a iniciar sesión.");
                exit();
            }
        }
}
