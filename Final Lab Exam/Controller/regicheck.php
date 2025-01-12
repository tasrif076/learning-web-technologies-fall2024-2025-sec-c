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

$employer_name = $_POST['employer_name'];
$company_name = $_POST['company_name'];
$contact_no = $_POST['contact_no'];
$username = $_POST['username'];
$password = $_POST['password']; 
$sql = "INSERT INTO employers (employer_name, company_name, contact_no, username, password) 
        VALUES ('$employer_name', '$company_name', '$contact_no', '$username', '$password')";

if ($conn->query($sql)) {
    echo "<script>
            alert('Registration successful!');
            window.location.href='../View/login.html';
          </script>";
} 

else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
