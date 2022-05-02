<?php
class Login extends Controller
{
    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
        $this->productsModel = $this->model('productsModel');
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
                    $products = $this->productsModel->getProducts();
                    $data = [
                        'product' => $products
                    ];
                    $this->view('Home/home', $data);
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
                    'Address' => trim($_POST['ClientShippingAddress']),
                    'pass' => $_POST['password'],
                    'pass_verify' => $_POST['verify_password'],
                    'ClientPassword' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'ClientEmail' => trim($_POST['ClientEmail']),
                    'CardNumber' => trim($_POST['CardNumber']),
                    'CardName' => trim($_POST['CardName']),
                    'password_error' => '',
                    'password_match_error' => '',
                    'password_len_error' => '',
                    'msg' => '',
                    'email_error' => '',
                    'street_address_error' => ''
                ];
                if($this->validateData($data)){
                    if($this->loginModel->createClient($data) && $this->model('addressesModel')->addAddress($data) && 
                            $this->model('cardsModel')->addCard($data)){
                            // echo 'Please wait creating the account for you';
                            // echo '<meta http-equiv="Refresh" content="0.1; url=/TermProject/Login/">';
                            header('Location: /TermProject/Login/');
                    }
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

    public function validateData($data){
        if (!filter_var($data['ClientEmail'], FILTER_VALIDATE_EMAIL)) {
            $data['email_error'] = 'Please check your email and try again';
        }
        if(strlen($data['pass']) < 6){
            $data['password_len_error'] = 'Password can not be less than 6 characters';
        }
        if($data['pass'] != $data['pass_verify']){
            $data['password_match_error'] = 'Passwords do not match';
        }

        if(!(preg_match(trim('/\d+.*?[A-z]+.[A-z]+..[A-z]+..[A-z]+..[A-Z]\d[A-Z].\d[A-Z]\d/ '), trim('ClientShippingAddress')))){
            $data['street_address_error'] = "This street is invalid, insert #, Street name, City, Province, Zip Code.";
        }

        if(empty($data['password_len_error']) && empty($data['password_match_error']) && empty($data['email_error']) /*&& empty($data['street_address_error'])*/){
            return true;
        }
        else{
            $this->view('Login/create',$data);
        }
    }

    public function createSession($user){
        $_SESSION['ClientEmail'] = $user->ClientEmail;
    }

    public function logout(){
        unset($_SESSION['user_id']);
        session_destroy();
        // echo '<meta http-equiv="Refresh" content="0.1; url=/TermProject/Login/">';
        header('Location: /TermProject/Login/');
    }
}

