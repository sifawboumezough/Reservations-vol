<?php
  if(isset($_POST['id'])){
    $existReservation= new ReservationsController();
    $existReservation->cancelReservation();
 }

?>