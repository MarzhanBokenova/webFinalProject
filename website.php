<?php
session_start();
  $conn=mysqli_connect('localhost', 'root', '', 'website') or die ("Unable to connect");

if (isset($_POST['subm'])) {
  echo'put';
  $name = $_POST['name'];
  $year = $_POST['year'];
  $genre = $_POST['genre'];
  $author = $_POST['author'];
  $tex=$_POST['tex'];

  if(!empty($_POST['name']) && !empty($_POST['year']) && !empty($_POST['genre']) && !empty($_POST['author']) && !empty($_POST['tex'])){
  $sql = "INSERT INTO list (name, year, genre, author,tex) VALUES ( '".$name."', '".$year."', '".$genre."', '".$author."', '".$tex."')"; 
  mysqli_query($conn, $sql);
}
  
  
  else{ echo "<script>alert('Error: Empty')</script>";}
}
else{'unsucces';}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <meta charset="utf=8">
  <title>Library</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <div id="top"><p><a href="index.php"><img src="8.jpg", align="left"></a><h1><em>LiBRead</em></h1></p>
  </div>

  <link rel="stylesheet" type="text/css" href="books.css"/>
</head>
<body>
    <div>
      <div>
        <ul>
  <li><a href="website.php">Home</a></li>
  <li><a href="news.asp">Genres</a></li>

  <li><a href="authors.php">Authors</a></li>
  <li><a href="bestbooks.php">Best Books</a></li>
</ul>
      </div>
      <div id="mmm">

        <?php

$conn=mysqli_connect('localhost', 'root', '', 'website') or die ("Unable to connect");
if (isset($_POST['submit'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];
  $sql = "SELECT * from web where login=\"$login\" AND password=\"$password\" ";
  $res = mysqli_query($conn, $sql);
 if (mysqli_num_rows($res)>0) {
    $_SESSION['login'] = $login;
    $dan=mysqli_fetch_assoc($res);
    $_SESSION['name']=$dan['name'];
    $_SESSION["surname"]=$dan['surname'];
    $_SESSION['password']=$dan['password']; 
    echo '<p style="color:#fff">You are welcome, '.$dan['name'].'!</p>';
  }
  else{
    echo '<p style="color:red">ne pravilno</p>';}
}
?>
<?php

if(isset($_SESSION['login'])){
  echo '
  <form method="post" action="website.php"><input type="submit" name="out" value="Out"></form>';
  if(isset($_POST['out'])){
  unset($_SESSION['login']);
  unset($_SESSION['name']);
  unset($_SESSION['password']);
  session_destroy();
}
}
else{
  echo'
<form method="post" action="website.php">
    <label style="color:white" for="fname">Login</label>
    <input type="text" id="fname" name="login">

    <label style="color:white" for="lname">Password</label>
    <input type="password" id="lname" name="password">
    <input type="submit" name="submit" value="Submit">
    <label for="rname"><a href="welcome.php">Registration</a><label>
</form>';}
?>
      </div>

      <div id="maincontent" style="height:100%">
        <?php
        include 'welcomee.php';
        if(isset($_SESSION['login'])){
          if($_SESSION['login']=='admin') {include 'tops.php';
            if(isset($_POST['submee'])){
  $conn=mysqli_connect('localhost', 'root', '', 'website') or die ("Unable to connect");
  $tname=($_POST['title']);
  $sql="DELETE FROM list where name='$tname'" ;
  if ($res = mysqli_query($conn, $sql)){
  echo "<script>alert('Deleted')</script>";
   }
            }
            $conn=mysqli_connect('localhost', 'root', '', 'website') or die ("Unable to connect");
//             if (isset($_POST['sub'])){
//               // echo 'put';
//               $name = $_POST['nam'];
//   $year = $_POST['yea'];
//   $genre = $_POST['genr'];
//   $author = $_POST['autho'];
//   $tex=$_POST['te'];
//   if(!empty($_POST['nam']) && !empty($_POST['yea']) && !empty($_POST['genr']) && !empty($_POST['autho']) && !empty($_POST['te'])){

//   $sql = "UPDATE list SET year='$year' , genre='$genre', author='$author', tex='$tex' where name=$name"; 
//   if ($res = mysqli_query($conn, $sql)){
//     echo 'put';
//   while($mm=mysqli_fetch_assoc($res)){
        
//    echo 'mimimi'.'<div id="content" style="height:250px; margin-left:1px;">
//          <p><h2><a style="text-decoration:none;" href="ray.php"><span style="color:white";>'.$mm['$name'].'</span></a></h2></p>
//          <img class="img" src="451.jpg">
//          <p><b>Year:</b>'.$mm['$year'].'</p>
//          <p><b>Genre:</b>'.$mm['$genre'].'</p>
//          <p><b>Author:</b>'.$mm['$author'].'</p>
//          <p>'.$tex.'</p>
//        </div>  ';
//    }}
// }
//   else{ echo "<script>alert('Error: Empty')</script>";}}
          }

        }

        ?>
      
  </div>
    <div id="reklama" valign="top">
      <p style="color:white">The place for advertising</p>
      <button type="button" onclick="loadDoc()">Change Content</button></div>

    
    <script>
  function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     document.getElementById("reklama").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "ajax1.txt", true);
  xhttp.send();
}</script>
    <div id="end">
      <p>2016</p>
    </div>
  </div>
  </body>
  </html>