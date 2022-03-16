<?php 

class flightController{
    public function getAllFlights(){
        $flights = Flight::getAll();
        return $flights;

    }    


    public function findFlights(){
        if(isset($_POST['search'])){
            $data = array(
				'departure' => $_POST['departure'],
			    'depart_city' => $_POST['depart_city'],
                'arrival_city' => $_POST['arrival_city'],
		);
        }
        $flights = flight::searchFlight($data);
        return $flights;
    }

 
    




    public function adminfindFlights(){
        if(isset($_POST['search'])){
            $data = array('search' => $_POST['search']);
        }
        $flights = flight::adminsearchFlight($data);
        return $flights;
    }

    
    public function addFlight(){
        if(isset($_POST['submit'])) {
            $flght = array(
            
                'airlines' => $_POST['airlines'],
                'flight_no' => $_POST['flight_no'],
                'depart_city' => $_POST['depart_city'],
                'arrival_city' => $_POST['arrival_city'],
                'departure' => $_POST['departure'],
                'departure_time' => $_POST['departure_time'],
                'arrival_time' => $_POST['arrival_time'],
                'price' => $_POST['price'],
            );

            $result = Flight::add($flght);
            if($result == 'ok') {
              
                  Session::set('success' , 'Flight Added');
                  Redirect::to('admin');
            }else {
                echo $result;
            }
        }
    }


       public function getOneFlight(){  //set flight info into fields to  modify flights info.
        if(isset($_POST['id'])){
            $data = array('id' => $_POST['id']);
            $flight = Flight::getFlight($data);
            return $flight;
        }
    }


    
    public function updateFlight(){
        if(isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'airlines' => $_POST['airlines'],
                'flight_no' => $_POST['flight_no'],
                'depart_city' => $_POST['depart_city'],
                'arrival_city' => $_POST['arrival_city'],
                'departure' => $_POST['departure'],
                'departure_time' => $_POST['departure_time'],
                'arrival_time' => $_POST['arrival_time'],
                'price' => $_POST['price'],
            );

   
            $result = Flight::update($data);
            if($result == 'ok') {
                  Session::set('success','Flight Updated');
                //   header('location:'.BASE_URL .'admin');
                  Redirect::to('admin');
            }else {
                echo $result;
            }
        }
    }


    public function deleteFlight() {
        if(isset($_POST['id'])) {
             $data['id'] = $_POST['id'];
             $result = Flight::delete($data);
             if($result=='ok') {
                Session::set('success' , 'Flight Deleted');
                // header('location:'.BASE_URL .'admin');
                Redirect::to('admin');
             } else {
                  echo $result;
             }
        }
   }
   


    // public function getOneFlight(){
    //     if(isset($_POST['id'])){
    //         $data = array(
    //             'id' => $_POST['id']
    //         );
    //         $flight = Flight::getFlight($data);
    //         return $flight;
    //     }
    // }


        // public function returnFlight(){
    //     if(isset($_POST['search'])){
    //         $data = array(
	// 			'return' => $_POST['return'],
	// 		    'depart_city' => $_POST['depart_city'],
    //             'arrival_city' => $_POST['arrival_city'],
	// 	);
    //     }
    //     $flights = flight::rtrnFlights($data);
    //     return $flights;
    // }

    



}

?>