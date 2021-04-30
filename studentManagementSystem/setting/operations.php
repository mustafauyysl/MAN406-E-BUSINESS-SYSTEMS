<?php
include "connection.php";

// Add Students

if (isset($_POST['add'])) {

    $addStudent = $db->prepare("INSERT INTO students SET
		student_name=:student_name,
		student_surname=:student_surname,
		student_email=:student_email,
		student_phone=:student_phone,
		student_grade=:student_grade
		");

    $insert = $addStudent->execute(array(
        'student_name' => $_POST['name'],
        'student_surname' => $_POST['surname'],
        'student_email' => $_POST['email'],
        'student_phone' => $_POST['phone'],
        'student_grade' => $_POST['grade']
    ));

    if ($insert) {

        Header("Location:../index.php?status=ok");
    } else {

        Header("Location:../add.php?status=no");
    }
}

// Delete Students

if ($_GET['delete'] == "ok") {

    $delete = $db->prepare("DELETE from students where student_id=:student_id");
    $control = $delete->execute(array(
        'student_id' => $_GET['id']
    ));

    if ($control) {

        Header("Location:../index.php?delete=ok");
    } else {

        Header("Location:../index.php?delete=no");
    }
}

// Update Students


if (isset($_POST['update'])) {

    $save = $db->prepare("UPDATE students SET
        student_name=:student_name,
		student_surname=:student_surname,
		student_email=:student_email,
		student_phone=:student_phone,
		student_grade=:student_grade
		WHERE student_id={$_POST['student_id']}");
    $update = $save->execute(array(
        'student_name' => $_POST['name'],
        'student_surname' => $_POST['surname'],
        'student_email' => $_POST['email'],
        'student_phone' => $_POST['phone'],
        'student_grade' => $_POST['grade']
    ));

    if ($update) {

        Header("Location:../index.php?update=ok");
    } else {

        Header("Location:../index.php?update=no");
    }
}

?>