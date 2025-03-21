<?php
    $conn = mysqli_connect("localhost", "root", "idk", "anime");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['signup']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
        }

    $query = "INSERT INTO auth VALUES('$username', '$password')";

    if (mysqli_query($conn, $query)) {
        header("Location: Animaniac.html");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>