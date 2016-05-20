<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<div class="main">
	<title>Authors</title>
    <meta charset="UTF-8"/>
  <meta name="viewport" content="width-device-width,initial-scale=1.0">
  <meta name="keywords" content="jquery, css3, 3d, webkit, fallback,slider,3d transformation, slices, rotate, box, automatic"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
<link rel="stylesheet" type="text/css" href="authors.css"/>
<div class="up">
	<em><a href="index.php">LiBRead</a></em>
	</div>
<div>
<?php
// session_start();
if(isset($_SESSION['login'])){
  echo 'Вы на сайте! <form method="post" action="authors.php"><input type="submit" name="out" value="Out"></form>'
  ;
  if(isset($_POST['out'])){
  unset($_SESSION['login']);
  session_destroy();
}
}
else{
  echo'
<form method="post" action="authors.php">
      <button type="button"><a href="welcome.php">Log in</a></button>
    </form>';}
?>
</div>

<div class="body">
		<div class="cont">          
  <div class="col-sm-1"></div>
  <div class="col-sm-10">  
    <p><a href="authors.php">Authors</a></p>
  <p style="font-size:15px; padding-left:120px;" >You can find the most popular books there by their authors</p>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Book</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Михаил</a></td>
        <td>Булгаков</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Рэй</td>
        <td>Брэдбери</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Грегори Дэвид</td>
        <td>Робертс</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Харпер</td>
        <td>Ли</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Антуана де</td>
        <td>Робертс</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Дэниел</td>
        <td>Киз</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Пауло</td>
        <td>Коэльо</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Уолтер</td>
        <td>Айзексон</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Шарлотта</td>
        <td>Бронте</td>
        <td>1</td>
      </tr>
      <tr>
        <td>Артур Конан</td>
        <td>Дойль</td>
        <td>1</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="col-sm-1"></div>
</div>
</div>
  </html>