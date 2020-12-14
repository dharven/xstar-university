<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href=" images/favicon.ico" type="image/x-icon" />
    <title>Admin</title>
    <style>

    table  {
    border-collapse: collapse;
    font-family: arial, sans-serif;
    width: 100%;
    color: #588c7e;
    font-size: 16px;
    text-align: left;
    }
    table:nth-child(2n) {
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
<th>username</th>
<th>password</th>
<th>Delete</th>
</tr>
<Td><a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td><?php

echo "</Tr>";
$i++;

		?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xstar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT uname, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> ". $row["uname"]. "</td><td>". $row["password"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
<br>
<p>Click here to <a href="index.html" tite="Logout">Go back.</a></p>
</table>
<table>
<tr>
<th>Updates</th>
<th>Notes</th>
<th>Links</th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xstar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
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
} else {
    echo "0 results";
}

$conn->close();
?>
</table>
<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
</tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xstar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email, subject, message FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"] . "</td><td>" . $row["subject"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</table>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
</body>
</html>
