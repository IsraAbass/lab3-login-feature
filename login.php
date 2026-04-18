<?php
// login.php - VULNERABLE VERSION (DO NOT USE IN PRODUCTION)

// Issue 1: No input validation
$username = $_POST['username'];
$password = $_POST['password'];

// Issue 2 & 3: Unsafe query construction + SQL injection risk
$query = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";

// Issue 4: No error handling
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    echo "Login successful! Welcome " . $username;
} else {
    echo "Invalid credentials";
}
?>
