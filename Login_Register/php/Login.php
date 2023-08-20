<?php
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Replace with your own login logic
	if ($username == 'admin' && $password == 'password') {
		// Login success, redirect to dashboard page
		$_SESSION['username'] = $username;
		header('Location: dashboard.php');
		exit;
	} else {
		// Login failed, show error message
		$error_message = "Invalid username or password";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<?php if (isset($error_message)): ?>
		<p><?php echo $error_message; ?></p>
	<?php endif; ?>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<input type="submit" value="Login">
