<?php
function data_art($dbc, $id){
    #Page Setup
    $q = "SELECT * FROM artworks WHERE id = $id";
    $r = mysqli_query($dbc, $q);
    $data = mysqli_fetch_assoc($r);

    return $data;
}
function artworks_rows($dbc){
    $r = mysqli_query($dbc,"SELECT COUNT(*) FROM artworks");
    $data = mysqli_fetch_array($r);
    $num = $data[0];

    return $num;
}