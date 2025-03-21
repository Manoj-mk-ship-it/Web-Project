<?php
$conn = mysqli_connect('localhost', 'root', 'idk', 'anime');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['sub1']))
    {
        $year = $_POST['animeyear'];
    }

$query = "SELECT animename,year,tv FROM uploads WHERE year = '$year'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border=1 class=tab1>";
    echo "<tr class=row1><th>Anime Name</th><th>Premiered Year</th><th>Category</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class=row2><td class=head1>" . $row['animename'] . "</td><td class=head2>". $row['year'] . "</td><td class=head3>". $row['tv']."</td></tr>";
    }

    echo "</table>";
} else {
    echo "Not Uploaded in year ".$year. " yet";
}

mysqli_close($conn);
?>
<html>
    <title>Person Details</title>
    <body style="background-image: url(catbg.png);background-size: cover;background-attachment: fixed;">
    <style>
        .tab1{
            position: absolute;
            top: 5%;
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
