<?php
require 'src/Cloudinary.php';
require 'src/Uploader.php';
require 'src/Api.php';

\Cloudinary::config(array(
    "cloud_name" => "d7ejf674x6",
    "api_key" => "149479285251397",
    "api_secret" => "adI3NJQXhenIrk8jIPV1iv-ytDI"
));
// Setup File:

#Database Connection Here
$dbc = mysqli_connect('localhost','dev','847629806','oat') OR die('Could not connect because: '.mysqli_connect_error());



