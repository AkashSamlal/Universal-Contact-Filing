<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | Universal-Contact-Filing</title>
    <link rel="icon" href="images/knighticon.png">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JQuery and Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>

    <!-- Link to css and js-->
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="js/md5.js"></script>
    <script type="text/javascript" src="js/signup.js"></script>
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/0c1bbd3644.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <!-- Heading with UCF Font for uppercase letters -->
    <div class="ucf-heading">
      <div class="row">
        <div class="col-md-12">
          <span style="font-family: ucffont; color: rgb(184, 164, 105); font-size: 80px">U</span><span>niversal</span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <span style="font-family: ucffont; color: rgb(184, 164, 105); font-size: 80px">C</span><span>ontact</span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <span style="font-family: ucffont; color: rgb(184, 164, 105); font-size: 80px">F</span><span>iling</span>
        </div>
      </div>
    </div>

     <!-- Login Box -->
     <div class="modal-dialog text-center">
      <div class="col-sm-8 login-box">
        <div class="modal-content">

          <!-- Knightro Face -->
          <div class="col-12 knight-face">
            <img src="images/knightface.png" alt="Knightro Face">
          </div>


          <!-- Form for login/signup -->
          <form class="col-12" method="post" action="LAMPAPI/signup.php">

             <!--<ul id="form-messages"></ul> -->

             <span style="font-family: ucffont; color: rgb(34, 34, 33); font-size: 25px; text-align: center;">Sign Up</span>

            <!-- Username -->
            <div  class="form-group">
              <input type="text" name="username" id="username" required class="form-control" placeholder="Enter Username">
            </div>

            <!-- Password -->
            <div  class="form-group">
              <input type="password" name="password" id="password" required class="form-control" placeholder="Enter Password">
            </div>
            
            <!-- Eye Password Icon -->
            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            
            <!-- Confirmation Password -->
            <div  class="form-group">
              <input type="password" name="confirmPassword"  id="confirmPassword" required class="form-control" placeholder="Confirm Password">
            </div>
            
            <!-- Eye Password Icon -->
            <span toggle="#confirmPassword" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            
            <p id="resp"></p>

            <!-- Login Buttons -->
            <button class="btn" id="login" type="button"><i class="fas fa-user-plus"></i> Sign Up</button>
            </br>
            <a class="sign-up-log-in-link" href="logging.php">Click Here To Log In</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
