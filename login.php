<?php
    //Conectamos con la base de datos
    include('connect.php');
    session_start();

    //Obtenemos el usuario y contraseña del inicio de secion
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Preparamos la consulta
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    //obtenemos el resultado de la consulta
    $result = $query->fetch(PDO::FETCH_ASSOC);

    //verificamos si el usuario y contraseña son correctos
    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }

?>