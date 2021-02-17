@include('header')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cochessss!!!!</title>
    <style media="screen">
      .carousel{
        height: 620px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
            <h1>The best cars of the world!!</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
    <li data-target="#carousel" data-slide-to="4"></li>
    <li data-target="#carousel" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">


    <div class="carousel-item active">
      <img class="d-block w-100" src="1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="3.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="4.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="5.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="6.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
      </div>
    </div>
@include('footer')
