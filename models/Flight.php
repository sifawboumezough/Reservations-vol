<?php 

class Flight {
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM flights');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

    static public function getFlight($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM flights WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id ));
            $flight = $stmt->fetch(PDO::FETCH_OBJ);
            return $flight;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }
 
    // static public function searchFlight($data){
    //      $search = $data['search'];
    //     try{
    //         $query = ('SELECT * FROM flights WHERE airlines LIKE ? OR passangers LIKE ?');
    //         $stmt = DB::connect()->prepare($query);
    //         $stmt->execute(array('%'.$search.'%','%'.$search.'%'));
    //         return $flights = $stmt->fetchAll();
    //     }catch(PDOException $ex){
    //         echo 'error' .$ex->getMessage();
    //     }
    // }

    static public function searchFlight($data){
		$departure = $data['departure'];
		$from = $data['from'];
        $to = $data['to'];
		$query = 'SELECT * FROM flights WHERE  departure=:departure ' ;
				$stmt = DB::connect()->prepare($query);
				$stmt->execute(array(":departure" => $departure));
				$flights = $stmt->fetchAll();;
				return $flights;
	
	
	
	}
    static public function rtrnFlights($data){
		$return = $data['return'];
		$from = $data['from'];
        $to = $data['to'];
		$query = 'SELECT * FROM return_flight WHERE  returndate=:returndate' ;
				$stmt = DB::connect()->prepare($query);
				$stmt->execute(array(":returndate" => $return));
				$flights = $stmt->fetchAll();;
				return $flights;

	
	}

    
}

?>