<?php 

class ReservationsController{

   
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

        

    //     public function cancelReservation() {  //  admin has the ability to cancel user reservation
    //         if(isset($_POST['id'])) {
    //              $data['id'] = $_POST['id'];
    //              $result = Reservations::CancelUserReservation($data);
    //              if($result=='ok') {
    //                 Session::set('success' , 'Reservation Canceled');
    //                 Redirect::to('admin');
    //              } else {
    //                   echo $result;
    //              }
    //         }
    //    }
       
}

?>