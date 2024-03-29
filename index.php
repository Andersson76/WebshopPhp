<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/hero.css">
    <link rel="stylesheet" href="../../css/features.css">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <title>WebShop</title>
</head>
<body>
  
    <!-- ---------------------------------------------header--------------------------------------------------------- -->
    <header>
        <div class="px-3 py-2 bg-dark text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="./index.html" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <i class="lni lni-home logoPhp"></i>
              </a>

              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="./index.html" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                    Home
                  </a>
                </li>
                <li>
                  <a href="./admin.html" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    Admin
                  </a>
                </li>
                <li>
                  <a href="./customer.html" class="nav-link text-white">
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                    Customer
                  </a>
                </li>
                <li>
                  <a href="./php/products/categories.php" class="nav-link text-white" id="products" >
                    <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                    Products
                  </a>
                </li>
                <li>
                  <a class="link-light" href="./cart.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                  </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3">
          <div class="container d-flex flex-wrap justify-content-center">
            <div class="text-end">
              <a href="./signIn.html"><button type="button" class="btn btn-secondary text-white me-2">Login</button></a>
              <a href="./signUp.html"><button type="button" class="btn btn-dark">Sign up</button></a>
            </div>
          </div>
        </div>
      </header>
      <!-- ---------------------------------------------header--------------------------------------------------------- -->
      <!-- ---------------------------------------------hero section--------------------------------------------------------- -->
      <div class="px-4 py-5 my-5 text-center">
  <h1 class="display-5 fw-bold">Web shop</h1>
<img class="d-block mx-auto mb-4" src="./productImages/Hero section/hero.jpg" alt="" width="60%" height="auto">
<div class="col-lg-6 mx-auto">
<p class="lead mb-4">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</p>
</div>
</div>
      <!-- ---------------------------------------------Hero section--------------------------------------------------------- -->
      <!-- ---------------------------------------------cat--------------------------------------------------------- -->
      <!-- <div class="container px-4 py-5" id="custom-cards">
          <h2 class="pb-2 border-bottom">Categories</h2>
          <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

            <a class="plain" href="./PHP/Products/productWatches.php">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./productImages/AppleWatch/appleWatch-2019.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    Watches
                  </h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small></small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small></small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            </a>

          <a class="plain" href="./PHP/Products/productIphones.php">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./productImages/Iphones/Iphone11.128GB.pic2.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    Iphone
                  </h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small></small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small></small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </a>

          

          <a class="plain" href="./PHP/Products/productMacbook.php">
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('./productImages/Macbooks/macbook-pro2021Pic2.jpg');">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
                    MacBooks
                  </h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small></small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small></small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            </a>

          
          </div>
        </div> -->

      <!-- ---------------------------------------------cat--------------------------------------------------------- -->
      <!-- ---------------------------------------------news--------------------------------------------------------- -->
      <div class="container col-xl-10 col-xxl-8 px-4 py-5">
          <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
              <h1 class="display-6 fw-bold lh-1 mb-3">Subscribe to our newsletter</h1>
              <img class="d-block mx-auto mb-4" src="./productImages/Hero section/news.jpg" alt="" width="100%" height="auto">
              <p class="col-lg-10 fs-4"></p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
              <form class="p-4 p-md-5 border rounded-3 bg-light">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <button class="w-100 btn btn-lg btn-secondary" type="submit">Sign up</button>
              </form>
            </div>
          </div>
        </div>
      <!-- ---------------------------------------------news--------------------------------------------------------- -->
      <!-- ---------------------------------------------footer--------------------------------------------------------- -->
      <div class="container">
        <footer class="py-4">
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="mailto:webshop@gmail.com"><i class="lni lni-envelope"></i></a></li>
              <li class="ms-3"><a class="link-dark" href="tel:070-000-000"><i class="lni lni-phone"></i></a></li>
            </ul>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-dark" href="https://twitter.com"><i class="lni lni-twitter-original"></i></a></li>
              <li class="ms-3"><a class="link-dark" href="https://instagram.com"><i class="lni lni-instagram-original"></i></a></li>
              <li class="ms-3"><a class="link-dark" href="https://facebook.com"><i class="lni lni-facebook-original"></i></a></li>
              <li class="ms-3"><a class="link-dark" href="https://github.com/Bami85/WebshopPhp"><i class="lni lni-github-original"></i></a></li>
            </ul>
          </div>
        </footer>
      </div>
      <!-- ---------------------------------------------footer--------------------------------------------------------- -->
<div class="b-example-divider"></div>
<script src="./script/bootstrap.min.js"></script>
<script src="./script/bootstrap.min.js.map"></script>
<script src="./Js/logic.js"></script>
</body>
</html>
