  <html>
  <head><title>jhgjb</title></head>
  <?php
  $conn=mysqli_connect('localhost', 'root', '', 'website') or die ("Unable to connect");
  $sql="SELECT * FROM list" ;
  if ($res = mysqli_query($conn, $sql)){
  while($mm=mysqli_fetch_assoc($res)){
        
   echo '<div id="content" style="height:250px; margin-left:1px;">
         <p><h2><a style="text-decoration:none;" href="ray.php"><span style="color:white";>'.$mm['name'].'</span></a></h2></p>
         <img class="img" src="451.jpg">
         <p><b>Year:</b>'.$mm['year'].'</p>
         <p><b>Genre:</b>'.$mm['genre'].'</p>
         <p><b>Author:</b>'.$mm['author'].'</p>
         <p>'.$mm['tex'].'</p>
       </div>  ';
   }}
   else{echo 'incorrect';}
       ?>

</html>
  
