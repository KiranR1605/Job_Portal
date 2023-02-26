<?php include 'header.php' ?>

<?php
  $query = "SELECT `name`, `role`, `qual`, `year` FROM candidates";
  $result = mysqli_query($con, $query);
  $i = 0;
  if ($result->num_rows > 0) {
    echo '<div class="m-4">
          <table class="table">
          <thead>
          <tr>
          <th scope="col">SI no.</th>
          <th scope="col">Candidate Name</th>
          <th scope="col">Applied for</th>
          <th scope="col">Qualification</th>
          <th scope="col">Year of Passing out</th>
          </tr>
          </thead>
          <tbody>';
    while ($row = $result->fetch_assoc()) {
      echo "<tr><th scope='row'>" . ++$i . "</th>
            <td>" . $row['name'] . "</td>
            <td>" . $row['role'] . "</td>
            <td>" . $row['qual'] . "</td>
            <td>" . $row['year'] . "</td></tr>";
    }
    echo "</tbody>
          </table>
          </div>";
  } else {
    echo "<h3 class='ms-4'>No Candidates have applied yet.</h3>";
  }
  
  mysqli_close($con);
?>

</div>