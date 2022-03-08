<?php
  //     if(isset($_POST['search'])){
  //       $flght = new FlightController();
  //       $flights = $flght->findFlights();
	// }else{
	// 	$flght = new FlightController();
	// 	$flights = $flght->getAllFlights();
	// }
        // print_r($employes);
 ?>
 

<?php 
	if(isset($_POST['search'])){
		$flght = new FlightController();
		$flights = $flght->findFlights();
    
    $departure =  $_POST['departure'];
    $from=  $_POST['from'];
    $to=  $_POST['to'];
    
	}
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
      </div>
    </div>
  </nav>
</header>
<main>
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
                         <th scope="col">
                              Airlines
                        </th>

                        <th scope="col">
                             Flight-NO
                        </th>

                        <th scope="col">
                           From
                        </th>
                        <th scope="col">
                            To
                        </th>

                        <th scope="col">
                            Departure
                        </th>
                        <th scope="col">
                            Return
                        </th>
                        <th scope="col">
                             Departure Time
                        </th>
                       
                        <th scope="col">
                            Arrival Time
                        </th>
                       
                         <th scope="col">
                            Class
                        </th>
                        
                         <th scope="col">
                            Price
                        </th> 
                        
                        
                </tr>
              </div>
              </div>
            </thead>
             <tbody>
                    <?php foreach($flights as $flight):?>
		<tr>
                        <th><?php echo $flight['airlines']; ?> </th>
                        <th><?php echo $flight['flight_no']; ?> </th>
                        <th><?php echo $flight['from']; ?> </th>
                        <th><?php echo $flight['to']; ?> </th>
                        <th><?php echo $flight['departure']; ?> </th>
                        <th><?php echo $flight['return']; ?> </th>
                        <th><?php echo $flight['departure_time']; ?> </th>
                        <th><?php echo $flight['arrival_time']; ?> </th>
                        <!-- <form method="post" action="reserve"> 
                        </form>    -->
                        <th><?php echo $flight['class']; ?> </th>
                        <th><?php echo $flight['price']; ?> </th>
                        <!-- <th><php echo $flight['price']; ?> </th> -->
                        <td>
                        <form method="post" action="reserve"> 
                            <td><input type="hidden" name="id" value="<?php echo $flight['id'] ?>">
                            <td>Passengers<input type="number" name="passengers" value="1"></td>

                              <button type="submit" name="submit"class="btn btn-sm btn-success" >Reserve Now</button></td>
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

    </div>

				
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
  </body>
</html>












































