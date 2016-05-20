 <html> 
  <head><title>jhgjb</title></head>
  <link rel="stylesheet" type="text/css" href="books.css"/>
    <?php
  $conn=mysqli_connect('localhost', 'root', '', 'website') or die ("Unable to connect");
  $tname=$_GET['name'];
  $sql="DELETE FROM list where name=$tname" ;
  if ($res=mysqli_query($conn, $sql)){
  echo{'correct'}}
   else{echo 'incorrect';}
        ?>

</html>

