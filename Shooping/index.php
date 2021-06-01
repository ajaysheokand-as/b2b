<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>SiapTech</title>
</head>

<body>

  <?php include('header.php'); ?>
  <div class="container">
    <!-- Here we show the Category  -->
    <div class="row">
      <div class="col-md-3 col-sm-12 " style="margin-top: 10px;">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            Categoery
          </a>
          <a href="#" class="list-group-item list-group-item-action">A second link item</a>
          <a href="#" class="list-group-item list-group-item-action">A third link item</a>
          <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
          <a href="#" class="list-group-item list-group-item-action">A second link item</a>
          <a href="#" class="list-group-item list-group-item-action">A third link item</a>
          <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
        </div>
      </div>
      <!-- This is carousel  -->
      <div class="col-md-6 col-sm-12" style="margin-top: 10px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/3.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- Here we show the logo  -->
      <div class="col-md-3 col-sm-12" style="margin-top: 10px;">
        <div class="card" style="width: 100%;">
          <img src="image/3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Siap Tech PVT LTD</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">More</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12">

        <table class="table">
          <td>
            <div class="card" style="width: 100%;">
              <img src="image/p2.png" class="card-img-top" alt="..." style="height: 300px; ">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p>Price : <strong> Rs 9999</strong> </p>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </td>
          <td>
            <div class="card" style="width: 100%;">
              <img src="image/p1.png" class="card-img-top" alt="..." style="height: 300px; ">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p>Price : <strong> Rs 9999</strong> </p>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </td>
        </table>
      </div>
      <div class="col-md-4 col-sm-12" style="margin-top: 10px;">
        <div class="card" style="width: 100%;">
          <div class="card-header">
            List
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 10px;">
    <div class="card text-center">
      <h5 class="card-header ">TRUSTED BRAND</h5>
      <div class="card-body">
        <ul class="list-inline">
          <li class="list-inline-item"><img src="image/logo/google.png" class="rounded" alt="..."> </li>
          <li class="list-inline-item"><img src="image/logo/hbo.png" class="rounded" alt="..."> </li>
          <li class="list-inline-item"><img src="image/logo/hp.png" class="rounded" alt="..."></li>
          <li class="list-inline-item"><img src="image/logo/yahoo.png" class="rounded" alt="..."></li>
          <li class="list-inline-item"><img src="image/logo/cnn.png" class="rounded" alt="..."></li>
          <li class="list-inline-item"><img src="image/logo/cocacola.png" class="rounded" alt="..."></li>
          <li class="list-inline-item"><img src="image/logo/fb.png" class="rounded" alt="..."></li>
        </ul>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12" style="margin-top: 10px;">
        <div class="card" style="width: 100%;">
          <div class="card-header">
            List
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
          </ul>
        </div>

      </div>
      <div class="col-md-8 col-sm-12" style="margin-top: 10px;">
        <ul class="list-inline">
          <li class="list-inline-item" style="width: 46%;">
            <div class="card" style="width: 100%;">
              <img src="image/p2.png" class="card-img-top" alt="..." style="height: 300px; ">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p>Price : <strong> Rs 9999</strong> </p>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </li>
          <li class="list-inline-item" style="width: 46%;">
            <div class="card" style="width: 100%;">
              <img src="image/p1.png" class="card-img-top" alt="..." style="height: 300px; ">
              <div class="card-body">
                <h5 class="card-title">Title</h5>
                <p>Price : <strong> Rs 9999</strong> </p>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>