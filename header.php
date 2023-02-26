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
    <link rel="stylesheet" href="styles.css" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/25bec9b726.js" crossorigin="anonymous"></script>

    <title>Job Portal</title>

</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-light light-border py-3">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold ms-5" href="#">ADMIN DASHBOARD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-items" id="navbar">
      <ul class="navbar-nav mb-2 me-auto mb-lg-0">
        <li class="nav-item ms-5">
          <a class="nav-link fw-bold" href="index.php">Jobs</a>
        </li>
        <li class="nav-item ms-5">
          <a class="nav-link fw-bold" href="jobs.php">Candidates List</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php include 'server-connection.php' ?>
