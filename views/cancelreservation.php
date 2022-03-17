<?php
  if(isset($_POST['id'])){
    $existReservation= new flightController();
    $existReservation->cancelReservation();
  }

?>