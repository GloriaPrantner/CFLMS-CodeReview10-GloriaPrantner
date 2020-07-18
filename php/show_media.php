<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media</title>
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
    <div class="container-fluid">

        <?php
            include "actions/db_connection.php";

            if($_GET){

                $isbn = $_GET["ISBN"];   

                $sql= "SELECT * FROM book WHERE ISBN = '$isbn'";

                $result= mysqli_query($conn, $sql);

                if($result->num_rows == 0){
                    echo "Media not found. <a href='../index.php'> Back to Home </a>";
            
                } else {
                    $row = $result->fetch_assoc();
                    echo "<div> 
                            <h3>" . $row["title"] . "</h3> <br>
                            <div class='img-container'> <img src='" . $row["img"] . "'> </div>
                            <p>Author: " . $row["author"] . "</p> <br>
                            <p>Published by: " . $row["publisher"] . "</p> <br>
                            <p>ISBN: " . $row["ISBN"] . "</p> <br>
                            <p>" . $row["type"] . "</p> <br>
                            <p>Release date: " . $row["released"] . "</p> <br>
                            <p>" . $row["description"] . "</p>  <br>
                            <p>Status: " . ($row["status"] == 0 ? "Not available" : "Available") ."</p>  <br>


                            <a href='index.php'> Back to Home </a> <br> 
                            
                            <a href='update.php?ISBN=" . $row["ISBN"] . "'>Update Media </a><br>
                            <a href='delete.php?ISBN=" . $row["ISBN"] . "'>Delete Media </a><br>
                        </div>";
                }

            }
        ?>

    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
</body>
</html>