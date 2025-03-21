<?php
    $conn = mysqli_connect("localhost", "root", "idk", "anime");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    $query = "SELECT * FROM auth WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        header("Location: Animaniac.html");
    } else {
        echo "Invalid username or password.";
    }

    mysqli_close($conn);
?>