<?php
if (session_status() === PHP_SESSION_NONE) {
									    session_start();
									}
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "website_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate fields
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['dob'])) {
        $name = $conn->real_escape_string($_POST['name']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']); // Sanitize password input
        $dob = $conn->real_escape_string($_POST['dob']);

        // Check for duplicate email
        $checkSql = $conn->prepare("SELECT Cust_email FROM customer WHERE Cust_email = ?");
        $checkSql->bind_param("s", $email);
        $checkSql->execute();
        $checkResult = $checkSql->get_result();

        if ($checkResult->num_rows > 0) {
  
            header("Location: Webpage 3.0.php?duplicate=true");
            exit();
        }

        // Hash the password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // SQL query using prepared statements
        $sql = $conn->prepare("INSERT INTO customer (Cust_name, Cust_email, Cust_password, Cust_dob) VALUES (?, ?, ?, ?)");
        $sql->bind_param("ssss", $name, $email, $passwordHash, $dob);        

        // Execute the query
        if ($sql->execute()) {
            $_SESSION['signup_success'] = true;
            header("Location: Webpage 3.0.php?signup=true");
            exit();
        } else {
            header("Location: Webpage 3.0.php?signup=false");
            exit();
        }

        $sql->close(); // Close prepared statement
    } 
}

// Close the connection
$conn->close();
?>
