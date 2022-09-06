<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body> <nav class="navbar navbar-expand-lg  bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localserver/emp/dashboard.html#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <b>Home</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="http://localserver/emp/empolyeeform.html">Empolyee</a></li>
                  <li><a class="dropdown-item" href="http://localserver/emp/department.html">Department</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="http://localserver/emp/leaveform.html">Leave-Application</a></li></ul>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <b>Empolyee</b>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="http://localserver/emp/empolyeeform.html">Emppolyee-Form</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li></ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <b>Departments</b>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="http://localserver/emp/department.html">Department-Form</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    
    <center>
        <form name =f1 action="empolyee.php" method="POST">
            <h1>heading-brand name</h1>
    <h1>Empolyee-Form</h1>
    <hr color="blue" size="4">
            <table><tr align="center"><td width="200px">
                <marquee behavior="" direction="right"> empolyee</marquee>
            </td><td width="400px">

                <table  height="400px">
                <tr align="center">
                    <td>Empolyee Name:</td><td><input type="text" name="t1" required></td>
                </tr>
                <tr align="center">
                    <td>Empolyee Code:</td><td><input type="text" name="t2" required></td>
                </tr>
                <tr align="center">
                    <td>Employee Dept:</td><td><input type="text" name="t3" required></td>
                </tr>
                <tr align="center">
                    <td>Education:</td><td><input type="text" name="t4" required></td>
                </tr>
                <tr align="center">
                    <td>Experince:</td><td><input type="text" name="t5" required></td>
                </tr>
                <tr align="center">
                    <td>CTC/salary:</td><td><input type="text" name="t6" required></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="submit" value="submit" onclick=""></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input type="reset" value="reset"></td>
                </tr>  
                </table>
            </td><td width="300px"><div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for 
                calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within 
                the larger container.</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
              </div></td></tr></table>
        </form>
       

</body>
</html>
