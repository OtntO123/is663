<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HighLander @ NJIT</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a  href="http://njitactivities.com/index.php?page=accounts&action=logout "style = "color:#D42A2A" class="navbar-brand" href="#">NJIT ACTIVITY CENTER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Message(0)
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Current Player(999)</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Your Choice X</h1>
          
          <div class="list-group">
            <b><a href="#" style = "color:black"  class="list-group-item">Venue<span style = "color:#D42A2A"  class="badge">25</span></a></b>
            <b><a href="#" style = "color:black"  class="list-group-item">Active Activity<span style = "color:#D42A2A"  class="badge">313</span></a></b>
            <a href="#" style = "color:black"  class="list-group-item">CREATE A BRAND NEW ONE <hr>
                <label for="usr">Tytle:</label>
                <input type="text" class="form-control" id="usr">
                    <label for="usr">Description:</label>
                    <input type="text" class="form-control" id="usr">
                        <br>
                        
                        <div class="d-inline p-2 bg-primary text-white">S</div>
                        <div class="d-inline p-2 bg-dark text-white">M</div>
                        <div class="d-inline p-2 bg-dark text-white">T</div>
                        <div class="d-inline p-2 bg-dark text-white">W</div>
                        <div class="d-inline p-2 bg-dark text-white">T</div>
                        <div class="d-inline p-2 bg-dark text-white">F</div>
                        <br><br>
                        <label for="usr">Hours (Sunday):</label>
                        <input type="text" class="form-control" id="usr">
                        <br>
                <button type="button"  onclick="location.href = 'http://njitactivities.com/index.php?page=accounts&action=register';" class="btn btn-primary">Create and ADD Scenes</button>
                </a>
          </div>
          
          <br><br><br>
          <div class="list-group">
              <b><a href="#" style = "color:#1A2EE3"  class="list-group-item  list-group-item-success">My Activities</a></b>
              <a href="#" class="list-group-item list-group-item-action">Pool - Sunday, 25th</a>
              <a href="#" class="list-group-item list-group-item-action">Weight - Sunday, 25th</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="/pictures/basketballarena.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/pictures/basketballarena.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/pictures/basketballarena.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/pictures/swimming.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Running in the POOL</a>
                  </h4>
                  <h5>Current Member 4</h5>
                  <p class="card-text">Swim every Thursday!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/pictures/basketballarena.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Folking Basketball</a>
                  </h4>
                  <h5>Current Member 9</h5>
                  <p class="card-text">See you every Monday!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/pictures/Racketball.png" alt=""></a>
                  <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Swing Racquetball</a>
                  </h4>
                  <h5>Current Member 19</h5>
                  <p class="card-text">See you every Saturday!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
