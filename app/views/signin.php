 
<?php
require_once '../../vendor/autoload.php'; 

use App\Config\Database;

try {
    $conn = Database::connect();
    echo "Database connection successful!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

Database::disconnect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../public/assests/style.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="login.php" method="POST">
           
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
           
            <button type="submit">sign in</button>
            <p>you don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>
