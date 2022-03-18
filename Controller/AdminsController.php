<?php 

class AdminsController{
    public function adminlog() {
        if(isset($_POST['submit'])) {
            $data['fullname'] = $_POST['fullname'];
			$data['password'] = $_POST['password'];
            $result= Admin::adminlogin($data);

            if($result->fullname===$_POST['fullname'] && $result->password===$_POST['password']) {
                   $_SESSION['logged'] = true ;
                   $_SESSION['fullname'] = $result->fullname;
                   $_SESSION['id'] = $result->id;
                   $_SESSION['user_type'] = $result->user_type;
                   if($result->user_type == 1){    
                    Redirect::to('admin');
                }else{
                    Redirect::to('loginadmin');
                }
            } else {
                Session::set('success', 'Your Email or password may be incorrect');
                Redirect::to('loginadmin');
            }
        }
    }

}

?>