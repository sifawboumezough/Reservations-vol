<?php


class UsersController {
    public function register(){
        if(isset($_POST['submit'])){
            $options = [
                'cost' => 12
            ];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $data = array(
                'fullname' => $_POST['fullname'],
                'username' => $_POST['username'],
                'mail' => $_POST['mail'],
                'password' => $password,
                'passporid' => $_POST['passporid'],
                'birthdate' => $_POST['birthdate']
            );
            $result = User::createUser($data);
            if($result === 'ok'){
                Session::set('success', 'Account Created Successfully');
                Redirect::to('login');
            }else{
                echo $result;
            }
        }
    }




        // public function log() {
        //     if(isset($_POST['submit'])) {
        //         $data['fullname'] = $_POST['fullname'];
        //         $result= User::login($data);
        //         if($result->fullname === $_POST['fullname'] && password_verify($_POST['password'], $result->password)) {
        //             $_SESSION['logged'] = true;
        //             $_SESSION['fullname'] = $result->fullname; 
        //             $_SESSION['user_type'] = $result->user_type; 
        //             $_SESSION['id'] = $result->id ;
                    
        //                 Redirect::to('home');
        //         } else {
        //             Session::set('success', 'Your username or password may be incorrect');
        //             Redirect::to('login');
        //         }
        //     }
        // }
        
        public function log() {
            if(isset($_POST['submit'])) {
                $data['fullname'] = $_POST['fullname'];
                $result= User::login($data);
                if($result->fullname === $_POST['fullname'] && password_verify($_POST['password'], $result->password)) {
                    $_SESSION['logged'] = true;
                    $_SESSION['fullname'] = $result->fullname; 
                    $_SESSION['id'] = $result->id;
                    $_SESSION['user_type'] = $result->user_type; 
                    if($result->user_type == 0){    
                        Redirect::to('booking');
                    }else{
                        Redirect::to('loginadmin');
                    }
                } else {
                    Session::set('success', 'Your username or password may be incorrect');
                    Redirect::to('login');
                }
            }
        }

        

                
        
        static public function logout(){
            session_unset();
            session_destroy();
        }



        public function getId(){
            if(isset($_POST['id'])){
                $data = array(
                    'id' => $_POST['id']
                );
                $user = User::getId($data);
                return $user;
        }
    }


    
}