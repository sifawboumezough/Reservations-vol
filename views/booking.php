<?php

if ($_SESSION['user_type'] == 1) {
    Redirect::to(BASE_URL);
}
 if(isset($_POST['find'])){
    $flightobj= new flightController();
    $flights=$flightobj->adminfindFlights();
}else{
    $flightobj= new flightController();
    $flights=$flightobj->getAllFlights();
}
        // print_r($employes);
 ?>

 


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title></title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"><!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
<script src="https://kit.fontawesome.com/62a937cd3d.js" crossorigin="anonymous"></script>
<!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="style.css"> -->
            
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	<!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="views/css/style.css" />


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
            <a class="nav-link active" aria-current="page" href="./home">Home</a>
        </ul>
		
        <form class="d-flex">
            <ul class="nav navbar-nav navbar-right">
          
          <a href="<?php echo BASE_URL;?>logout" title="Logout" class="btn btn-sm btn-secondary mr-2 mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg> <?php echo $_SESSION['fullname'];?></i>
          </a>
            
            </ul>
        </form>
      </div>
    </div>
  </nav>
</header>
<main>

<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>BOOK A FLIGHT</h1>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
							<form  method="post" action="book">
								<div class="form-group">
									<span class="form-label" id="formgroup">Depart City</span>
									<input class="form-control" type="text" name="depart_city" placeholder="From :">
								</div>
                <div class="form-group">
									<span class="form-label" id="formgroup">Arrival City</span>
									<input class="form-control" type="text" name="arrival_city" placeholder="arrival_city :">
								</div>
                                <div style="display: flex; gap: 5%"> 
                                    <input type="radio" checked id="Vol1" name="Vol1" value="One Way">
                                    <label for="male">One Way</label><br>
                                    <input type="radio" id="Vol2" name="Vol1" value="Round Trip">
                                    <label for="female">Round Trip</label><br><br>
                                </div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Flight Date</span>
											<input class="form-control" name="departure" type="date" >
										</div>
									</div>
									<div  style="display: none" class="col-sm-6"id="form-label">
										<div class="form-group">
										<span class="form-label">Return Date</span>
											<input class="form-control" name="return" type="date" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Class</span>
											<select class="form-control" name="Class">
												<option>First</option>
												<option>Economy</option>
												<option>Business</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button type="submit" name="search" class="btn btn-primary">Search Flight</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</main>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script>
    let radio1 = document.querySelector("#Vol1");
    let radio2 = document.querySelector("#Vol2");
    let returnInput = document.querySelector("#form-label");

    radio1.addEventListener('change', function () {

        returnInput.style.display = "none";
    });

    radio2.addEventListener('change', function () {
        returnInput.style.display = "block";
        
    });


</script>
      
  </body>
</html>












































