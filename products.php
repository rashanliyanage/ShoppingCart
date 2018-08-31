<?php  include_once 'includes/header.php'?>
<div class="container">
    <div class="row pt-3">
        <div class="col-md-12">
            <form action="" method="post">
            <div class="row  mx-0">
                <div class="col-md-5 px-0 border border-warning">
                    <input type="text" class="form-control rounded-0" placeholder="What ?">
                </div>
                <div class="col-md-5 px-0 border border-warning">
                    <input type="text" class="form-control rounded-0" placeholder="Where ?">
                </div>
                <div class="col-md-2 px-0">
                    <button class="rounded-0 btn btn-warning btn-block">Find</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="row mx-0 pb-5">
        <div class="col-md-2 px-0">
            <div class="row pb-2 pt-5">
                <div class="col-md-12">
                    <h3>Categories</h3>
                </div>
            </div>
            <div class="btn-group-vertical">
                <button type="button" class="btn btn-warning btn-lg">Category - 01</button>
                <button type="button" class="btn btn-warning btn-lg">Category - 02</button>
                <button type="button" class="btn btn-warning btn-lg">Category - 03</button>
                <button type="button" class="btn btn-warning btn-lg">Category - 04</button>
                <button type="button" class="btn btn-warning btn-lg">Category - 05</button>
                <button type="button" class="btn btn-warning btn-lg">Category - 06</button>
                <button type="button" class="btn btn-warning btn-lg">Category - 07</button>
                <button type="button" class="btn btn-warning btn-lg">Category - 08</button>
                <button type="button" class="btn btn-warning btn-lg">Category - 09</button>
                <button type="button" class="btn btn-warning btn-lg">Category - 10</button>
            </div>
            <div class="pt-3">
                <p>Price</p>
                <form>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="email" class="form-control col-12" id="colFormLabelSm" placeholder="MIN">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="colFormLabel" placeholder="MAX">
                        </div>
                    </div>

                </form>
            </div>

            <div class="dropdown show">
                <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Price: High - Low
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Price: High - Low</a>
                    <a class="dropdown-item" href="#">Price: Low - High</a>
                    <a class="dropdown-item" href="#">Date : Latest</a>
                    <a class="dropdown-item" href="#">Date : Older</a>
                </div>
            </div>
        </div>

        <div class="col-md-10 px-0">
            <div class="row pb-2 pt-5">
                <div class="col-md-12">
                    <h3 class="text-center">All Products</h3>
                </div>
            </div>

            <div class="row pl-2">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/images/item1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dell Laptop</h5>
                            <p class="card-text">Some quick example text to build on</p>
                            <a href="#" class="btn btn-warning btn-block">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/images/item1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dell Laptop</h5>
                            <p class="card-text">Some quick example text to build on</p>
                            <a href="#" class="btn btn-warning btn-block">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/images/item1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dell Laptop</h5>
                            <p class="card-text">Some quick example text to build on</p>
                            <a href="#" class="btn btn-warning btn-block">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/images/item1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dell Laptop</h5>
                            <p class="card-text">Some quick example text to build on</p>
                            <a href="#" class="btn btn-warning btn-block">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'includes/footer.php'?>
