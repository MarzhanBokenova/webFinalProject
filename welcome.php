<?php
session_start();
?>
<?php
  $conn=mysqli_connect('localhost', 'root', '', 'website') or die ("Unable to connect");

if (isset($_POST['registr'])) {
  // echo'put';
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $login = $_POST['login'];
  $password = $_POST['password'];
  $r_password=$_POST['r_password'];
  if($r_password==$password){
  $sql = "INSERT INTO web (name, surname, login, password) VALUES ( '".$name."', '".$surname."', '".$login."', '".$password."' )";
  if (mysqli_query($conn, $sql)){
    echo "<script>alert('Success')</script>";
  }
  else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
  else{ echo "<script>alert('Error: Passwords are different or Some items are empty')</script>";}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<div class="main">
  	<title>Registration Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
function validateForm() {
    var x = document.forms["myForm"]["name"].value;
    var y = document.forms["myForm"]["surname"].value;
    var z = document.forms["myForm"]["password"].value;
    var a = document.forms["myForm"]["r_password"].value;
    var b = document.forms["myForm"]["login"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;}
        if (y == null || y == "") {
        alert("Surname must be filled out");
        return false;}
        if (z == null || z == "") {
        alert("Password must be filled out");
        return false;}
        if (a == null || a == "") {
        alert("Repeat Password must be filled out");
        return false;}
        if (b == null || b == "") {
        alert("Login must be filled out");
        return false;}
    }
</script>
  </head>
<link rel="stylesheet" type="text/css" href="welcome.css"/>
<div class="pol">

  <div class="col-sm-3"> 

    <p style="font-size:30px; margin-left:0px;"><em><strong><a style="color:black" href="index.php">LiBRead</a></strong><em></p></div>
<div class="col-sm-6">
  <div class="navka">

  <p><em><strong>Registration page<strong><em></p>
  </div>
<form method="post" name="myForm" action="welcome.php" onsubmit="return validateForm()">
    <label for="usr">Name:</label>
    <input type="text" name="name" class="form-control" id="usr">
    <label for="usr">Surname:</label>
    <input type="text" name="surname" class="form-control" id="usr">
    <label for="usr">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
    <label for="usr">Repeat Password:</label>
    <input type="password" name="r_password" class="form-control" id="pwd">
    <label for="usr">Login:</label>
    <input type="text" name="login" class="form-control" id="usr">
    <br>
    <input type="submit" name="registr" value="Registration" style="border-radius:5px; margin-left: 250px;">
</form>  
</div>
<div class="col-sm-3"></div>

</body>
</html>
