<?php 
include('config2.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panda e-commerce</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <!------------ Nav Bar -------------------->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active mx-2">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#shoes">Shoes</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#backpack">Backpack</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link " href="#subscribe"><?php
                            echo isset($_SESSION['USER']) ? $_SESSION['USER'] : "tu dois t'inscrire"; ?></a>
                    </li>
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          More Option
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#subscribe">Subscribe</a>
                            <a class="dropdown-item" href="#">Address</a>
                            <a class="dropdown-item" href="#">Location</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Our Services</a>
                            <a class="dropdown-item"
                                    href="login.php"
                                <?php echo isset($_SESSION['USER']) ? 'style="display: none; "' : ''; ?>
                            >Sign Up</a>

                        </div>
                    </li>
                </ul>
                <form class="form-inline  mx-2 my-lg-0" action="">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" <?php echo !isset($_SESSION['USER']) ? 'style="display: none; "' : '';
                    session_destroy();  ?>>Logout</button>
                </form>
            </div>
        </nav>
    </div>
    <!------------ Slider - Carousel -------------------->
    <div class="container">
        <div id="carouselExampleFade" class="carousel slide bg-color" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h1>Mi LED TV 4A PRO 32</h1>
                            <p>This is the best tv in the world. crystal clear image, 3D sound effect, easy navigation and child lock</p>
                            <h1 class="price">$1200</h1>
                            <button class="buy-now-button">Buy Now</button>
                        </div>
                        <div class="col-md-5"><img src="img/banner-images/tv.png" class="d-block w-100" alt="tv"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h1>Cool Dude Headphone</h1>
                            <p>Stylish look, noise cancelling technology, long battery life, Extra bass. Comfortable in any position.</p>
                            <h1 class="price">$420</h1>
                            <button class="buy-now-button">Buy Now</button>
                        </div>
                        <div class="col-md-5"><img src="img/banner-images/headphone.png" class="d-block w-100" alt="headphone"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h1>X-Box for your living room</h1>
                            <p>Is there a inner child in you? This is the best gift you can give to yourself.</p>
                            <h1 class="price">$600</h1>
                            <button class="buy-now-button">Buy Now</button>
                        </div>
                        <div class="col-md-5"><img src="img/banner-images/xbox.png" class="d-block w-100" alt="xbox">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!------------ Catagoty -------------------->
    <div class="container categories">
        <div class="row">
            <div class="col-md-4 .offset-md-1 ">
                <div class="cat1 d-flex justify-content-between align-items-center">
                    <h1>Watch</h1>
                    <img src="img/categories/watch.png" alt="Watch">
                </div>
            </div>
            <div class="col-md-4 .offset-md-1">
                <div class="cat2 d-flex justify-content-between align-items-center">
                    <h1>Bag</h1>
                    <img src="img/categories/bag.png" alt="Watch">
                </div>
            </div>
            <div class="col-md-4 .offset-md-1">
                <div class="cat3 d-flex justify-content-between align-items-center">
                    <h1>Shoes</h1>
                    <img src="img/categories/shoes.png" alt="Watch">
                </div>
            </div>
        </div>
    </div>
    <!------------ Shoes - Catagoty -------------------->
    <div class="container shoes" id="shoes">
        <h3>Shoes</h3>
        <div class="card-deck">
            <div class="card">
                <img src="img/shoes/shoe-1.png" class="card-img-top" alt="shoe-1">
                <div class="card-body">
                    <h5 class="card-title">Supply 350</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional.</p>
                    <h5>$120</h5>
                    <button class="buy-now-button">Buy Now >></button>
                </div>
            </div>
            <div class="card">
                <img src="img/shoes/shoe-2.png" class="card-img-top" alt="shoe-2">
                <div class="card-body">
                    <h5 class="card-title">Nike 360</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <h5>$320</h5>
                    <button class="buy-now-button">Buy Now >></button>
                </div>
            </div>
            <div class="card">
                <img src="img/shoes/shoe-3.png" class="card-img-top" alt="shoe-3">
                <div class="card-body">
                    <h5 class="card-title">Red Airmax</h5>
                    <p class="card-text">This is a wider card with supporting text below as additional content.</p>
                    <h5>$350</h5>
                    <button class="buy-now-button">Buy Now >></button>
                </div>
            </div>
        </div>
    </div>
    <!------------ Backpack - Catagoty -------------------->
    <div class="container" id="backpack">
        <h3>Backpack</h3>
        <div class="card-deck">
            <div class="card">
                <img src="img/bags/bag-1.png" class="card-img-top" alt="bag-1">
                <div class="card-body">
                    <h5 class="card-title">Red Laltu Bag</h5>
                    <h5>$120</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                </div>
                <div class="card-footer">
                    <button class="buy-now-button">Buy Now >></button>
                </div>
            </div>
            <div class="card">
                <img src="img/bags/bag-2.png" class="card-img-top" alt="bag-2">
                <div class="card-body">
                    <h5 class="card-title">Blue Niltu Bag</h5>
                    <h5>$320</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <button class="buy-now-button">Buy Now >></button>
                </div>
            </div>
            <div class="card">
                <img src="img/bags/bag-3.png" class="card-img-top" alt="bag-3">
                <div class="card-body">
                    <h5 class="card-title">Black Kaltu Bag</h5>
                    <h5>$169</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                </div>
                <div class="card-footer">
                    <button class="buy-now-button">Buy Now >></button>
                </div>
            </div>
        </div>
    </div>
    <!------------ Subscripe -------------------->
    <div class="container bg-color d-flex justify-content-center align-items-center" id="subscribe">
        <div>
            <h3>LET'S STAY IN TOUCH</h3>
            <h6 class="my-3">Get updates on sales, specials and more</h6>
            <label>
                <input class="form-control my-2" type="text">
            </label>
            <button class="buy-now-button">SUBMIT</button>
        </div>
    </div>
    <!------------ footer -------------------->
    <footer>
        <small> ©2020. Panda Commerce. All rights reserved. Sofia, Bulgaria. </small>
    </footer>
    <!------------ Javascript  -------------------->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>