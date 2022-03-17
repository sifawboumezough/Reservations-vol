<?php

        $reservationobj= new flightController();
        $reservations=$reservationobj->getMyFlight();
?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Flight Management</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./booking">booking</a>
            
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
       <ul class="nav navbar-nav navbar-right">
          
          <a href="<?php echo BASE_URL;?>logout" title="Logout" class="btn btn-sm btn-secondary mr-2 mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg> <?php echo $_SESSION['fullname'];?></i>
          </a>
            
            </ul>  
      </div>
    </div>
  </nav>
</header>


<div class="container ">
        <div class="row mt-4">
        <div class="card-body bg-dark" >
            <div class="col-md-20 mx-auto">   
            <!-- <a href="?php echo BASE_URL; ?>addflight" class="btn btn-sm btn-primary mr-2 mb-2">
                <i class="fa fa-plus mr-4"></i>
            </a> -->
            <a href="<?php echo BASE_URL; ?>booking" class="btn btn-sm btn-primary mr-2 mb-2">
                <i class="fa fa-refresh mr-4"></i>
            </a>
            <!-- <form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Search ...">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
			</form> -->
            <table class="table table-striped table-dark">
            <thead>
            <div class="row my-4">
              <div class="col-md-16 mx-auto">
              
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Airlines</th>
                <th scope="col">Flight_NO</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Passport Id</th>
                
                <th scope="col">Depart City</th>
                <th scope="col">Arrival City</th>
                <th scope="col">Departure</th>
                <th scope="col">Departure Time</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
                       
                        
                </tr>
              </div>
              </div>
            </thead>
             <tbody>
                    <?php foreach($reservations as $reservation):?>
		<tr>
                        <th><?php echo $reservation['id']; ?> </th>
                        <th><?php echo $reservation['airlines']; ?> </th>
                        <th><?php echo $reservation['flight_no']; ?> </th>
                        <th><?php echo $reservation['firstname']; ?> </th>
                        <th><?php echo $reservation['lastname']; ?> </th>
                        <th><?php echo $reservation['email']; ?> </th>
                        <th><?php echo $reservation['passportid']; ?> </th>
                        <th><?php echo $reservation['depart_city']; ?> </th>
                        <th><?php echo $reservation['arrival_city']; ?> </th>
                        <th><?php echo $reservation['departure']; ?> </th>
                        <th><?php echo $reservation['departure_time']; ?> </th>
                        <th><?php echo $reservation['price']; ?> </th>
                        <td class="d-flex flex-row">
                          <form method="post" class="mr-1" action="cancel">
                              <input type="hidden" name="id" value="<?php echo $reservation['id'];?>">
                                  <button class="btn btn-sm btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                     <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                      </svg></i>
                                  </button>
                          </form>
                        </td>

                      
		</tr>
                    <?php endforeach; ?>
             </tbody>
            </table>
            </div>
        </div>
    </div>
            

    
                            
                  
                </div>
            </div>
        </div>


</body>


</html>