<?php
ob_start();
session_start();
include "./settings/connection.php";


$query = $db->prepare("SELECT * FROM users where USERNAME=:userName");
$query->execute(array(
    'userName' => $_SESSION['userName']
));
$isUser = $query->rowCount();
$getUser = $query->fetch(PDO::FETCH_ASSOC);

if ($isUser == 0) {
    Header("Location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <div class="wrap">
        <h1>Welcome <?php echo $getUser['F_NAME'] . " " . $getUser['L_NAME'] ?> :)</h1>
        <form action="./logout.php" method="POST">
            <button class="form-button" name="login" type="submit">Logout</button>
        </form>
    </div>

</body>

</html>