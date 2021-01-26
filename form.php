<?php
include("conection.php");

    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $email= $_POST["email"];
    $comentarios= $_POST["comentarios"];

        $sql= "INSERT into contactos(nombre, apellido, email, comentarios) values (:nombre,:apellido,:email,:comentarios)";
        $sql = $conn->prepare($sql);
        $sql->bindParam(':nombre',$nombre,PDO::PARAM_STR, 25);
        $sql->bindParam(':apellido',$apellido,PDO::PARAM_STR, 25);
        $sql->bindParam(':email',$email,PDO::PARAM_STR,25);
        $sql->bindParam(':comentarios',$comentarios,PDO::PARAM_STR,25);
        
        $sql->execute();
        
?>