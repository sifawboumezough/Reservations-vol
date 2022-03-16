<?php 

class Admin{
    static public function adminlogin($data){
        $email = $data['email'];
		$password = $data['password'];
        try{
            $query = ('SELECT * FROM admins WHERE email =:email AND password=:password');
            $stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":email" => $email,":password" => $password));
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