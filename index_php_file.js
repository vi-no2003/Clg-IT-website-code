function validateForm() {
    // Get the values of username and password input fields
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Simple validation to check if the fields are not empty
    if (username.trim() === '') {
        alert('Username cannot be empty');
        return false;
    }

    if (password.trim() === '') {
        alert('Password cannot be empty');
        return false;
    }

    // Additional validation logic can be added here, such as checking for password strength, etc.

    // If everything is valid, the form will be submitted
    return true;
}
