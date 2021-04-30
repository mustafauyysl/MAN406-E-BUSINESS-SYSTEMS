<?php

include "./setting/connection.php";

$askStudent = $db->prepare("SELECT * FROM students where student_id=:id");
$askStudent->execute(array(
    'id' => $_GET['id']
));

$getStudent = $askStudent->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAN406 Students</title>
    <link rel="stylesheet" href="./css//style.css" />
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">MAN406 Students</label>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
        </ul>
    </nav>

    <div class="wrap">
        <form class="login-form" action="./setting/operations.php" method="POST">
            <h1>Add New Student</h1>
            <div class="form-group">
                <input type="text" name="name" class="form-input" required placeholder="Name" value="<?php echo $getStudent['student_name'] ?>">
            </div>
            <div class="form-group">
                <input type="text" name="surname" class="form-input" required placeholder="Surname" value="<?php echo $getStudent['student_surname'] ?>">
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-input" required placeholder="Email" value="<?php echo $getStudent['student_email'] ?>">
            </div>
            <div class="form-group">
                <input type="text" name="phone" class="form-input" required placeholder="Phone" value="<?php echo $getStudent['student_phone'] ?>">
            </div>
            <div class="form-group">
                <input type="text" name="grade" class="form-input" required placeholder="Grade (ex. 95)" value="<?php echo $getStudent['student_grade'] ?>">
            </div>
            <div class="form-group">
                <input type="hidden" name="student_id" class="form-input" required placeholder="Grade (ex. 95)" value="<?php echo $getStudent['student_id'] ?>">
            </div>
            <div class="form-group">
                <button class="form-button" <?php if ($_GET['id']) { ?> name="update" <?php } else { ?> name="add" <?php } ?> name="add" type="add"><?php if ($_GET['id']) { ?> Update <?php } else { ?> Add <?php } ?></button>
            </div>
        </form>
    </div>

</body>

</html>