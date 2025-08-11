<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "website_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch comments from the database
$sql = "SELECT * FROM comments ORDER BY created_at DESC"; // Assuming you have a 'created_at' timestamp
$result = $conn->query($sql);

// Output the comments
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li class='comment'>
                <p><strong class='commentname'>" . htmlspecialchars($row['Com_name']) . "</strong class='commentemail'> (" . htmlspecialchars($row['Com_email']) . ")</p>
                <p class='commentsubject'><strong class='commentsubjectheading'>Subject: </strong>" . htmlspecialchars($row['Com_subject']) . "</p>
                <p class='commenttext'>" . htmlspecialchars($row['Com_describtion']) . "</p>
              </li>";
    }
} else {
    echo "No comments yet.";
}

$conn->close();
?>
