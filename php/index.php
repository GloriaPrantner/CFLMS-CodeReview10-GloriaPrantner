<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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

    
    <div class= container-fluid>
    <h2>Media</h2>
    <div class="row">
<?php
    include "actions/db_connection.php";

    $sql= "SELECT * FROM book";

    $result= mysqli_query($conn, $sql);

    if($result->num_rows == 0){
        echo "There are no books in the Libary!";
    } elseif ($result->num_rows == 1){
        $row = $result->fetch_assoc();
        echo $row["ISBN"] . " " . $row["title"] . " " . $row["description"] . $row["pages"] . " " . $row["released"] . " " . $row["status"] . " " . $row["type"]. " " . $row["author"] . " " . $row["publisher"] . "<a href='update.php?ISBN=". $row["ISBN"] . "'>Show more...</a> <hr>";
    } else {
        $rows = $result->fetch_all(MYSQLI_ASSOC);

        foreach($rows as $key=>$value){
            echo "
            <div class='card bg-light col-lg-3 col-md-4 col-sm-6 m-3' style='width: 18rem;'>
                <div class='card-body'>
                    <h5 class='card-title'>" . $value["title"] . "</h5>
                    <h6 class='card-subtitle mb-2 text-muted'>" . $value["author"] . "</h6>
                    <p class='card-text'>" . $value["description"] ."</p>
                    <a href='show_media.php?ISBN=". $value["ISBN"] . "' class='card-link'> Show more...</a>
                </div>
            </div>";
        }
    }
?>

</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
</body>
</html>