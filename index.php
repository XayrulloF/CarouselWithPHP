<?php
//Bootstrap Carousel with PHP
//04-03-2021
//by Fayzullayev Khayrullo
?>
<!doctype html>
<html lang="en">
<head>
    <title>bootstrap&&PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="source/bootstrap/css/bootstrap.min.css">-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <?php
                        $dir = 'photos';
                        $active = true;
                        if (is_dir($dir)) {
                            $openDir = opendir($dir);
                            while (($file = readdir($openDir)) !== false) {
                                if ($file != '.' && $file != '..') {
                                    if ($active) {
                                        echo '<div class="carousel-item active">';
                                        $active = false;
                                    } else {
                                        echo '<div class="carousel-item">';
                                    }
                                    echo '<img class="d-block w-100" src="'.$dir."/".$file.'" alt="First slide"></div>';
                                }
                            }
                        } else {
                            echo "No";
                        }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="source/jquery-3.6.0.js"></script>-->
<!--<script src="source/popper.min.js"></script>-->
<!--<script src="source/bootstrap/js/bootstrap.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
