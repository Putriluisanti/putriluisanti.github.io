<?php

// If form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Simulate user validation (replace with actual database connection)
  if ($username === 'admin' && $password === 'password123') {
    // Login successful (redirect to a different page or display success message)
    header('Location: menu.html');
  } else {
    // Login failed (display an error message)
    $errorMessage = 'Invalid username or password.';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section id="login-section" class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card text-center" style="width: 30rem;">
      <div class="card-header">
        <h3 class="card-title">LOGIN</h3>
      </div>
      <div class="card-body">
        <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <?php if (isset($errorMessage)): ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $errorMessage; ?>
            </div>
          <?php endif; ?>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>
  </section>
  <script src="script.js"></script>
</body>
</html>
