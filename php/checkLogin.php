<?php
    include_once "../includes/connect.php";

    if(isset($_POST['login_txt']) && isset($_POST['password_txt'])) {
        //dit stuk haalt de data op
        $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $_POST['login_txt'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $_POST['password_txt'], PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();

        var_dump($result);
        if($result == false){
            header("Location: ../login.php");
        } else {
            session_start();
            $_SESSION['username'] = $result['username'];
            $_SESSION['login'] = true;
            header("Location: ../adminMenu.php");
        }
    } else {
        header("Location: ../login.php");
    }
?>