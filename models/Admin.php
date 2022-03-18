<?php 

class Admin{
    // static public function adminlogin($data){
    //     $fullname = $data['fullname'];
	// 	$password = $data['password'];
    //     try{
    //         $query = ('SELECT * FROM admins WHERE fullname =:fullname AND password=:password');
    //         $stmt = DB::connect()->prepare($query);
	// 		$stmt->execute(array(":fullname" => $fullname,":password" => $password));
    //         $admin = $stmt->fetch(PDO::FETCH_OBJ);
    //         return $admin;
    //         if($stmt->execute()){
    //         return 'ok';
    //         }
    //     }catch(PDOException $ex){
    //         echo 'error' .$ex->getMessage();
    //     }
    // }
    static public function adminlogin($data){
        $fullname = $data['fullname'];
        $password = $data['password'];
        try{
            $query = ('SELECT * FROM admins WHERE fullname =:fullname AND password=:password');
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":fullname" => $fullname,":password" => $password));
            $admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $admin;
            if($stmt->execute()){
            return 'ok';
            }
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }



    
}


?>