<?php 

    class Reservations{

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



      static public function getAll(){  // display all reservation -> admin page
        $stmt = DB::connect()->prepare('SELECT * FROM reservations');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }  


    // static public function CancelUserReservation($data) {  // admin can cancel users flights ( from reservations)
    //     $id = $data['id'];
    //     try {
    //       $query = 'DELETE  FROM reservations WHERE id=:id';
    //       $stmt = DB::connect()->prepare($query);
    //       $stmt->execute(array(":id" => $id));
    //       if($stmt->execute()) {
    //         return 'ok';
    //       }
    //         } catch(PDOException $ex){
    //           echo 'error' .$ex->getMessage();
    //       }
    //   }

}
    

?>