<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Hotel Front Desk System (projection)</h1>
    <?php include "navigator.php" ?>

    <br>
    <table>

        <thead>
        <th>customerCheckInNum</th>
        <th>paymentType</th>
        </thead>

<?php
include 'connect.php';

$conn = OpenCon();
$sql = "SELECT customerID,paymentType FROM
    customerCheckinOut";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     //echo "<table><tr><th class='border-class'>customerID</th>
     //<th class='border-class'>paymentType</th></tr>";

     // output data of each row
     while($row = $result->fetch_assoc()) { echo
     "<tr><td class='border-
class'>".$row["customerID"]."</td><td
class='border-
class'>".$row["paymentType"]."</td></tr>";
}
     echo "</table>";
} else {
echo "0 results"; }
CloseCon($conn);
?>
</table>
<br>
<br>
<card>find the customer checkin in number and their paymentType</card>
<br>
<br>

<a href="projectionChoice.php">Return to Projection</a>
