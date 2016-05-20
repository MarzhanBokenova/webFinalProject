<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Best books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <meta name="keywords" content="jquery, css3, 3d, webkit, fallback,slider,3d transformation, slices, rotate, box, automatic"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <div class="nav-bar">
      <a class="navbar-brand" href="index.php"><div style="margin-left:100px;">LibRead</div></a>
      <ul>
        <li><a class="active" href="bestbooks.php"><div style="margin-left:20px;">Home</div></a></li>
        <li><a class="active" href=""><div style="margin-left:20px;">Blackquotes</div></a></li>
        <li><a class="active" href="tops.php"><div style="margin-left:20px;">Books</div></a></li>
        <li>
          <div class="form-group">
          <form style="margin-left:200px; margin-top:0px;" method="post" class="navbar-form navbar-left" role="search" action="bestbooks.php">
          <input style="" type="text" class="form-control" placeholder="Search">
    
    <button type="submit" style="" class="btn btn-default">Submit</button>
   
  </form>
   </div>
        </li>
      </ul>
      <?php
// session_start();
if(isset($_SESSION['login'])){
  echo '<form method="post" action="bestbooks.php"><input type="submit" name="out" value="Out"></form>';
  if(isset($_POST['out'])){
  unset($_SESSION['login']);
  session_destroy();
}
}
else{
  echo'
<form method="post" action="bestbooks.php">
      <button type="button"><a href="welcome.php">Log in</a></button>
      <button type="button"><a href="website.php">Sign in</a></button>
    </form>';}
?>
  </div>
</head>

<link rel="stylesheet" type="text/css" href="bestbooks.css"/>

<body>
  <div class= "all">
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
      </ol>
    <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="w.jpg" alt="...">
      </div>

    <div class="item">
      <img src="love.jpg" alt="...">
        </div>

    <div class="item">
      <img src="nes.jpg" alt="...">
        </div>

    <div class="item">
      <img src="cover1.jpg" alt="...">
        </div>

    <div class="item">
      <img src="loli.jpg" alt="...">
        </div>
    <div class="item">
      <img src="dd.png" alt="...">
        </div>
    <div class="item">
      <img src="mars.jpg" alt="...">
        </div>
    <div class="item">
      <img src="wallp.jpg" alt="...">
        </div>
<!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> 
</div>
<div>
  <div class="top">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
  
<div class="img">
  <a target="_blank" href="ray.php">
  <img src="451.jpg" alt="..."> </a>
  <div class="desc"><strong>451 по Фаренгейту</strong></br>Рей Бредбери</div>
</div>

<div class="img">
  <a target="_blank" href="forest.jpg">
    <img src="shant.jpg" alt="...">
  </a>
  <div class="desc"><strong>Шантарам</strong></br>Грегори Дэвид Робертс</div>
</div>

<div class="img">
  <a target="_blank" href="lights.jpg">
    <img src="mast.jpg" alt="...">
  </a>
  <div class="desc"><strong>Мастер и Маргарита</strong></br>Михаил Булаков</div>
</div>

<div class="img">
  <a target="_blank" href="mountains.jpg">
    <img src="pres.jpg" alt="...">
  </a>
  <div class="desc"><strong>Убить пересмешника</strong></br>Харпер Ли</div>
</div>

<div class="img">
  <a target="_blank" href="mountains.jpg">
    <img src="prin.jpg" alt="...">
  </a>
  <div class="desc"><strong>Маленький принц</strong></br>Антуана де Сент-Экзюпери</div>
</div>

<div class="img">
  <a target="_blank" href="mountains.jpg">
    <img src="svet.jpg" alt="...">
  </a>
  <div class="desc"><strong>Цветы из Элджернона</strong></br>Дэниел Киз</div>
</div>
<div class="img">
  <a target="_blank" href="mountains.jpg">
    <img src="alh.jpg" alt="...">
  </a>
  <div class="desc"><strong>Алхимик</strong></br>Пауло Коэльо</div>
</div>
<div class="img">
  <a target="_blank" href="mountains.jpg">
    <img src="st.jpg" alt="...">
  </a>
  <div class="desc"><strong>Стив Джобс</strong></br>Уолтер Айзексон</div>
</div>
<div class="img">
  <a target="_blank" href="mountains.jpg">
    <img src="dj.jpg" alt="...">
  </a> 
  <div class="desc"><strong>Джейн Эйр</strong></br>Шарлотта Бронте</div>
</div>
<div class="img">
  <a target="_blank" href="mountains.jpg">
    <img src="sher.jpg" alt="...">
  </a>
  <div class="desc"><strong>Приключения Шерлока Холмса</strong></br>Артур Конан Дойл</div>
</div>
</div>
</div>
<div class="block">
<blockquote><q><cite>Reading gives us someplace to go when we have to stay where we are</cite></q></blockquote>
</div>
</div>
<div class="col-sm-1"></div>
</div>
</body>
</html>