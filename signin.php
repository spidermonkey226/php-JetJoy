<?php
session_start();
include 'users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate POST data
    if (!isset($_POST['signin-email']) || !isset($_POST['signin-password'])) {
        echo "Please provide both email and password.";
        exit;
    }

    $email = trim($_POST['signin-email']);
    $password = trim($_POST['signin-password']);

    // Initialize session variables for login data
    if (!isset($_SESSION['login_data'])) {
        $_SESSION['login_data'] = [];
    }

    // Ensure email-specific data exists
    if (!isset($_SESSION['login_data'][$email])) {
        $_SESSION['login_data'][$email] = [
            'attempts' => 0,
            'locked' => false,
            'lock_time' => null
        ];
    }

    // Reference the email's login data
    $login_data = &$_SESSION['login_data'][$email];

    // Check if the account is locked
    if ($login_data['locked']) {
        // Unlock account if 1 minute has passed
        if (time() - $login_data['lock_time'] >= 60) { // 60 seconds
            $login_data['locked'] = false;
            $login_data['attempts'] = 0;
            $login_data['lock_time'] = null;
            echo "Your account is now unlocked. Please try again.";
        } else {
            $remaining_time = 60 - (time() - $login_data['lock_time']);
            echo "Your account is locked. Please try again after $remaining_time seconds.";
            exit;
        }
    }

    // Flag to check if the user is found
    $user_found = false;

    // Loop through users to check for email and password
    foreach ($user as $details) {
        if ($details['email'] === $email) {
            $user_found = true;

            // Verify password
            if ($password === $details['password']) { // Use plain password check since your array has unhashed passwords
                

                $login_data['attempts'] = 0; // Reset attempts
                echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Sign In Success</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f0f0f0;
            }
            .message {
                text-align: center;
                color: green;
                font-size: 24px;
                background: #e7ffe7;
                padding: 20px;
                border: 1px solid green;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <div class='message'>
            You have signed in successfully!<br>Redirecting to home...
        </div>
        <script>
            setTimeout(function() {
                window.location.href = 'toursss.php';
            }, 3000);
        </script>
    </body>
    </html>";
    exit;
            } else {
                $login_data['attempts']++;
                echo "Incorrect password. Attempt " . $login_data['attempts'] . " of 3.<br>";

                // Lock account after 3 failed attempts
                if ($login_data['attempts'] >= 3) {
                    $login_data['locked'] = true;
                    $login_data['lock_time'] = time();
                    echo "Your account is now locked for 1 minute.";
                }
            }
            break; // Exit loop since we found the user
        }
    }

    // If no user is found
    if (!$user_found) {
        echo "Email not found.";
    }
} else {
    echo "Invalid request method.";
}
?>
