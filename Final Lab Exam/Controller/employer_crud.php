<?php
include('../Model/db.php');

$action = $_POST['action'];

// Create: Insert data
if ($action === 'create') {
    $employer_name = $_POST['employer_name'];
    $company_name = $_POST['company_name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $sql = "INSERT INTO employers (employer_name, company_name, contact_no, username, password) 
            VALUES ('$employer_name', '$company_name', '$contact_no', '$username', '$password')";
    echo $conn->query($sql) ? "Employer added successfully" : "Error: " . $conn->error;
}

// Read: Fetch all data
if ($action === 'read') {
    $sql = "SELECT id, employer_name, company_name, contact_no, username, password FROM employers";
    $result = $conn->query($sql);
    $output = "<table border='1'><tr><th>ID</th><th>Employer Name</th><th>Company Name</th><th>Contact No</th><th>Username</th><th>Password</th></tr>";
    while ($row = $result->fetch_assoc()) {
        $output .= "<tr>
            <td>{$row['id']}</td>
            <td>{$row['employer_name']}</td>
            <td>{$row['company_name']}</td>
            <td>{$row['contact_no']}</td>
            <td>{$row['username']}</td>
            <td>{$row['password']}</td>
        </tr>";
    }
    $output .= "</table>";
    echo $output ?: "No employers found.";
}

// Search: Fetch data by ID
if ($action === 'search') {
    $id = (int)$_POST['id']; 

    $sql = "SELECT id, employer_name, company_name, contact_no, username, password
            FROM employers 
            WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<table border='1'>
                <tr><th>ID</th><td>{$row['id']}</td></tr>
                <tr><th>Employer Name</th><td>{$row['employer_name']}</td></tr>
                <tr><th>Company Name</th><td>{$row['company_name']}</td></tr>
                <tr><th>Contact No</th><td>{$row['contact_no']}</td></tr>
                <tr><th>Username</th><td>{$row['username']}</td></tr>
                <tr><th>Password</th><td>{$row['password']}</td></tr>
              </table>";
    } else {
        echo "No employer found with ID: $id";
    }
}

// Update: Edit data
if ($action === 'update') {
    $id = $_POST['id'];
    $employer_name = $_POST['employer_name'];
    $company_name = $_POST['company_name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $sql = "UPDATE employers SET 
                employer_name='$employer_name', 
                company_name='$company_name', 
                contact_no='$contact_no', 
                username='$username', 
                password='$password' 
            WHERE id=$id";
    echo $conn->query($sql) ? "Employer updated successfully" : "Error: " . $conn->error;
}

// Delete: Remove data
if ($action === 'delete') {
    $id = $_POST['id'];
    $sql = "DELETE FROM employers WHERE id=$id";
    echo $conn->query($sql) ? "Employer deleted successfully" : "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
