<?php
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	// Replace with your own registration logic
	// Check if username or email already exists
	if ($username == 'admin') {
		$error_message = "Username already exists";
	} elseif ($email == 'admin@example.com') {
		$error_message = "Email already
