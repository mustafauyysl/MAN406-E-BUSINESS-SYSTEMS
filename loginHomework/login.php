<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="wrap">
        <form class="login-form" action="./settings/functions.php" method="POST">
            <div class="form-header">
                <h3>Login Form</h3>
                <p>Login to access your dashboard</p>
            </div>
            <?php if ($_GET['status'] === 'no') { ?>
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>Error!</strong> There is no account
                </div>
            <?php } ?>
            <div class="form-group">
                <input type="text" name="firstName" class="form-input" required placeholder="Firstname">
            </div>
            <div class="form-group">
                <input type="text" name="lastName" class="form-input" required placeholder="Lastname">
            </div>
            <div class="form-group">
                <input type="text" name="userName" class="form-input" required placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-input" required placeholder="Password">
            </div>
            <div class="form-group">
                <button class="form-button" name="login" type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html>