<?php
include 'connection.php';
    // Retrieve the form data

    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query
    $sql = "INSERT INTO users (username, firstname, lastname, gender, email, password) VALUES ('$username','$firstname','$lastname', '$gender','$email','$password')";
   
    // sql execution query
    $sql_query = mysqli_query($db,$sql);

    if (!$sql_query) {
        echo "Eror connecting";
    } else {
        header('Location: index.php');
    }
    
?>
