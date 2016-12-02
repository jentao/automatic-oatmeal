<?php
include('config/setup.php');
include ('functions/data.php');
$id = $_GET['id'];
#Page Setup
$page = data_art($dbc,$id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php
        $pageTitle = 'King';
        $ifLogin = FALSE;
        echo 'Oat | '. $pageTitle;
        ?>
    </title>

</head>
<body>
<?php include('template/navbar.php'); ?>
    <div class="container text-center">
        <h3><?php echo $page['title'] ?></h3>
        <br>
        <img id="myImg" class="detail" src="art/<?php echo $page['file_name'] ?>" alt="<?php echo $page['title'] ?>">
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img1">
            <div id="caption"></div>
        </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img1");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = img.src;
            captionText.innerHTML = img.alt;
        }
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    <div style="padding-left: 20px">
        <h3 style="text-align: center" class="col-text">
            <a href="#comments" data-toggle="collapse">Comments</a>
        </h3>
        <div class="container com-input">
            <form>
                <div class="form-group">
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <button type="button" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div id="comments" class="collapse">
            <div class="media">
                <div class="media-left media-top">
                    <img src="profile/1.png" class="media-object img-circle" style="width:80px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <hr>
            <div class="media">
                <div class="media-left media-top">
                    <img src="profile/1.png" class="media-object img-circle" style="width:80px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <hr>
        </div>
    </div>

</body>
</html>