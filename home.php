<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        $pageTitle = 'Home';
        $ifLogin = TRUE;
        $admin = TRUE;
        echo 'Oat | '. $pageTitle;
        ?>
    </title>
</head>
<body>
    <?php include('template/navbar.php'); ?>
    <div class="container text-center">
        <h3>ART</h3>
        <p><em>Tao's Website!</em></p>
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img class src="art/arrival.jpg" alt="arrival">
                    <div class="carousel-caption">
                        <h3>The Arrival</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="art/cat.jpg" alt="cat">
                    <div class="carousel-caption">
                        <h3>The King</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="art/pattern.jpg" alt="pattern">
                    <div class="carousel-caption">
                        <h3>Pattern</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="art/tree.jpg" alt="tree">
                    <div class="carousel-caption">
                        <h3>Tree</h3>
                    </div>
                </div>

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
</body>
</html>