<?php
class adminLogin extends Controller
{
    public function __construct()
    {
        $this->adminLoginModel = $this->model('adminLoginModel');
    }

    //TODO
    public function index()
    {
        if(!isset($_POST['login'])){
            $this->view('adminLogin/index');
        }
        else{
            $user = $this->adminLoginModel->getAdmin($_POST['AdminEmail']);
            
            if($user != null){
                $hashed_pass = $user->AdminPassword;
                $password = $_POST['AdminPassword'];
                if(password_verify($password,$hashed_pass)){
                    //echo '<meta http-equiv="Refresh" content="2; url=/MVC/">';
                    $this->createSession($user);
                    $data = [
                        'msg' => "Welcome, $user->AdminFirstName $user->AdminLastName!",
                    ];
                    $this->view('Home/home',$data);
                }
                else{
                    $data = [
                        'msg' => "Password incorrect!",
                    ];
                    $this->view('adminLogin/index',$data);
                }
            }
            else{
                $data = [
                    'msg' => "The admin password is incorrect!",
                ];
                $this->view('adminLogin/index',$data);
            }
        }
    }

    public function createSession($user){
            $_SESSION['AdminEmail'] = $user->AdminEmail;
    }

    public function logout(){
        
    }
}
