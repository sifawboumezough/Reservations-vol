<?php
        $reservationobj= new ReservationsController();
        $reservations=$reservationobj->getAllReservations();  
?>
<?php
        if(isset($_POST['find'])){
        $data= new ReservationsController();
        $reservations=$data->FindUserReservation();
        }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Flight Management</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

	<style>
		

		body
		{
			
			background-image: url('Views/img/background.png') ;
			background-repeat: no-repeat;
			background-size: cover; 	
			font-size: 15px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;

			
		}
	
		.bg-light
		{
			background-color: transparent !important;
			box-shadow: 10px 5px 20px -5px rgba(0, 0, 0, 0.3);
	
			
		}
        .card {
            width: 200%;
        }

		</style>
</head>
<body>
<div class="container" style="position:relative; margin-left:-4%; margin-top:5%;">
	<div class="row my-4">
		<div class="col-md-10 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card">
				<div class="card-body bg-light">
                <a href="<?php  echo BASE_URL;?>admin" class="btn btn-sm btn-secondary mr-2 mb-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
				</svg>  </a>
					<form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Recherche">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
					</form>
					<table class="table table-hover">
					  <thead>
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
                        <form method="post" class="mr-1" action="cancelreservation">
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
						</body>