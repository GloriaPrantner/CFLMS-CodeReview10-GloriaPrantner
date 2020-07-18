<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add_media.php">Add new Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Publishers</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

<?php
    require_once "actions/db_connection.php";

    if($_GET){
        $isbn = $_GET["ISBN"];
        // $title = $_GET["title"];
        // $img = $_GET["img"];
        // $description = $_GET["description"];
        // $pages = $_GET["pages"];
        // $released = $_GET["released"];
        // $author = $_GET["author"];
        // $publisher = $_GET["publisher"];
        // $status = $_GET["status"];

        echo "Are you sure you want to delete this media? <br>
        <form action='actions/a_delete.php' method='get'>
        <input type='hidden' name='ISBN' value=". $isbn  . ">
        <input type='submit' name='submit'>  <input class='button' type='button' onclick=window.location.replace('index.php') value='Cancel'/>
        </form>";
        
        // $sql= "UPDATE `book` SET `title`='$title',`img`='$img',`description`='$description',`pages`=$pages,`released`='$released',`status`='$status',`author`='$author',`publisher`='$publisher' WHERE ISBN='$isbn'";

        // if(mysqli_query($conn, $sql)){
        //     echo "Update sucessful! <br> <a href='../index.php'> Back to Home </a>";
        // } else {
        //     echo "error";
        // }
        
    }

?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
</body>
</html>