<?Php
 include "./database/connect.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="styles.css" rel="stylesheet">
    <title>Ecommerce app</title>
  </head>
  <body>
      <div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="./image/logo.png" class="logoimg" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="fa-solid fa-cart-shopping"></i>Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Total Price: 100/</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child  -->
<div class="flex flex-col w-full py-3 bg-secondary text-white">
    <ul class="flex">
        <li class="text-xl font-extralight mr-10"><a href="">Welcome Guest</a></li>
        <li class="text-xl font-extralight"><a href="#">Login</a></li>
    </ul>
</div>

<!-- third child  -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner h-[400px]">
    <div class="carousel-item active">
      <img src="./image/shopping2.webp" class=" carouselimage d-block w-100 h-[400px]" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/shopping1.webp" class="carouselimage d-block w-100 h-[400px]" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./image/shopping3.webp" class="carouselimage d-block w-100 h-[400px]" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- fourth child  -->
<div class="flex justify-center items-center flex-col mt-4">
    <h1 class="text-2xl font-semibold capitalize text-red-700">Hidden store</h1>
    <p class="text-xl text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, minima.</p>
</div> 


<!-- fifth child  -->
<div class="containers mt-4 p-3 m-0">
<div class="row">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-4 mb-3">
            <div class="card">
  <img src="./image/shopping1.webp" style="height:30vh" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="mt-4">
        <a href="#" class="btn btn-danger">Add to cart</a>
        <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
</div>
            </div>

            <div class="col-md-4 mb-3">
            <div class="card">
  <img src="./image/shopping2.webp" style="height:30vh" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="mt-4">
        <a href="#" class="btn btn-danger">Add to cart</a>
        <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
</div>
            </div>

            <div class="col-md-4 mb-3">
            <div class="card">
  <img src="./image/shopping1.webp" style="height:30vh" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="mt-4">
        <a href="#" class="btn btn-danger">Add to cart</a>
        <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
</div>
            </div>

            <div class="col-md-4 mb-3">
            <div class="card">
  <img src="./image/shopping3.webp" style="height:30vh" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="mt-4">
        <a href="#" class="btn btn-danger">Add to cart</a>
        <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
</div>
            </div>

            
            <div class="col-md-4 mb-3">
            <div class="card">
  <img src="./image/shopping1.webp" style="height:30vh" class="card-img-top object-cover" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="mt-4">
        <a href="#" class="btn btn-danger">Add to cart</a>
        <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
</div>
            </div>

            <div class="col-md-4 mb-3">
            <div class="card">
  <img src="./image/shopping3.webp" style="height:30vh" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="mt-4">
        <a href="#" class="btn btn-danger">Add to cart</a>
        <a href="#" class="btn btn-primary">View More</a>
    </div>
  </div>
</div>
            </div>


        </div>
    </div>

    <!-- side bar  -->
    <div class="col-md-2 p-0 m-0">
        <div class="sidbar bg-black p-0 h-[100vh]">
            <!-- brands to display  -->
            <ul class="navbar-nav me-auto">
                <li class="navbar-items bg-purple-500 text-center p-2">
                    <a href="" class="text-xl text-white capitalize">Delivery brand</a>
                </li>
                <li class="navbar-items bg-purple-700 text-center p-2">
                    <a href="" class="text-xl text-white capitalize">brand1</a>
                </li>
                <li class="navbar-items bg-purple-700 text-center p-2">
                    <a href="" class="text-xl text-white capitalize">brand2</a>
                </li>
                <li class="navbar-items bg-purple-700 text-center p-2">
                    <a href="" class="text-xl text-white capitalize">brand3</a>
                </li>
                <li class="navbar-items bg-purple-700 text-center p-2">
                    <a href="" class="text-xl text-white capitalize">brand4</a>
                </li>
                <li class="navbar-items bg-purple-700 text-center p-2">
                    <a href="" class="text-xl text-white capitalize">brand5</a>
                </li>
            </ul>

            <!-- category to display  -->
            <ul class="navbar-nav me-auto">
                <li class="navbar-items bg-purple-500 text-center p-2">
                    <a href="" class="text-xl text-white capitalize">Categories</a>
                </li>
                <li class="navbar-items bg-black text-center p-2">
                    <a href="" class="text-xl text-white capitalize">Categories1</a>
                </li>
                <li class="navbar-items bg-black text-center p-2">
                    <a href="" class="text-xl text-white capitalize">Categories2</a>
                </li>
                <li class="navbar-items bg-black text-center p-2">
                    <a href="" class="text-xl text-white capitalize">Categories3</a>
                </li>
                <li class="navbar-items bg-black text-center p-2">
                    <a href="" class="text-xl text-white capitalize">Categories4</a>
                </li>
                <li class="navbar-items bg-black text-center p-2">
                    <a href="" class="text-xl text-white capitalize">Categories5</a>
                </li>
            </ul>
    </div>
    </div>
</div>
</div>

<!-- last child  -->
<div class="bg-info text-center w-full">
    <p class="text-xl font-extralight capitalize text-black">All right reserved o -Designed by krish-<?Php echo date('Y') ?></p>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>