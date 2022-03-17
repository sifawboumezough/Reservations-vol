<?php 

class Flight {
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM flights');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

    static public function getMine(){
        $userid = $_SESSION['id'];
        $stmt = DB::connect()->prepare("SELECT * FROM reservations WHERE userid = '$userid'");
        $stmt->execute();
        return $stmt->fetchAll();
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


 



    static public function searchFlight($data){    // look at this next !!!!
		$departure = $data['departure'];
		$depart_city = $data['depart_city'];
        $arrival_city = $data['arrival_city'];
		$query = 'SELECT * FROM flights WHERE  departure=:departure' ;
				$stmt = DB::connect()->prepare($query);
				$stmt->execute(array(":departure" => $departure));
				$flights = $stmt->fetchAll();;
				return $flights;
	
	}

    static public function adminsearchFlight($data){ 
        $search = $data['search'];
       try{
           $query = ('SELECT * FROM flights WHERE airlines LIKE ? OR flight_no LIKE ?');
           $stmt = DB::connect()->prepare($query);
           $stmt->execute(array('%'.$search.'%','%'.$search.'%'));
           return $flights = $stmt->fetchAll();
       }catch(PDOException $ex){
           echo 'error' .$ex->getMessage();
       }
   }


   static public function add($flght)
   {
       $stmt = DB::connect()->prepare('INSERT INTO flights
       (airlines, flight_no, depart_city, arrival_city, departure,departure_time,arrival_time,price)
       VALUES(:airlines,:flight_no,:depart_city,:arrival_city,:departure,:departure_time,:arrival_time,:price)');
       $stmt->bindParam(':airlines', $flght['airlines']);
       $stmt->bindParam(':flight_no', $flght['flight_no']);
       $stmt->bindParam(':depart_city', $flght['depart_city']);
       $stmt->bindParam(':arrival_city', $flght['arrival_city']);
       $stmt->bindParam(':departure', $flght['departure']);
       $stmt->bindParam(':departure_time',$flght['departure_time']);
       $stmt->bindParam(':arrival_time',$flght['arrival_time']);
       $stmt->bindParam(':price',$flght['price']);

       if ($stmt->execute()) {
           return 'ok';
       } else {
           return 'error';
       }
       
   }


        static public function getFlight($data){    // get flight info to modify
            $id = $data['id'];
            try{
                $query = 'SELECT * FROM flights WHERE id=:id';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":id" => $id));
                $flight = $stmt->fetch(PDO::FETCH_OBJ);
                return $flight;
            }catch(PDOException $ex){
                echo 'error'.$ex->getMessage();
            }
        }

        static public function update($data)
        {
            $stmt = DB::connect()->prepare
            ('UPDATE flights SET 
            (airlines,flight_no,depart_city,arrival_city,departure,
            departure_time,arrival_time,price)
            VALUES(:airlines,:flight_no,:depart_city,:arrival_city,:departure,:departure_time,:arrival_time,:price WHERE id =:id');
            $stmt->bindParam(':id',$data['id']);
            $stmt->bindParam(':airlines', $data['airlines']);
            $stmt->bindParam(':flight_no', $data['flight_no']);
            $stmt->bindParam(':depart_city', $data['depart_city']);
            $stmt->bindParam(':arrival_city', $data['arrival_city']);
            $stmt->bindParam(':departure', $data['departure']);
            $stmt->bindParam(':departure_time',$data['departure_time']);
            $stmt->bindParam(':arrival_time',$data['arrival_time']);
            $stmt->bindParam(':price',$data['price']);
      

            if ($stmt->execute()) {
                return 'ok';
            } else {
                return 'error';
            }
            
        }
    
        
      static public function delete($data) {
        $id = $data['id'];
        try {
          $query = 'DELETE  FROM flights WHERE id=:id';
          $stmt = DB::connect()->prepare($query);
          $stmt->execute(array(":id" => $id));
          if($stmt->execute()) {
            return 'ok';
          }
            } catch(PDOException $ex){
              echo 'error' .$ex->getMessage();
          }
      }


          static public function CancelUserReservation($data) {  // admin can cancel users flights ( from reservations)
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

   
    

    //  static public function getFlight($data) {
    //         $id = $data['id'];
    //           try {
    //         $query = 'SELECT * FROM flights WHERE id=:id';
    //         $stmt = DB::connect()->prepare($query);
    //         $stmt->execute(array(":id" => $id));
    //         $flight =$stmt->fetchAll(PDO::FETCH_OBJ);
    //         return $flight;
    //             } catch(PDOException $ex){
    //             echo 'error' .$ex->getMessage();
    //         }
    //     } 



   


    // static public function rtrnFlights($data){
	// 	$return = $data['return'];
	// 	$depart_city = $data['depart_city'];
    //     $arrival_city = $data['arrival_city'];
	// 	$query = 'SELECT * FROM return_flight WHERE  returndate=:returndate' ;
	// 			$stmt = DB::connect()->prepare($query);
	// 			$stmt->execute(array(":returndate" => $return));
	// 			$flights = $stmt->fetchAll();;
	// 			return $flights;

	
	// }


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

    
}

?>