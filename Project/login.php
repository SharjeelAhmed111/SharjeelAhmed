<?php
$error=false;
session_start();
require_once "db.php";
if (isset($_COOKIE["Admin_ID"])) {

$_SESSION['Admin']["id"] = $_COOKIE['Admin_ID'];
$_SESSION['Admin']['Email'] = $_COOKIE['Admin_Email'];
$_SESSION['Admin']['Image'] = $_COOKIE['Admin_Image'];
header("Location:Admin/index.php");
  
}



if(isset($_SESSION['Admin'])!="")
 {
header("Location: Admin/index.php");
}

if (isset($_POST['Submit'])) {

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['pass']);
$login="SELECT * FROM `admin` WHERE Email='$email' AND password ='$password'";
$result=mysqli_query($con,$login);
if($result){
$row = mysqli_fetch_array($result);
if(!empty($row))
{
$_SESSION['Admin']["id"] = $row['Admin_ID'];
$_SESSION['Admin']['Email'] = $row['Email'];
$_SESSION['Admin']['Image'] = $row['Image'];

if(isset($_POST['checkcookie']))
{
  $cookie_adminid  = $row['Admin_ID'];
  $cookie_adminEmail = $row['Email'];
  $cookie_adminImage = $row['Image'];

    setcookie("Admin_ID",$cookie_adminid, time() + (86400 * 30), "/") ;
    setcookie("Admin_Email",$cookie_adminEmail, time() + (86400 * 30), "/") ;
    setcookie("Admin_Image",$cookie_adminImage, time() + (86400 * 30), "/") ;
}

header("Location: Admin/index.php");
}
else
{

}

}
else{

}



}



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BIZEAL Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<body>
  <div class="container">

    <div class="row ">
      <div class="col-md-6 m-auto">
        <form class=" p-5" method="post">
          <h1>Admin Login</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" autocomplete="off">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" autocomplete="off">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
</form>
      </div>
    </div>
  </div>

</body>
</html>