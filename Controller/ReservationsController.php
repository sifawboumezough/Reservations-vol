<?php 

class ReservationsController{
    
            public function add(){
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
                $result = Reservations::addReservation($data);
                if($result === 'ok'){
                    Session::set('success', 'Flight added succesfully!!');
                    Redirect::to('home');
                    }else{
                        echo $result;
                    }
            }
        }

   
        public function getAllReservations(){
            $reservations = reservations::getAll();
            return $reservations;
    
        }

        public function FindUserReservation(){
            if(isset($_POST['search'])){
                $data = array('search' => $_POST['search']);
            }
            $reservations = Reservations::searchUserReservation($data);
            return $reservations;
        }


        /** user part  */


        public function getMyReservations(){
            $reservations = reservations::getMine();
            return $reservations;
    
        }

        

        public function cancelReservation() {  // user can cancel flight
            if(isset($_POST['id'])) {
                 $data['id'] = $_POST['id'];
                 $result = Reservations::cancelMine($data);
                 if($result=='ok') {
                    Session::set('success' , 'Flight Canceled');
                    Redirect::to('myreservation');
                 } else {
                      echo $result;
                 }
            }
       }
     

       
}

?>