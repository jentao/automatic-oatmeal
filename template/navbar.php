<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    $pageTitle;
    $ifLogin;
    $admin;
    include('config/css.php');
    include('config/js.php');
    ?>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">Oat</a>
            </div>
            <ul class="nav navbar-nav">
                <li
                    <?php if($pageTitle=='Home'){echo 'class="active"';} ?>
                ><a href="home.php">Home</a></li>
                <li
                    <?php if($pageTitle=='Artworks'){echo 'class="active"';} ?>
                ><a href="artwork.php">Artworks</a></li>
            </ul>
            <?php
            if(!$ifLogin){
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if($pageTitle=='Sign Up'){echo 'class="active"';} ?>>
                        <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        <ul id="login" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            <?php
            }
            else{ ?>
                <ul class="nav navbar-nav navbar-right" style="height: auto">
                    <?php if($admin==TRUE){ ?>
                    <li <?php if($pageTitle=='Admin Page'){echo 'class="active"';} ?>><a href="admin.php">Admin Page</a></li>
                    <?php }?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img src="profile/1.png" class="img-circle" style="height: 20px;padding: 0px; margin: 0px">
                        </a>
                        <ul id="login" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary btn-block">Log Out</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            <?php
            } ?>
        </div>
    </nav>
</body>
