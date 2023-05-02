<?php

/*abrimos la sesión*/
session_start();
include "db_conn.php";

/*validamos todos los campos*/
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['number-guests']) && isset($_POST['date']) && isset($_POST['time']) && isset($_POST['message'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /*seteamos el valor de los componentes post html en variables*/
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $num_guest = validate($_POST['number-guests']);
    $date = validate($_POST['date']);
    $times = validate($_POST['time']);
    $messa = validate($_POST['message']);

    /*validamos que los datos no vayan vacios de lo contrario inserta datos en la tabla contactanos*/
    if(empty($name) || empty($email) || empty($phone) || empty($num_guest) || empty($date) || empty($times) || empty($messa)){
        header("Location: index.php?errorcontact=Todos los campos son requeridos.");
            exit();
    }else{
        $sql = "INSERT INTO contactanos (nombre_completo, email, number_phone, num_guests, date_consult, reason, message) VALUES ('$name','$email','$phone','$num_guest','$date', '$times', '$messa');";

                $result = mysqli_query($conn, $sql);
                header("Location: index.php?successcontact=¡Datos Enviados!");
                exit();
    }

}