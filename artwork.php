<?php
include('config/setup.php');
include ('functions/data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        $pageTitle = 'Artworks';
        $ifLogin = FALSE;
        echo 'Oat | '. $pageTitle;
        ?>
    </title>
</head>
<body>
    <?php include('template/navbar.php'); ?>
    <div class="container text-center">
        <h3>The Artworks</h3>
        <br>
        <div class="row">
        <?php
        $q = "SELECT * FROM artworks";
        $result = mysqli_query($dbc,$q);

        $num = artworks_rows($dbc);
        $artworks = array();

        while($row = mysqli_fetch_array($result))
        {
            $artworks[] = array('id'=>$row['id'], 'file_name'=>$row['file_name'], 'title'=>$row['title']);
        }
        for($x=0;$x<$num;$x++){?>
            <div class="col-sm-3">
                <p class="text-center"><strong><?php echo $artworks[$x]['title'] ?></strong></p><br>
                <div class="img">
                    <a target="_blank" href="detail.php?id=<?php echo $artworks[$x]['id'] ?>">
                        <img src="art/<?php echo $artworks[$x]['file_name'] ?>" alt="Cat">
                    </a>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>