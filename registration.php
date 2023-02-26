<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- custom css -->
  <link rel="stylesheet" href="styles.css" />

  <title>Sign Up</title>
</head>

<body>
  <section class="vh-100 bg-image" style="
        background-image: url('images/img4.webp');
      ">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">
                  Create an account
                </h2>

                <form action="config.php" method="POST">
                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" name="name" placeholder="Full Name" required/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" class="form-control form-control-lg" name="phone" placeholder="Contact number" required/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" required/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" class="form-control form-control-lg" placeholder="Confirm Password" required/>
                  </div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-light btn-block btn-lg gradient-custom-4 text-body" name="submit">
                      Register
                    </button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">
                    Have already an account?
                    <a href="login.php" class="fw-bold text-body"><u>Login here</u></a>
                  </p>
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