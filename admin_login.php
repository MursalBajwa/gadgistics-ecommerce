<?php
// Start the session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include the database connection file
include('db_connection.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Validate email and password
    if (!empty($email) && !empty($password)) {
        // Use a prepared statement to fetch data from the admins table
        $sql = $conn->prepare("SELECT id, name, email, password FROM Admins WHERE email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            // Admin match found
            $row = $result->fetch_assoc();
            
            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Set session variables for the admin
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['admin_name'] = $row['name'];
                $_SESSION['login_success'] = true;
                $_SESSION['Is_admin'] = true;

                // Redirect to the admin dashboard (change this to your actual admin page)
                header("Location: admin_dashboard.php");
                exit();
            } else {
                // Invalid password
                $_SESSION['invalid'] = true;
                header("Location: login.php"); // Redirect back to login page
                exit();
            }
        } else {
            // If no admin match is found
            $_SESSION['invalid'] = true;
            header("Location: login.php"); // Redirect back to login page
            exit();
        }

        $sql->close();
    } else {
        echo "Please fill in both fields.";
    }
}

$conn->close();
?>
