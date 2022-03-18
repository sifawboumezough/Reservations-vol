<?php


class User {


    static public function createUser($data){
		$stmt = DB::connect()->prepare('INSERT INTO users (fullname,username,password,passporid,birthdate)
		VALUES (:fullname,:username,:password,:passporid,:birthdate)');
		$stmt->bindParam(':fullname',$data['fullname']);
        $stmt->bindParam(':username',$data['username']);
        $stmt->bindParam(':password',$data['password']);
		$stmt->bindParam(':passporid',$data['passporid']);
		$stmt->bindParam(':birthdate',$data['birthdate']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
        
	}



    static public function login($data) {
            $fullname = $data['fullname'];
            try {
                $query = 'SELECT * FROM  users WHERE fullname = :fullname';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(
                    array(
                        ":fullname" => $fullname)
                    );
                    $user = $stmt->fetch(PDO::FETCH_OBJ);
                    return $user;
                    if($stmt->execute()) {
                        return 'ok';
                    }
            }catch (PDOException $ex){
                echo 'error' . $ex->getMessage();
            }
        }

       


      static public function getId($data){
        $id = $data['id'];
        try{
            $query = "SELECT id FROM users  WHERE fullname ='".$_SESSION['fullname']."'";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id ));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
    }


}




?>