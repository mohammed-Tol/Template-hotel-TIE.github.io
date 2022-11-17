<?php
    if($_POST){
        $email1 = $_POST['email1'];

        $connect = mysqli_connect('localhost', 'root', '');
        $db = mysqli_select_db($connect, 'contact');

        if ($connect) {
            mysqli_query($connect, "insert into subs values('$email1')");
            header("Location: ./index.html");
            exit();
        } else {
            die("Not connected");
        }
    }

?>