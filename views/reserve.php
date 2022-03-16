<?php
    if(isset($_POST['submit'])){
        $newFlight= new ReservationsController();
        $newFlight->add();
        
    }
?>

<?php
    if(isset($_POST['id'])){
        $existFlight= new flightController();
        $flight = $existFlight->getOneFlight();


      $id = $_SESSION['id'];
      $passengers = $_POST['passengers'];
    }
  
    // echo "number of psg : " .$passengers . '<br/>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="views/css/reserve.css">
</head>
<body>

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
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./myreservation">MyReservation</a>
            
          </li>
   
        </ul>
      </div>
    </div>
  </nav>



<form method="POST">
      <?php
      $counter=1;
      while($counter<=$passengers) { ?>

<div class="container" >
<div class="row my-4" >
<div class="card card-body bg-light">
<div>

</div>
<div class="col-md-11 mx-auto" >
<div class="form-group" >

<div class="form-row">
<div class="form-group col-md-6">
<label for="firstname">First Name:</label>
<input type="text" class="form-control"  name="firstname[]" placeholder="first name here" >
</div>
<div class="form-group col-md-6">
<label for="lastname">Last Name:</label>
<input type="text" class="form-control"  name="lastname[]" placeholder="first name here" >
</div>
<div class="form-group col-md-6">
<label for="email">Email:</label>
<input type="text" class="form-control" name="email[]" placeholder="Email here" >
</div>
</div>
<div class="form-group">
<label for="passportid">Passport Id:</label>
<input type="text" name="passportid[]" class="form-control" placeholder="Passport Id here" >
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <input type="text"   name="airlines[]" value="<?php echo $flight->airlines; ?>" >
</div>
<div class="form-group col-md-6">
    <input type="text"   name="flight_no[]" value="<?php echo $flight->flight_no; ?>" >
</div>

<div class="form-group col-md-6">
    <input type="text"   name="depart_city[]" value="<?php echo $flight->depart_city; ?>" >
</div>
<div class="form-group col-md-6">
    <input type="text"   name="arrival_city[]" value="<?php echo $flight->arrival_city; ?>" >
</div>

  <div class="form-group col-md-6">
    <input type="date" name="departure[]" value="<?php echo $flight->departure; ?>">

  </div>
<div class="form-group col-md-6">
  <input type="time" hidden class="form-control"  name="departure_time[]" value="<?php echo $flight->departure_time; ?>" >
</div>

<div class="form-group col-md-6">
  <input type="time" hidden class="form-control"  name="arrival_time[]" value="<?php echo $flight->arrival_time; ?>" >
</div>
<div class="form-group col-md-6">
   <input type="text" hidden class="form-control" name="userid[]" value="<?php echo $_SESSION["id"] ?>" >
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<input class="form-control"  type="text" name="Price[]"  value="<?php echo $flight->price; ?>">
<input class="form-control"  type="text" name="counter"  value="<?php echo $passengers; ?>" >

</div>
</div>



</div>
</div>
</div>
</div>

<?php
$counter++;
 }

?>

<button type="submit" name="submit" class="btn btn-primary">Add</button>
</form>

</main>
</body>
</html>