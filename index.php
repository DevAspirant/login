<?php 
  ini_set('display_startup_errors', 1);
  ini_set('display_errors', 1);
  error_reporting(-1);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
      
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="border shadow p-3 rounded" style="width: 450px;" action="php/check-login.php" method="POST">
          <h1 class="text-center p-3"> Login </h1>
          <!-- Error situation -->
          <?php if(isset($_GET['error'])){?>
            <div class="alert alert-danger" role="alert">
              <!-- This is a shortcut of simple php syuntax-->
              <?=$_GET["error"] ?>
            </div>
          <?php } ?>
          <!-- end of Error situation -->
            <div class="mb-3">
              <label for="username"  class="form-label">username</label>
              <input type="text" name="username" class="form-control" id="username">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-0">
              <label class="form-label">Select User Type: </label>
            </div>
            <select class="form-select mb-3" name="role" aria-label="Default select example">
              <option selected value="user">User</option>
              <option value="admin">Admin</option>
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>