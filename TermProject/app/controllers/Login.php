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
            $client = $this->loginModel->getClient($_POST['ClientEmail']);
            
            if($client != null){
                $hashed_pass = $client->pass_hash;
                $password = $_POST['password'];
                if(password_verify($password,$hashed_pass)){
                    $this->createSession($client);
                    $data = [
                        'msg' => "Welcome, $client->ClientEmail!",
                    ];
                    $this->view('Home/home',$data);
                }
                else{
                    $data = [
                        'msg' => "Password incorrect! for $client->ClientEmail",
                    ];
                    $this->view('Login/index',$data);
                }
            }
            else{
                $data = [
                    'msg' => "Email: ". $_POST['ClientEmail'] ." does not exists",
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
            $client = $this->loginModel->getClient($_POST['ClientEmail']);
            if($client == null){
                $data = [
                    'ClientEmail' => trim($_POST['ClientEmail']),
                    'pass_hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                ];
                if($this->loginModel->createClient($data)){
                        echo 'Please wait creating the account for '.trim($_POST['ClientEmail']);
                        echo '<meta http-equiv="Refresh" content="2; url=/TermProject/Login/">';
                }
            }
            else{
                $data = [
                    'msg' => "Email: ". $_POST['ClientEmail'] ." already exists",
                ];
                $this->view('Login/create',$data);
            }
            
        }
    }

    public function createSession($client){
        $_SESSION['ClientEmail'] = $client->ClientEmail;
    }

    public function logout(){
        unset($_SESSION['ClientEmail']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; url=/TermProject/Login/">';
    }
}
