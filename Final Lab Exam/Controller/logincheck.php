<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_example";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM employers WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {
        echo "<script>
                alert('Login successful! Welcome');
                window.location.href='../View/Admin.html';
              </script>";
    } 
    
    else 
    {
        echo "<script>
                alert('Invalid password.');
                window.location.href='../View/login.html';
              </script>";
    }
} 

else 
{
    echo "<script>
            alert('No user found with username: $username');
            window.location.href='../View/login.html';
          </script>";
}

$conn->close();

?>
