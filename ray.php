<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ray</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>

<link rel="stylesheet" type="text/css" href="ray.css"/>
<div class="gol">
	<p><em><strong>451 по Фаренгейту</strong></em></p>
</div>
<div class="nin">
<div class="min">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
	<div class="img">
  <a target="_blank" href="ray.php">
  <img src="451.jpg" alt="..."> </a>
  <!-- <div class="desc"><strong>451 по Фаренгейту</strong></br>Рей Бредбери</div> -->
</div>
	<p>«451° по Фаренгейту» – роман, принесший писателю мировую известность. 451° по Фаренгейту – температура, при которой воспламеняется и горит бумага. Философская антиутопия Рэя Брэдбери рисует беспросветную картину развития постиндустриального общества; это мир будущего, в котором все письменные издания безжалостно уничтожаются специальным отрядом пожарных, а хранение книг преследуется по закону, интерактивное телевидение успешно служит всеобщему оболваниванию, карательная психиатрия решительно разбирается с редкими инакомыслящими, а на охоту за неисправимыми диссидентами выходит электрический пес…<p>
		
    <button type="button" style="float:left" class="btn btn-danger">Read</button>

        <img id="myImg" src="451.jpg" width="65" height="65">
        <!-- <img id="myImg" src="4511.jpg" width="65" height="65"> -->

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
		<!-- <div class="form-group">
  			<label for="comment">Comment:</label>
  			<textarea class="form-control" rows="5" id="comment"></textarea>
		</div> -->
<!--     <div class="dropdown">
  <img src="451.jpg" alt="Trolltunga Norway" width="100" height="50">
  <div class="dropdown-content">
    <img src="451.jpg" alt="Trolltunga Norway" width="300" height="200">
    <div class="desc">Beautiful Trolltunga, Norway</div>
  </div></div> -->
  </div>


  <div class="col-sm-2">

</div>  
</div>
</html>
