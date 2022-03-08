<?php 

class flightController{
    public function getAllFlights(){
        $flights = Flight::getAll();
        return $flights;

    }
    
    public function getOneFlight(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
            $flight = flight::getFlight($data);
            return $flight;
    }
    }

    public function findFlights(){
        if(isset($_POST['search'])){
            $data = array(
				'departure' => $_POST['departure'],
			    'from' => $_POST['from'],
                'to' => $_POST['to'],
		);
        }
        $flights = flight::searchFlight($data);
        return $flights;
    }
    public function returnFlight(){
        if(isset($_POST['search'])){
            $data = array(
				'return' => $_POST['return'],
			    'from' => $_POST['from'],
                'to' => $_POST['to'],
		);
        }
        $flights = flight::rtrnFlights($data);
        return $flights;
    }


    



}

?>