<?php?>
<link rel="stylesheet" href="stylesign.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<div class="container" id="container">
    <div class="form-container sign-up">
        <form method="POST" action="signup_json.php">
            <h1>Create Account</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="bi bi-google"></i></a>
                <a href="#" class="icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="icon"><i class="bi bi-apple"></i></a>
                <a href="#" class="icon"><i class="bi bi-linkedin"></i></a>
            </div>
            <span>or use your email for registeration</span>
            <input type="text" id="fname" name="fname" placeholder="First Name">
            <span id="fname-error" class="error-message"></span>
            <input type="text" id="lname" name="lname" placeholder="Last Name" />
            <span id="lname-error" class="error-message"></span>
            <input type="text" id="phone" name="phone" placeholder="Phone Number" />
            <span id="phone-error" class="error-message"></span>
            <input type="email" id="email" name="email" placeholder="Email">
            <span id="email-error" class="error-message"></span>
            <input type="password" name="psw" placeholder="Password">
            <span id="password-error" class="error-message"></span>
            <button id="signup-button" name="signup">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in">
        <form method="POST" action="signin.php">
            <h1>Sign In</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="bi bi-google"></i></a>
                <a href="#" class="icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="icon"><i class="bi bi-apple"></i></a>
                <a href="#" class="icon"><i class="bi bi-linkedin"></i></a>
            </div>
            <span>or use your email password</span>
            <input type="email" id="signin-email" name="signin-email" placeholder="Email">
            <input type="password" id="signin-password"  name="signin-password" placeholder="Password">
            <a href="#">Forget Your Password?</a>
            <button id="myButton" >Sign In</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use all of site features</p>
                <button class="hidden" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hello, Friend!</h1>
                <p>Register ith your personal details to use all of site features</p>
                <button class="hidden" id="register">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script src="signscript.js"></script>
<script src="detalisCheck.js"></script>