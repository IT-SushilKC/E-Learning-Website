<?php
include("header.php");
?>

<div class="container-fluid bg-dark">
    <div class="row">
    <img src="./img/banner.jpg" alt="" style="height: 500px; width:100%; oject-fit:cover; box-shadow:10px;">
    </div>
</div>

<div class="container">
    <h2 class="text-center my-4">
    Payment Status
    </h2>
    <form action="" method="post">
        <div class="form-group row">
        <label class="offset-sm-3 col-form-label">Order ID:</label>
    <div>
        <input type="text" class="form-control mx-3">
    </div>
    <input type="submit" class="btn btn-secondary mx-4 mb-4">
        Submit
 
        </div>
    </form>
</div>
<!--Start Contact Section-->
<?php
include("contact.php");
?>
<!--End Contact Section-->
<?php
include("footer.php");
?>