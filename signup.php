<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Signup Page</title>
</head>
<body>
    <div class="login-container">
        <form action="signup_process.php" method="post">
            <h1>Sign Up</h1>
            <label for="id">Id</label>
            <input type="text" name="id" required>
            
            <label for="name">Name</label>
            <input type="text" name="name" required>

            <label for="password">Password</label>
            <input type="password" name="password" required>

            <label for="phone">Phone Number</label>
            <input type="number" name="phone" required>

            <label for="email">email</label>
            <input type="text" name="email" required>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
