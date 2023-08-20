function validateForm() {
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var confirmPassword = document.getElementById("confirm-password").value;
	var email = document.getElementById("email").value;

	if (username.trim() == "") {
		alert("Username is required");
		return false;
	}

	if (password.trim() == "") {
		alert("Password is required");
		return false;
	}

	if (confirmPassword.trim() == "") {
		alert("Confirm Password is required");
		return false;
	}

	if (password != confirmPassword) {
		alert("Passwords do not match");
		return false;
	}

	if (email.trim() == "") {
		alert("Email is required");
		return false;
	}

	return true;
}
