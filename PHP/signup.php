<?php
    try{
        $conn = mysqli_connect('localhost', 'root', '', 'formulario');
    }catch(SQLException $e){
        echo "Database connection error: " . $e->getMessage();
    }
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retype_password = $_POST['retype_password'];
    $hashed_password = md5($password);

    $sql = "INSERT INTO user(id, username, email, hash_password, createdAt) VALUES(NULL, '$username', '$email', '$hashed_password', CURRENT_TIMESTAMP())";

    if($password == $retype_password){
        $result = mysqli_query($conn, $sql);
        header("Location: ../HTML/login.html");
    }else{
        echo "Data insertion error into database";
    }

    $conn -> close();

?>