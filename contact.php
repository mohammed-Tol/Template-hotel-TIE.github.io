<?php
    if ($_POST) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $connect = mysqli_connect('localhost', 'root', '');
        $db = mysqli_select_db($connect, 'contact');

        if ($connect) {
            mysqli_query($connect, "insert into users values('$name', '$email', '$phone', '$message')");
                header("Location: ./index.html");
                exit();
        } else {
            die("Not connected");
        }
    }
?>