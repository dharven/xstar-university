

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href=" images/favicon.ico" type="image/x-icon" />
    <title>Home</title>
    <style>
table {
border-collapse: collapse;
font-family: arial, sans-serif;
width: 100%;
color: #588c7e;
font-size: 16px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
p {text-align: center;}
</style>
</head>
<body bgcolor= #e9ecef>
<br>
<h1 align="center">Welcome! </h1>
<p style="font-size:25px">Here you will get all the latest updates from the University.</p>
<table>
<tr>
<th>Updates</th>
<th>Notes</th>
<th>Links</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "xstar");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT updates, notes, links FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["updates"]. "</td><td>" . $row["notes"] . "</td><td>" . $row["links"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<br>
<p>Click here to <a href="index.html" tite="Logout">Go back.</a></p>
</table>
</body>
</html>
