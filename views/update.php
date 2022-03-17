<?php
    if(isset($_POST['id'])){
        $existFlight = new FlightController();
        $flight = $existFlight->getOneFlight();    
    }else {
        Redirect::to('admin');
    }
    if(isset($_POST['submit'])){
        $existFlight = new FlightController();
        $existFlight->updateFlight();         
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
                    <div class="card-header bg-light "><span class="text_dark">Modify Flights</span></div>
                        <div class="card-body bg-light ">
                        <a href="<?php  echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"> </i>
                        </a>

                        <form method="post">
                            <div class="form-group">
                                <label for="airlines" class="text-dark">Airline</label>
                                <input type="text" name="airlines" class="form-control" placeholder="Airline Name"
                                value="<?php echo $flight->airlines; ?>" 
                                >
                             </div>
                            <div class="form-group">
                                <label for="flight_no" class="text-dark">Flight Number</label>
                                <input type="text" name="flight_no" class="form-control" placeholder="Flight Number"
                                value="<?php echo $flight->flight_no; ?>"
                                >
                            </div>
                            <div class="form-group">
						    <label for="depart_city" class="text-dark">Depart City</label>
                                <input type="text" name="depart_city" class="form-control" placeholder="Depart City"
								value="<?php echo $flight->depart_city; ?>">
						    </div>
                            <div class="form-group">
                                <label for="arrival_city"class="text-dark">Arrival City</label>
                                <input type="text" name="arrival_city" class="form-control"
                                value="<?php echo $flight->arrival_city; ?>">
                            </div>
                            <div class="form-group">
                                <label for="departure" class="text-dark">Departure</label>
                                <input type="date" name="departure" class="form-control" placeholder="Departure"
                                value="<?php echo $flight->departure; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <label for="departure_time" class="text-dark">Departure Time</label>
                                <input type="time" name="departure_time" class="form-control" placeholder="Departure Time"
                                value="<?php echo $flight->departure_time; ?>"
                                >
                            </div>
                            <div class="form-group">
                                <label for="arrival_time" class="text-dark">Arrival Time</label>
                                <input type="time" name="arrival_time" class="form-control"
                                value="<?php echo $flight->arrival_time; ?>">
                            </div>
                            <div class="form-group">
                                <label for="price" class="text-dark">Price</label>
                                <input type="text" name="price" class="form-control"
                                value="<?php echo $flight->price; ?>">

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">Modify</button>
                                <input type="hidden"  name="id" value="<?php echo $flight['id'];?>">

                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
</div>
</body>