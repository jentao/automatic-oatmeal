<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Css -->
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ravi+Prakash"">

<style>
    html,
    body{
        height: 100%;
        width: 100%;
    }

    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
        color: #e4fafa;
        background: #2e7bc6;
    }

    .navbar-brand {
        font-family: 'Ravi Prakash', cursive;
        font-size: 35px;
        padding:20px;
    }

    .container{
        width: auto;
        padding: 20px 120px;
    }

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: auto;
        height: 500px;
        margin: auto;
    }


    .carousel-control.left, .carousel-control.right {
        background-image: none
    }

    .carousel-control .glyphicon-chevron-left, .carousel-control .glyphicon-chevron-right  {
        color: #2e7bc6;
    }

    div.img img {
        border: 10px solid transparent;
        width: 200px;
        height: auto;
    }

    .img :hover{
        border-color: #dbebf5;
    }

    .detail {
        height: 500px;
    }

    .com-input{
        width: 60%;
    }

    .col-text, .col-text :link {
        text-decoration: none;
        color: #2e7bc6;
    }

    .col-text :hover{
        text-decoration: none;
        opacity: 0.7;
    }

    #login{
        min-width: 250px;
        padding: 14px 14px 0;
    }

    #myImg {cursor: pointer;}
    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        overflow: auto; /* Enable scroll if needed */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        text-align: center;
        color: #ccc;
        font-size: 30px;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: fixed;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        transition: 0.3s;
        opacity: 1;
    }

    .close:hover,
    .close:focus {
        color: #2e7bc6;
        text-decoration: none;
        cursor: pointer;
        opacity: 1;
    }

    .profile{
        margin: 30px;
        width: 150px;
    }

</style>