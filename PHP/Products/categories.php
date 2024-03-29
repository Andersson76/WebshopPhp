<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <script async src="../../script/bootstrap.min.js"></script>
    <script defer src="../../Js/category.js"></script>
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
                  <a href="./PHP/Products/categories.php" class="nav-link text-white" id="products" >
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
       <!-- ---------------------------------------------Category--------------------------------------------------------- -->
<section class="h1Cate">
  <h1>Categories</h1>
</section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <span></span>
            
          </div>
        </div>
      </div>
      <!-- ---------------------------------------------Category--------------------------------------------------------- -->
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
<!-- <script src="./script/bootstrap.min.js"></script> -->

</script>
</body>
</html>
