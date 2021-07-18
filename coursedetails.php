<?php
include("header.php");
?>

<div class="container-fluid bg-dark">
    <div class="row">
    <img src="./img/banner.jpg" alt="" style="height: 500px; width:100%; oject-fit:cover; box-shadow:10px;">
    </div>
</div>

<!--Main Section-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="./img/2.jpg" alt="" class="card-img-top">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Course Name: Learn Guitar</h5>
                    <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam minus tempore perferendis! Porro veritatis voluptas asperiores corporis culpa repellendus quidem voluptatibus cum nostrum ipsum sequi, natus tempora eum maxime minima.</p>
                    <p class="card-text">
                        Duration: 10days
                    </p>
                    <form action="" method="post" >
                        <p class="card-text d-inline">Price: <small><del>&#23232 32232</del></small><span class="font-weight-bold">&#23232 32232</span></p>
                        <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Lession No.</th>
                            <th scope="col">Lession Name</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Introduction</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php
include("footer.php");
?>