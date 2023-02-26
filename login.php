<?php
    
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jobs";

    $con = mysqli_connect($server, $username, $password, $database);

    if ($con->connect_error) {
        die("connection failed: " . $con->connect_error);
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- custom css -->
    <link rel="stylesheet" href="styles.css">

    <title>Log In</title>
</head>

<body>
    <section class="vh-100 bg-img" style="background-image: url('images/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <h3 class="mb-5">SIGN IN</h3>

                                    <form action="config.php" method="POST">

                                        <div class="form-outline mb-4">
                                            <input type="email" class="form-control form-control-lg" placeholder="Email" name="email" required/>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required/>
                                        </div>

                                        <div class="d-grid">
                                            <button class="btn btn-light btn-lg btn-block mt-1 gradient-custom-4" type="submit" name="login">Login</button>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <p class="mt-5 pb-lg-0" style="color: #393f81;">
                                                Don't have an account?
                                                <a href="registration.php" style="color: #393f81;"> Register here</a>
                                            </p>
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>