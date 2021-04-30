<?php
include "./setting/connection.php";
include "./setting/functions.php";
$askStudents = $db->prepare("SELECT * FROM students");
$askStudents->execute();
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
            <li><a class="active" href="form.php">Add New Student</a></li>
        </ul>
    </nav>

    <div class="table">
        <table class="styled-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Grade</th>
                    <th>Letter Grade</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php

                $count = 1;

                while ($getStudents = $askStudents->fetch(PDO::FETCH_ASSOC)) {
                    $say++ ?>
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $getStudents['student_name']; ?></td>
                        <td><?php echo $getStudents['student_surname']; ?></td>
                        <td><?php echo $getStudents['student_email']; ?></td>
                        <td><?php echo $getStudents['student_phone']; ?></td>
                        <td><?php echo $getStudents['student_grade']; ?></td>
                        <td><?php echo calculateLetterGrade($getStudents['student_grade']); ?></td>
                        <td><a class="update" href="form.php?id=<?php echo $getStudents['student_id'] ?>">Update</a></td>
                        <td><a class="delete" href="./setting/operations.php?id=<?php echo $getStudents['student_id'] ?>&delete=ok">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>