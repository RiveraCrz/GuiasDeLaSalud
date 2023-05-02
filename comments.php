<?php

/*Se abre la sesión*/
session_start();
include "db_conn.php";

if(isset($_POST['name']) && isset($_POST['comment'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        $nombre = validate($_POST['name']);
        $comentario = validate($_POST['comment']);

        if(empty($nombre)){
            header("Location: nosotros.php?error=El Nombre Es Requerido");
            exit();
    
        }else if(empty($comentario)){
            header("Location: nosotros.php?error=El Comentario Es Requerido");
            exit();

        }else {
            
                $sql = "INSERT INTO comentarios (nombre, comentario) VALUES ('$nombre','$comentario');";

                $result = mysqli_query($conn, $sql);
                header("Location: nosotros.php?success=Comentario agregado");
                exit();
            }
}
