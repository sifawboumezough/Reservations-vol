<?php
	if(isset($_POST['submit'])) {
		$newFlight = new FlightController();
		$newFlight->addFlight();
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Flight Management</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
</head>
<body>
<div class="container">
        <div class="row mt-4">
            <div class="col-md-10 mx-auto ">
                <div class="card">
                    <div class="card-header bg-light"><span class="text_light">Add Flights</span></div>
                        <div class="card-body bg-light ">
                        <a href="<?php  echo BASE_URL;?>admin" class="btn btn-sm btn-secondary mr-2 mb-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
						</svg>  </a>
                        <form method="post">
                        <div class="form-group">
                                <label for="airlines" class="text-dark">Airline</label>
                                <input type="text" name="airlines" class="form-control" placeholder="Airline Name">
                            </div>
                            <div class="form-group">
                                <label for="flight_no" class="text-dark">flight_NO</label>
                                <input type="text" name="flight_no" class="form-control" placeholder="Flight Number">
                            </div>
							<div class="form-group">
                                <label for="depart_city" class="text-dark">Depart City</label>
                                <input type="text" name="depart_city" class="form-control" placeholder="From">
                            </div>
							<div class="form-group">
                                <label for="arrival_city" class="text-dark">Arrival City</label>
                                <input type="text" name="arrival_city" class="form-control" placeholder="To">
                            </div>

                            <div class="form-group">
                                <label for="departure" class="text-dark">Departure</label>
                                <input type="date" name="departure" class="form-control" placeholder="Departure">
                            </div>
                            <div class="form-group">
                                <label for="departure_time" class="text-dark">Departure Time</label>
                                <input type="time" name="departure_time" class="form-control" placeholder="Departure Time">
                            </div>
                            <div class="form-group">
                                <label for="arrival_time" class="text-dark">Arrival time</label>
                                <input type="time" name="arrival_time" class="form-control"  placeholder="Arrival Time">
                 
                            <div class="form-group">
                                <label for="price" class="text-dark">Price</label>
                                <input type="text" name="price" class="form-control"  placeholder="Price : DH">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">Add Flight</button>
                            </div>
                        

                        </form>
                         
                    </div>
                </div>
            </div>
        </div>

 </div>

          
                
                 </div>
        </div>

    </div>
</body>