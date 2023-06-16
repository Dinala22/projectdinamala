<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Landing Page</title>
</head>
<body>
    <section id="navbar">
            <nav class="navbar navbar-expand-lg bg-dark ">
                <div class="container">
                  <a class="navbar-brand text-white" href="#">Needynnada</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white" href="#content">Products</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link text-white " href="#footer">About</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search" action="/login">
                        <button class="btn btn-outline-primary" type="submit">Login</button>
                    </form>
                  </div>
                </div>
            </div>
        </nav>
    </section>
    <section id="carousel">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>  </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://i.postimg.cc/HnVkC5p4/Untitled-2.png" class="w-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
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
    </section>
    <section id="content">
        <div class="container pt-5 pb-5">
            <h2 class="mb-3 fw-bold">
                Products
            </h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="https://cdn1-production-images-kly.akamaized.net/7FrqQNl7apjVHr8VZzP7mt15o_c=/1200x1200/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1439641/original/042027300_1482131661-reddit.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="https://cdn1-production-images-kly.akamaized.net/7FrqQNl7apjVHr8VZzP7mt15o_c=/1200x1200/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1439641/original/042027300_1482131661-reddit.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="https://cdn1-production-images-kly.akamaized.net/7FrqQNl7apjVHr8VZzP7mt15o_c=/1200x1200/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1439641/original/042027300_1482131661-reddit.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 100%;">
                        <img src="https://cdn1-production-images-kly.akamaized.net/7FrqQNl7apjVHr8VZzP7mt15o_c=/1200x1200/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1439641/original/042027300_1482131661-reddit.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </section>
    <section id="footer">
        <!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: #0000000;">
      <a class="text-white" href="https://mdbootstrap.com/"> © 2020 Copyright: Needynnada</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    </section>
</body>
</html>
