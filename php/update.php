<?php
    require_once 'actions/db_connection.php';

    if($_GET["ISBN"]){
        $ISBN= $_GET["ISBN"];

        $sql= "SELECT * FROM book WHERE ISBN = $ISBN";

        $result= mysqli_query($conn, $sql);

        $row= $result->fetch_assoc();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Media</title>
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
        <h3>Update</h3>
        <form action="actions/a_update.php" method="get">
            <input type="hidden" name="ISBN" value="<?php echo $row['ISBN'] ?>">
            Title: <input type="text" name="title" value="<?php echo $row['title'] ?>"><br>
            Image(URL): <input type="url" name="img" value="<?php echo $row['img'] ?>" maxlength="500" required><span class="validity"></span><br>
            Description: <input type="text" name="description" value="<?php echo $row['description'] ?>"maxlength="500" required><span class="validity"></span><br>
            Pages: <input type="number" name="pages" value="<?php echo $row['pages'] ?>" required><span class="validity"></span><br>
            Release Date: <input type="date" name="released" value="<?php echo $row['released'] ?>"required><span class="validity"></span><br>
            Author: <input type="text" name="author"value="<?php echo $row['author'] ?>" maxlength="55" required><span class="validity"></span><br>
            Publisher: <input type="text" name="publisher" value="<?php echo $row['publisher'] ?>"maxlength="55" required><span class="validity"></span><br>

            Availability: <br>
                <input type="radio" name="status" value="1">
                <label for="1">Available</label><br>
                <input type="radio" name="status" value="0">
                <label for="0">Not available</label><br>
            <input type="submit" name="submit">
        </form>
    </div>

    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
</body>
</html>