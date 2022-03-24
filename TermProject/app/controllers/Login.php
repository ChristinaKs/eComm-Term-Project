<?php
class Login extends Controller
{
    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
    }

    public function index()
    {
        if(!isset($_POST['login'])){
            $this->view('Login/index');
        }
        else{
            $user = $this->loginModel->getClient($_POST['ClientEmail']);
            
            if($user != null){
                $hashed_pass = $user->ClientPassword;
                $password = $_POST['password'];
                if(password_verify($password,$hashed_pass)){
                    //echo '<meta http-equiv="Refresh" content="2; url=/MVC/">';
                    $this->createSession($user);
                    $data = [
                        'msg' => "Welcome, $user->ClientFirstName $user->ClientLastName!",
                    ];
                    $this->view('Home/home',$data);
                }
                else{
                    $data = [
                        'msg' => "Password incorrect!",
                    ];
                    $this->view('Login/index',$data);
                }
            }
            else{
                $data = [
                    'msg' => "Seems like this user does not exist",
                ];
                $this->view('Login/index',$data);
            }
        }
    }

    public function create()
    {
        if(!isset($_POST['signup'])){
            $this->view('Login/create');
        }
        else{
            $user = $this->loginModel->getClient($_POST['ClientEmail']);
            if($user == null){
                $data = [
                    'ClientFirstName' => trim($_POST['ClientFirstName']),
                    'ClientLastName' => trim($_POST['ClientLastName']),
                    'ClientShippingAddress' => trim($_POST['ClientShippingAddress']),
                    'ClientPassword' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'ClientEmail' => trim($_POST['ClientEmail'])
                ];
                if($this->loginModel->createClient($data)){
                        echo 'Please wait creating the account for you';
                        echo '<meta http-equiv="Refresh" content="2; url=/TermProject/Login/">';
                }
            }
            else{
                $data = [
                    'msg' => "Seems like this email is already used",
                ];
                $this->view('Login/create',$data);
            }
            
        }
    }

    public function createSession($user){
        $_SESSION['ClientEmail'] = $user->ClientEmail;
    }

    public function logout(){
        unset($_SESSION['user_id']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; url=/TermProject/Login/">';
    }
}

