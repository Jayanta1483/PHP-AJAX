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
    <span class="input-group-text inputGroupBg">Genres</span>
    <select  class="form-select"><option selected>Select a Genre..</option>
        <option value="">Comedy</option>
        <option value="">Horror</option>
        <option value="">Action</option>
        <option value="">Romance</option>
    </select>
</div>
<div class="input-group my-3">
    <span class="input-group-text">Movies</span>
    <select  class="form-select"><option selected>Select a Movie..</option>
        <!-- <option value=""></option>
        <option value=""></option>
        <option value=""></option>
        <option value=""></option> -->
    </select>
</div>
</form>
</div>





 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>   
</body>
</html>