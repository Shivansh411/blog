<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog | Login</title>
    {{-- <link rel="stylesheet" href="styles.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

/* Login Container */
.login-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 450px;
    padding: 40px;
}

.login-header {
    text-align: center;
    margin-bottom: 30px;
}

.login-header h1 {
    color: #333;
    font-size: 28px;
    margin-bottom: 10px;
}

.login-header p {
    color: #666;
    font-size: 14px;
}

/* Form Styles */
.login-form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-size: 14px;
    font-weight: 500;
}

.input-with-icon {
    position: relative;
    display: flex;
    align-items: center;
}

.input-with-icon i {
    position: absolute;
    left: 15px;
    color: #777;
}

.input-with-icon input {
    width: 100%;
    padding: 12px 15px 12px 45px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.input-with-icon input:focus {
    outline: none;
    border-color: #4a90e2;
}

.toggle-password {
    position: absolute;
    right: 15px;
    cursor: pointer;
    color: #777;
}

.forgot-password {
    text-align: right;
    margin-top: 8px;
}

.forgot-password a {
    color: #4a90e2;
    font-size: 13px;
    text-decoration: none;
}

.forgot-password a:hover {
    text-decoration: underline;
}

/* Button Styles */
.login-button {
    background-color: #4a90e2;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 6px;
    font-size: 16px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 10px;
}

.login-button:hover {
    background-color: #3a7bc8;
}

/* Social Login */
.social-login {
    margin: 25px 0;
    text-align: center;
}

.social-login p {
    color: #777;
    font-size: 14px;
    margin-bottom: 15px;
    position: relative;
}

.social-login p::before,
.social-login p::after {
    content: "";
    position: absolute;
    height: 1px;
    width: 30%;
    background-color: #ddd;
    top: 50%;
}

.social-login p::before {
    left: 0;
}

.social-login p::after {
    right: 0;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: transform 0.3s;
}

.social-icon:hover {
    transform: translateY(-3px);
}

.social-icon.google {
    background-color: #db4437;
}

.social-icon.twitter {
    background-color: #1da1f2;
}

.social-icon.github {
    background-color: #333;
}

/* Signup Link */
.signup-link {
    text-align: center;
    color: #666;
    font-size: 14px;
}

.signup-link a {
    color: #4a90e2;
    text-decoration: none;
    font-weight: 500;
}

.signup-link a:hover {
    text-decoration: underline;
}

/* Responsive */
@media (max-width: 480px) {
    .login-container {
        padding: 30px 20px;
    }
}
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Welcome Back</h1>
            <p>Log in to access your blog dashboard</p>
        </div>
        
        <form id="loginForm" class="login-form">
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-with-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-with-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <span class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <div class="forgot-password">
                    <a href="/forgot-password">Forgot password?</a>
                </div>
            </div>
            
            <button type="submit" class="login-button">Log In</button>
            
            <div class="social-login">
                <p>Or log in with</p>
                <div class="social-icons">
                    <a href="#" class="social-icon google"><i class="fab fa-google"></i></a>
                    <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon github"><i class="fab fa-github"></i></a>
                </div>
            </div>
            
            <div class="signup-link">
                Don't have an account? <a href="/signup">Sign up</a>
            </div>
        </form>
    </div>

    {{-- <script src="script.js"></script> --}}

    <script>
        // Toggle password visibility
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.querySelector('.toggle-password i');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

// Form submission
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    // Here you would typically send this data to your server
    console.log('Login attempt with:', { email, password });
    
    // For demo purposes, just show an alert
    alert('Login functionality would be implemented here.\nCheck console for submitted data.');
    
    // In a real app, you would do something like:
    // fetch('/api/login', {
    //     method: 'POST',
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify({ email, password })
    // })
    // .then(response => response.json())
    // .then(data => {
    //     if (data.success) {
    //         window.location.href = '/dashboard';
    //     } else {
    //         showError(data.message);
    //     }
    // });
});

// Function to show error messages (you can implement this)
function showError(message) {
    // Create or show an error element with the message
    console.error('Login error:', message);
}
    </script>
</body>
</html>