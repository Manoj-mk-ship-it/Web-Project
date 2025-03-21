<?php
$conn = mysqli_connect('localhost', 'root', 'idk', 'webcat');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['details']))
    {
        $rname = $_POST['dname'];
    }

$query = "SELECT name,place,birth FROM person WHERE name = '$rname'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border=1 class=tab1>";
    echo "<tr class=row1><th>Name</th><th>D.O.B</th><th>Place</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class=row2><td class=head1>" . $row['name'] . "</td><td class=head2>". $row['birth'] . "</td><td class=head3>". $row['place']."</td></tr>";
    }

    echo "</table>";
} else {
    echo "Person Not Found";
}

mysqli_close($conn);
?>
<html>
    <title>Person Details</title>
    <body style="background-image: url(catbg1.jpg);background-size: cover;background-attachment: fixed;">
    <style>
        .tab1{
            position: absolute;
            top: 30%;
            left: 10%;
            border-color: black;
        }
        .row1{
            color: white;
        }
        .row2{
            color: white;
            font-size: x-large;
        }
        .head1{
            padding: 18px;
        }
        .head2{
            padding: 18px;
        }
        .head3{
            padding: 18px;
        }
    </style>
</html>
