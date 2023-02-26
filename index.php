<?php include 'header.php' ?>

<p class="d-flex justify-content-center">
  <button class="btn btn-success btn-block btn-lg gradient-custom-4 text-body m-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
    Post Jobs
  </button>
</p>
<div class="collapse m-4" id="collapse">
  <div class="card card-body">
  <form action="config.php" method="POST">
      <div class="form-outline mb-4 px-4 pt-3">
        <label for="companyName" class="form-label">Company Name</label>
        <input type="text" class="form-control form-control-lg" name="cname" required/>
      </div>

      <div class="form-outline mb-4 px-4">
        <label for="position" class="form-label">Position</label>
        <input type="text" class="form-control form-control-lg" name="position" required/>
      </div>

      <div class="form-outline mb-4 px-4">
        <label for="jobDescription" class="form-label">Job Description</label>
        <textarea class="form-control" cols="30" rows="5" name="jdesc" required></textarea>
      </div>

      <div class="form-outline mb-4 px-4">
        <label for="jobDescription" class="form-label">Skills Required</label>
        <textarea class="form-control" cols="30" rows="5" name="skills" required></textarea>
      </div>

      <div class="form-outline mb-4 px-4">
        <label for="ctc" class="form-label">CTC</label>
        <input type="text" class="form-control form-control-lg" name="ctc" required />
      </div>

      <div class="d-flex justify-content-center">
        <button type="submit" name="post-job" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
          Post Job
        </button>
      </div>
    </form>
  </div>
</div>

<?php
  $query = "SELECT `cname`, `position`, `ctc` FROM jobs";
  $result = mysqli_query($con, $query);
  $i = 0;
  if ($result->num_rows > 0) {
    echo '<div class="m-4">
          <table class="table">
          <thead>
          <tr>
          <th scope="col">SI no.</th>
          <th scope="col">Company Name</th>
          <th scope="col">Position</th>
          <th scope="col">CTC</th>
          </tr>
          </thead>
          <tbody>';
    while ($row = $result->fetch_assoc()) {
      echo "<tr><th scope='row'>" . ++$i . "</th>
            <td>" . $row['cname'] . "</td>
            <td>" . $row['position'] . "</td>
            <td>" . $row['ctc'] . "</td></tr>";
    }
    echo "</tbody>
          </table>
          </div>";
  } else {
    echo "<h3 class='ms-4'>No jobs are listed.</h3>";
  }
  
  mysqli_close($con);
?>

<?php include 'footer.php' ?>