<?php
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css">
</head>
<body>
<div class="container-sm my-5 mx-5">
<form action="" class="w-50 mx-auto">
<div class="input-group">
    <span class="input-group-text" >Genres</span>
    <select  class="form-select" id="genre"><option selected>Select a Genre..</option>
        <option value="comedy">Comedy</option>
        <option value="horror">Horror</option>
        <option value="action">Action</option>
        <option value="romance">Romance</option>
    </select>
</div>
<div class="input-group my-3">
    <span class="input-group-text">Movies</span>
    <select  class="form-select" id="movie"><option selected>Select a Movie..</option>
        <!-- <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option> -->
    </select>
</div>
</form>
</div>

<script>
const selectGenre = document.querySelector("#genre");
const selectMovie = document.querySelector("#movie");
selectGenre.addEventListener("change",function(){
    let data = selectGenre.value;
    let url = `process.php?id=${data}`;
    
    fetch(url).then(response=> response.text().then(text=>selectMovie.innerHTML = text))
});




</script>



 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>   
</body>
</html>