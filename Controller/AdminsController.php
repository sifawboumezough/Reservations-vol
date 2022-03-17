<?php 

class AdminsController{
    public function adminlog() {
        if(isset($_POST['submit'])) {
            $data['email'] = $_POST['email'];
			$data['password'] = $_POST['password'];
            $result= Admin::adminlogin($data);

            if($result->email===$_POST['email'] && $result->password===$_POST['password']) {
                   $_SESSION['admin'] = true ;
                   $_SESSION['email'] = $result->email;
                   $_SESSION['id'] = $result->id;
                    Redirect::to('admin');

            } else {
                Session::set('success', 'Your Email or password may be incorrect');
                Redirect::to('loginadmin');
            }
        }
    }

}

?>