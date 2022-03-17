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


    public function getMyFlight(){
        $flights = Flight::getMine();
        return $flights;
    }

    public function cancelFlight() {  // user can cancel flight
        if(isset($_POST['id'])) {
             $data['id'] = $_POST['id'];
             $result = Flight::cancelMine($data);
             if($result=='ok') {
                Session::set('success' , 'Flight Canceled');
                Redirect::to('myreservation');
             } else {
                  echo $result;
             }
        }
   }



   public function add(){     // add all info (flight) + (passangers) into reservations
    if(isset($_POST['submit'])){
        // var_dump();
        // exit;
    $data = array(
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'passportid' => $_POST['passportid'],
        'airlines' => $_POST['airlines'],
        'flight_no' => $_POST['flight_no'],
        'depart_city' => $_POST['depart_city'],
        'arrival_city' => $_POST['arrival_city'],
        'departure' => $_POST['departure'],
        'departure_time' => $_POST['departure_time'],
        'arrival_time' => $_POST['arrival_time'],
        'userid' => $_POST['userid'],
        'Price' => $_POST['Price'],
        'counter' => $_POST['counter'],
    );
    $result = Flight::addReservation($data);
    if($result === 'ok'){
        Session::set('success', 'Flight added succesfully!!');
        Redirect::to('home');
        }else{
            echo $result;
        }
}
}






/* admin role */

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
   

   
       public function getOneFlight(){  //set flight info into fields to  modify(update) flights info.
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

           public function cancelReservation() {  //  admin has the ability to cancel user reservation
            if(isset($_POST['id'])) {
                 $data['id'] = $_POST['id'];
                 $result = Flight::CancelUserReservation($data);
                 if($result=='ok') {
                    Session::set('success' , 'Reservation Canceled');
                    Redirect::to('admin');
                 } else {
                      echo $result;
                 }
            }
       }
   

    
    


    



}

?>