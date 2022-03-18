<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Carousel Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'> -->
   <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <!-- <link href="views/css/carousel.css" rel="stylesheet"> -->
    <link href="views/css/carousel.css" rel="stylesheet">

    <!-- <link rel="stylesheet" " href="views/css/style.css"> -->
    <link rel = "stylesheet" href="style.css">

    

    
</head>

<body>

    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MyTrip</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            
          </li>
        
         <!--  <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            <li class="nav-item">
            <a href="<php echo BASE_URL;?>logout" title="logout" class="btn btn-link mr-2 mb-2">
              <i class="bi bi-person mr-2"> ?php echo $_SESSION['fullname'];?></i>
              
             </a>
            </li>
          </li> -->      

       </ul>
        <form class="d-flex" action="login">
            <ul class="nav navbar-nav navbar-right">
            <button type="submit" class="btn btn-primary w-100 h-70 mx-auto">
                Log in
            </button>
            
            </ul>
        </form>
    
      </div>
    </div>
  </nav>
</header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect  width="100%" height="100%" fill="#777"/></svg>
        
        <img src="views/images/background-login.jpg">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="./booking">Search Flights</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
      
        <img src="views/images/landingbck.png">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
           
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <img src="views/images/background-login.jpg">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
          </div>

        </div>
      </div>
      
    </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                  
                <img src="views/images/cancel.png" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>

                    <h2>CAN I CANCEL/CHANGE MY FLIGHT?</h2>
                    <p>We understand you have questions about our change/cancel policy. Learn more about our Basic Economy tickets, no change fees and fare difference policies.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                <img src="views/images/ecredits.png" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>
                      
                    <h2>HOW DO I FIND MY ECREDITS?</h2>
                    <p>If your trip has been impacted by coronavirus, it's easy to cancel or change your flights. Learn how to modify your trip and rebook using eCredits with our step-by-step guides.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                  <img src="views/images/updates.png" width="140" height="140" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></svg>
                     
                    <h2>WHAT ARE THE LATEST TRAVEL UPDATES?</h2>
                    <p>Information is more important than ever. We pledge to share updates with you as quickly as possible, with full transparency and, as always, with your safety foremost in mind.</p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Flying Made Simple. <span class="text-muted">It’ll blow your mind.</span></h2>
                    <p class="lead">  We are simplifying the travel experience from booking to flying and giving you more control – especially when moments arise that are out of your control. <br>
        By removing change fees and making it easier to manage your changes on delta.com or in the Fly Delta app through My Trips, we are giving you peace of mind<br>
        to fly when you are ready.</p>
                </div>
                <div class="col-md-5">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
                    <img src="views/images/madesimple.jpg" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading"><span class="text-muted">In-Flight Experience</span></h2>
                    <p class="lead"> Want Wi-Fi? More legroom? Or even a seat that allows you to sleep perfectly flat? <br>
        Tripadvisor Flights now makes it easier to find the amenities that can make or break <br>
        your flight. Find which flights include Wi-Fi, live TV, power outlets, free baggage, and more.</p></p>
                </div>
                <div class="col-md-5 order-md-1">
                <img src="views/images/flight-experience.png" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><span class="text-muted">Best Flight Deals.</span></h2>
        <p class="lead">No need to shop multiple sites any more. We've already done that by searching <br>
        hundreds of cheap flights for you– scouring premium airlines, low-cost carriers and the biggest<br>
        online travel agencies for the best deals. We'll even check alternate dates and nearby airports <br>
        to help you save money, time, even sanity on airline tickets.</p>
      </div>
      <div class="col-md-5">
      <img src="views/images/flightdeals.png" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">

      </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div>
        <!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>