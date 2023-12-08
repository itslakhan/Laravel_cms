<!-- resources/views/emails/admin_login_mail.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Email</title>
</head>
<body>
    <h2>Admin Login Notification</h2>
    
    <p>Hello {{ $user->email }}</p>
    
    <p>You Have  New Login  </p>
    
    <p>Thank you for using our application!</p>
</body>
</html>
