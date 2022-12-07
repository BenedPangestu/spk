<?php 
    $servername = 'localhost';
    $database = 'db_spk';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($servername, $username, $password, $database);

    // if (!$conn) {
    //     die("Connection Failed! : ".mysqli_connect_error());
    // }
    // echo "Connection succesfully!";
    // mysqli_close($conn);
?>