<!DOCTYPE html>
<html lang='en'>

  <head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'
      integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'
      integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'>
    </script>
    <link href='./style.css' rel='stylesheet' />
    <title>Simple Payroll</title>
  </head>


  <body class='container'>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="../index.php">Simple Payroll</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#users">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#departments">Departments</a></li>
            <li class="nav-item"><a class="nav-link" href="#positions">Positions</a></li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">More</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Profile</a></li>
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
              </ul>
            </li> -->
          </ul>
          <form class="d-flex me-2">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
          </form>
          <button class="btn btn-outline-dark ms-2" type="button" data-bs-toggle="modal" data-bs-target="#signUp">
            <i class="fas fa-user me-2"></i>
            Sign up
          </button>
          <button class="btn btn-outline-dark ms-2" type="button" data-bs-toggle="modal" data-bs-target="#signIn">
            <i class="fas fa-sign-in-alt me-1"></i>Login
          </button>
        </div>
      </div>
    </nav>