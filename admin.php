<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        $pageTitle = 'Admin Page';
        $ifLogin = TRUE;
        $admin = TRUE;
        echo 'Oat | '. $pageTitle;
        ?>
    </title>
</head>
<body>
<?php include('template/navbar.php'); ?>
<div class="container">
    <h3 style="text-align: center">Admin Page</h3>
    <div class="container">
        <form class="form-horizontal">
            <div class="form-group" style="padding: 15px">
                <label class="control-label col-sm-2" for="usn">Image Title:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="usn" placeholder="Enter image title">
                </div>
            </div>
            <div class="form-group" style="padding: 15px">
                <label class="control-label col-sm-2" for="email">Image:</label>
                <div class="col-sm-8">
                    <input type="file" name="pic" accept="image/*">
                </div>
            </div>
            <div class="form-group" style="padding: 15px">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
