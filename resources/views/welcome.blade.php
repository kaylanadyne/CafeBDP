<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset("css/style.css") }}>
</head>
<body>
    <!--navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="{{ asset('images/logow.png') }}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
      
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->

<!-- jumbotron -->
    <div class="container mt-4">
        <div class="row" >
            <div class="col-7" style="margin-top: 150px" >
                <p><strong>WELCOME TO</strong></p>
                <h2 class="text-warning"><strong>Cafe Wikrama</strong></h2>
                <h4 class="text-danger">Fresh and Delicious Food Every Day!</h4>
                <a href="/product" class="btn btn-outline-danger" style="border: radius 40%;" >Order now!</a>
            </div>
            <div class="col-5 mb-3">
                <img src="{{ asset('images/makan.png') }}" style="justify-content center">
            </div>
        </div>
    </div>
<!-- end jumbotron -->

<!-- popular books card -->
<div class="card-group">
  <div class="card bg-primary">
    <div class="card-body text-center">
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card bg-warning">
    <div class="card-body text-center">
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card bg-success">
    <div class="card-body text-center">
      <p class="card-text"></p>
    </div>
  </div>
  <div class="card bg-danger">
    <div class="card-body text-center">
      <p class="card-text"></p>
    </div>
  </div>
</div>
<section>
    <div class="container mt-5">
        <div class="row text-center">
            <h3>Our Menu</h3>
        </div>
        <div class="row my-4 ms-5">
            <div class="col-lg-4 mb-3">
                <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/564x/de/65/97/de6597ca00caddadd08a99abaabb94e0.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Mie</h5>
                        <p class="card-text">Rp12.000</p>
                        <a href="" class="btn btn-outline-primary w-100
                        ">Order now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/236x/fa/4c/4b/fa4c4b4b5c59a346b7fc5a55ca794c84.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Kue</h5>
                        <p class="card-text">Rp12.000</p>
                        <a href="" class="btn btn-outline-primary w-100">Order now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="https://i.pinimg.com/236x/81/e9/cc/81e9cce4445f2639e83c847fbcfb58f4.jpg" class="card-img-top" alt="..." style="max-height: 400px;">
                    <div class="card-body">
                        <h5 class="card-title">Sandwich</h5>
                        <p class="card-text">Rp12.000</p>
                        <a href="" class="btn btn-outline-primary w-100">Order now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end popular books card -->

<!-- special -->
<div class="container mt-4">
        <div class="row" >
            <div class="col-7" >
            <img src="{{ asset('images/cookies.png') }}" style="justify-content center">
            </div>
            <div class="col-5" style="margin-top: 150px">
                <p><strong>Our Favourite Menu</strong></p>
                <h2 class="text-warning"><strong>Cokies</strong></h2>
                <p><strong>Rp5.000</strong></p>
                <a href="/register" class="btn btn-outline-danger" style="border: radius 40%;" >Order now!</a>
            </div>
        </div>
    </div>
<!-- end special -->


<!-- footer -->
<footer class="mt-5 bg-primary bg-opacity-25 text-center" style="height:50px;">
    <p>
        Created by <a href="https://www.instagram.com/kaylanadyne/?hl=id" style="text-decoration:none; color:indigo;" target="_blank">Nadyne Kayla Permana</a>
    </p>
</footer>
<!-- end footer -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>
</html>