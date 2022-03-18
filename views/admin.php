<?php 

if ($_SESSION['user_type'] == 0) {
    Redirect::to(BASE_URL);
}

 if(isset($_POST['find'])){
    $flightobj= new flightController();
    $flights=$flightobj->adminfindFlights();
}else{
    $flightobj= new flightController();
    $flights=$flightobj->getAllFlights();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Flights Management</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
	<?php  include 'includes/header.php' ?>

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
	
		</style>
</head>
<body>
<div class="container" style="position: relative; margin-top: 5%;">
<h1 style=" text-align: center; color:#000 ; font-weight: 100;">Flight Management</h1>
	<div class="row my-20">
		<div class="col-md-20 mx-auto">
			<?php include('./views/includes/alerts.php');?>
			<div class="card" style=" background-color: transparent;">
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>addflight" class="btn btn-sm btn-primary mr-2 mb-2">
						<i class="fas fa-plus"></i>
					</a>
					<a href="<?php echo BASE_URL;?>admin" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<a href="<?php echo BASE_URL;?>logout" title="Logout" class="btn btn-link mr-2 mb-2">
						<i class="fas fa-user mr-2"> <?php echo "Logout";?></i>
					</a>
					<form method="post" class="float-right mb-2 d-flex flex-row">
						<input type="text" class="form-control" name="search" placeholder="Search">
						<button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
					</form>
					<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">id</th>
						  <th scope="col">airlines</th>
					      <th scope="col">flight_NO</th>
					      <th scope="col">depart city</th>
                          <th scope="col">arrival city</th>
                          <th scope="col">departure </th>
					      <th scope="col">departure time</th>
					      <th scope="col">arrival time</th>
                          <th scope="col">price </th>

					    </tr>
					  </thead>
					  <tbody>
					    <?php foreach($flights as $flight):?>
					    	<tr>
						      <th scope="row"><?php echo $flight['id']; ?></th>
                                    <td><?php echo $flight['airlines']; ?> </td>
                                    <td><?php echo $flight['flight_no']; ?> </td>
                                    <td><?php echo $flight['depart_city']; ?> </td>
                                    <td><?php echo $flight['arrival_city']; ?> </td>
                                    <td><?php echo $flight['departure']; ?> </td>
                                    <td><?php echo $flight['departure_time']; ?> </td>
                                    <td><?php echo $flight['arrival_time']; ?> </td>
                                    <td><?php echo $flight['price']; ?> </td>
						  
						
						      <td class="d-flex flex-row">
						      	<form method="post" class="mr-1" action="update">
						      		<input type="hidden" name="id" value="<?php echo $flight['id'];?>">
						      		<button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
						      	</form>
						      	<form method="post" class="mr-1" action="delete">
						      		<input type="hidden" name="id" value="<?php echo $flight['id'];?>">
						      		<button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
						      	</form>
						      </td>
						    </tr>
					   	<?php endforeach;?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
						</body>