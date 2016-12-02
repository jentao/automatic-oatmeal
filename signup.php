<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        $pageTitle = 'Sign Up';
        $ifLogin = FALSE;
        echo 'Oat | '. $pageTitle;
        ?>
    </title>
</head>
<body>
<?php include('template/navbar.php'); ?>
    <div class="container">
        <h3 style="text-align: center">Sign Up</h3>
        <div style="float: left">
            <a><img class="profile img-circle col-sm-2" src="profile/1.png"></a>
            <input type="file" name="pic" accept="image/*">
        </div>
        <div class="container" >
            <form class="form-horizontal">
                <div class="form-group" style="padding: 15px">
                    <label class="control-label col-sm-2" for="usn">Username:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="usn" placeholder="Enter username">
                    </div>
                </div>
                <div class="form-group" style="padding: 15px">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group" style="padding: 15px">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
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
