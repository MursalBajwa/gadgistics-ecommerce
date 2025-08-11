<?php
// Start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Validate email and password
    if (!empty($email) && !empty($password)) {
        // Use a prepared statement
        $sql = $conn->prepare("SELECT Cust_id, Cust_name , Cust_password, Role FROM customer WHERE Cust_email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $row['Cust_password'])) {
                // Set session variables
                $_SESSION['user_id'] = $row['Cust_id'];
                $_SESSION['user_name'] = $row['Cust_name'];
                $_SESSION['user_email'] = $email;
                $_SESSION['login_success'] = true;

                // Check if user is an admin
                if ($row['Role'] == 'admin') {
                    $_SESSION['is_admin'] = true;
                    header("Location: admin.php");
                    exit();
                }

                $_SESSION['is_admin'] = false;
                // Redirect to the appropriate page
                header("Location: Webpage 3.0.php");
                exit();
            } else {
                // Invalid password
                $_SESSION['invalid'] = true;
                header("Location: Webpage 3.0.php");
                exit();
            }
        } else {
            // No matching user found
            $_SESSION['invalid'] = true;
            header("Location: Webpage 3.0.php");
            exit();
        }

        $sql->close();
    } else {
        echo "Please fill in all fields.";
    }
}

$conn->close();
?>
