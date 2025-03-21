<?php
$conn = mysqli_connect('localhost', 'root', 'idk', 'webcat');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['details']))
    {
        $rno = $_POST['dno'];
    }

$query = "SELECT aadhname,aadhno,aadhbirth,fathername,phn FROM aadhar WHERE aadhno = $rno";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border=1 class=tab1>";
    echo "<tr class=row1><th>Name</th><th>Aadhar No</th><th>D.O.B</th><th>Father Name</th><th>Phone No</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class=row2><td class=head1>" . $row['aadhname'] . "</td><td class=head2>". $row['aadhno'] . "</td><td class=head3>". $row['aadhbirth']."</td><td class=head4>".$row['fathername']."</td><td class=head5>".$row['phn']. "</td></tr>";
    }

    echo "</table>";
} else {
    echo "Aadhar Not Found";
}

mysqli_close($conn);
?>
<html>
    <title>Aadhar Details</title>
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
        .head4{
            padding: 18px;
        }
        .head5{
            padding: 18px;
        }
    </style>
</html>