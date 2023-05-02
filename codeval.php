<?php
/*abrimos la sesión*/
session_start();
/*incluimos el archivo de conexión*/
include "db_conn.php";

/*validamos los campos enviados en el post*/
if (isset($_POST['emailOrUname']) && isset($_POST['codigo'])) {

    /*Validamos los datos recibidos*/
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /*Seteamos el dato en variables*/
    $uname = validate($_POST['emailOrUname']);
    $pass = validate($_POST['codigo']);

    /*Se valida si son strings vacíos*/
    if(empty($uname)){
        header("Location: validated-code.php?error=El Correo Es Requerido");
        exit();

    }else if(empty($pass)){
        header("Location: validated-code.php?error=El código no es válido");
        exit();
    }else{
        /*Se manda la cadena de consulta*/
        $sql = "SELECT * FROM users WHERE email = '$uname' AND code = '$pass'";

        /*se valida la consulta y se agrega la cadena de conexión*/
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1 ){
            $row = mysqli_fetch_assoc($result);
            $name_u = $row['name'];
            if($row['email'] === $uname && $row['code'] === $pass){
                
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];

                header("Location: index.php?success=$name_u");
                exit();
            }else{
                header("Location: validated-code.php?error=Los datos no coinciden");
                exit();
            }

        }else{
            header("Location: validated-code.php?error=El código o el correo no es válido");
            exit();
        }
    }

}else{
    header("Location: login-form.php?error=No se pudo iniciar sesión, intentalo de nuevo.");
    exit();
}