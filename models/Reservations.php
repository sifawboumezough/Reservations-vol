<?php 

    class Reservations{

        

        static public function addReservation($data){
    
        $conn =  DB::connect();
        $counter = $data['counter'][0];
        for ($i=0; $i < $counter ; $i++) { 

        $firstname = $data['firstname'][$i];
        $lastname = $data['lastname'][$i];
        $email = $data['email'][$i];
        $passportid = $data['passportid'][$i];
        $airlines = $data['airlines'][$i];
        $flight_no = $data['flight_no'][$i];
        $depart_city = $data['depart_city'][$i];
        $arrival_city = $data['arrival_city'][$i];
        $departure = $data['departure'][$i];
        $departure_time = $data['departure_time'][$i];
        $arrival_time = $data['arrival_time'][$i];
        $userid = $data['userid'][$i];
        $Price = $data['Price'][$i];
        $stmt = $conn->prepare('INSERT INTO reservations (firstname,lastname,email,passportid,airlines,flight_no, depart_city, arrival_city, departure, departure_time,arrival_time
             ,userid,Price
             ) VALUES (:firstname,:lastname,:email,:passportid,:airlines,:flight_no,:depart_city,:arrival_city,:departure,:departure_time,:arrival_time,:userid,:Price)');
        $stmt->bindParam(':firstname',$firstname);
        $stmt->bindParam(':lastname',$lastname);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':passportid',$passportid);
        $stmt->bindParam(':airlines',$airlines);
        $stmt->bindParam(':flight_no',$flight_no);
        $stmt->bindParam(':depart_city',$depart_city);
        $stmt->bindParam(':arrival_city',$arrival_city);
        $stmt->bindParam(':departure',$departure);
        $stmt->bindParam(':departure_time',$departure_time);
        $stmt->bindParam(':arrival_time',$arrival_time);
        $stmt->bindParam(':userid',$userid);
        $stmt->bindParam(':Price',$Price);
       
        $stmt->execute();
        }
    
    }
    
  

    static public function searchUserReservation($data){ 
      $search = $data['search'];
     try{
         $query = ('SELECT * FROM reservations WHERE firstname LIKE ? OR lastname LIKE ?');
         $stmt = DB::connect()->prepare($query);
         $stmt->execute(array('%'.$search.'%','%'.$search.'%'));
         return $flights = $stmt->fetchAll();
     }catch(PDOException $ex){
         echo 'error' .$ex->getMessage();
     }
 }




    /*  user part */


    static public function getMine(){
        $userid = $_SESSION['id'];
        $stmt = DB::connect()->prepare("SELECT * FROM reservations WHERE userid = '$userid'");
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }


    static public function cancelMine($data) {  // user can cancel his own flights ( from reservations)
        $id = $data['id'];
        try {
          $query = 'DELETE  FROM reservations WHERE id=:id';
          $stmt = DB::connect()->prepare($query);
          $stmt->execute(array(":id" => $id));
          if($stmt->execute()) {
            return 'ok';
          }
            } catch(PDOException $ex){
              echo 'error' .$ex->getMessage();
          }
      }



      static public function getAll(){  // display all reservation -> admin page
        $stmt = DB::connect()->prepare('SELECT * FROM reservations');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }  





}
    

?>