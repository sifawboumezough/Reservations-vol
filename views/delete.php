<?php
    if(isset($_POST['id'])){
        $existFlight= new flightController();
        $existFlight->deleteFlight();
    }
?>