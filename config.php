<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jobs";

    $con = mysqli_connect($server, $username, $password, $database);

    if ($con->connect_error) {
        die("connection failed: " . $con->connect_error);
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `users`(`name`, `phone`, `email`, `password`) VALUES ('$name','$phone','$email','$password')";

        if(mysqli_query($con, $sql)) {
            header("location: index.php");
        } else {
            echo "ERROR: " . mysqli_error($con);
        }
    }

    session_start();

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) == 1) {
            header("location: index.php");
        } else {
            $error = "E-mail ID or Password is incorrect.";
        }
    }

    if(isset($_POST['post-job'])) {
        $cname = $_POST['cname'];
        $position = $_POST['position'];
        $jdesc = $_POST['jdesc'];
        $skills = $_POST['skills'];
        $ctc = $_POST['ctc'];

        $query = "INSERT INTO `jobs`(`cname`, `position`, `skills`, `jdesc`, `ctc`) VALUES ('$cname','$position','$jdesc','$skills','$ctc')";

        if(mysqli_query($con, $query)) {
            header("location: index.php");
        } else {
            echo "ERROR: " . mysqli_error($con);
        }
    }

    if(isset($_POST['applicant'])) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $qual = $_POST['qual'];
        $year = $_POST['year'];

        $query = "INSERT INTO `candidates`(`name`, `role`, `qual`, `year`) VALUES ('$name', '$role', '$qual', '$year')";
        if(mysqli_query($con, $query)) {
            header("location: career.php");
        } else {
            echo "ERROR: " . mysqli_error($con);
        }
    }

    mysqli_close($con);

?>