<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link your custom CSS file -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text-center mb-4">User Login</h1>
        <!-- Bootstrap form -->
        <form action="login.php" method="POST" class="p-4 bg-white rounded shadow">
            <div class="form-group">
                <label for="login-username">Username</label>
                <input type="text" class="form-control" id="login-username" name="login-username" required>
            </div>
            <div class="form-group">
                <label for="login-password">Password</label>
                <input type="password" class="form-control" id="login-password" name="login-password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        
        <!-- Link to the Sign-in Page -->
        <p class="text-center mt-3">Don't have an account? <a href="signup.html">Sign up here</a></p>
    </div>
</body>
</html>
