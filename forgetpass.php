<?php
include 'users.php';

$message = ""; // Initialize an empty message

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format.";
    } else {
        // Search for the user by email in the array
        $user_found = false;
        foreach ($user as $id => &$details) {
            if ($details['email'] === $email) {
                $user_found = true;
                $new_pass = '';

                // Generate a 6-character random password
                $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                for ($i = 0; $i < 6; $i++) {
                    $ind = rand(0, strlen($characters) - 1);
                    $new_pass .= $characters[$ind];
                }
                $details['password'] = $new_pass;

                // (Optional) Save the updated user array back to the file
                $user_data = "<?php\n\$user = " . var_export($user, true) . ";\n?>";
                file_put_contents('users.php', $user_data);
                echo"<!DOCTYPE html>
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
                        Password reset successful. Your new password is: $new_pass
                    </div>
                    <script>
                        setTimeout(function() {
                            window.location.href = 'sign.php';
                        }, 3000);
                    </script>
                </body>
                </html>";
                break;
            }
        }

        if (!$user_found) {
            $message = "Email not found.";
        }
    }

   
}
?>
