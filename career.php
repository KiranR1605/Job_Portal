<?php include 'server-connection.php' ?>

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

<div class="m-1 hero-img">
</div>

<div class="m-1 gradient-custom-5 title">
  <div class="moto">
    <h1 class="title-text">JOB PORTAL</h1>
    <p>Find the jobs that u deserve.</p>
  </div>
</div>

<div class="container mt-5 mb-3">
    <div class="row">
    <?php
      $query = "SELECT `cname`, `position`, `jdesc`, `skills`, `ctc` FROM jobs";
      $result = mysqli_query($con, $query);
      $i = 0;
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<div class="col-lg-4 col-md-6">
                  <div class="card p-3 mb-2 light-border">
                      <div class="mt-1">
                          <h3 class="heading">' . $row['cname'] . '</h3>
                          <h5 class="heading">' . $row['position'] . '</h5>
                          <p class="line-clamp">' . $row['skills'] . '</p>
                          <p><span class="fw-bold">Skills required </span> : </p>
                          <p class="line-clamp">' . $row['jdesc'] . '</p>
                          <p><span class="fw-bold">CTC</span> : ' . $row['ctc'] . '</p>
                          <div class="d-grid">
                          <button type="submit" class="btn btn-light btn-block btn-md gradient-custom-3 text-body" data-bs-toggle="modal" data-bs-target="#application" data-bs-whatever="@mdo">
                            Apply
                          </button>
                        </div>
                      </div>
                  </div>
                </div>';
        }
      }

      mysqli_close($con);
    ?>
    </div>
</div>

<div class="modal fade" id="application" tabindex="-1" aria-labelledby="applicationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="applicationLabel">Applicant Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="config.php" method="POST">
          <div class="form-outline mb-4">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control form-control-lg" name="name" required/>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Applying for</label>
            <input type="text" class="form-control form-control-lg" name="role" required/>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Qualification</label>
            <input type="text" class="form-control form-control-lg" name="qual" required/>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Year of passout</label>
            <input type="text" class="form-control form-control-lg" name="year" required/>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-block btn-md gradient-custom-3 text-body" name="applicant">Apply</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php' ?>