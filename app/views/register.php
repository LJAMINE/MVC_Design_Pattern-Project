 

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
        <form action="register.php" method="POST">
            <div class="input-group">
                <label for="name">first Name</label>
                <input type="text" id="name" name="firstname" required>
            </div>
            <div class="input-group">
                <label for="name">last  Name</label>
                <input type="text" id="name" name="lastname" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
          
            <div class="input-group">
                <label for="role">Select Role</label>
                <select id="role" name="role" required>
                    <option value="">-- Select Role --</option>
                    <option value="admin">Admin</option>
                    <option value="client">Client</option>
                </select>
            </div>
            <button type="submit">Register</button>
            <p>Already have an account? <a href="signin.php">sign in</a></p>
        </form>
    </div>
</body>
</html>
