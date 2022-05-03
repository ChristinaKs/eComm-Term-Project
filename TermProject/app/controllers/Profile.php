<?php
class Profile extends Controller
{
    public function __construct()
    {
        $this->db = new Model;
        $this->orderModel = $this->model('orderModel');
        $this->orderDetailModel = $this->model('orderDetailModel');
    }

    public function index()
    {
        $user = $this->model('profileModel')->getClient($_SESSION['ClientEmail']);
        $data = [
            "first_name" => $user->ClientFirstName,
            "last_name" => $user->ClientLastName,
            "email" => $user->ClientEmail
        ];

        //displaying order and order status
        $clientEmail = $_SESSION['ClientEmail'];
        $order = $this->orderModel->getOrdersByClientEmail($clientEmail);
        $orderDetailArray = array();
        foreach($order as $value){
            array_push($orderDetailArray,$this->orderDetailModel->getOrdersByOrderId($value->OrderId));
        }
        //var_dump($orderArray(0)->order_item_id);
        //$orderId = $order->OrderId;
        //$orderDetails = $this->orderDetailModel->getOrdersByOrderId($orderId);
        //var_dump($orderDetails);
        $this->view('Profile/profile', $data, $order, $orderDetailArray);
    }

    public function update(){
        $user = $this->model('profileModel')->getClient($_SESSION['ClientEmail']);
        $data = [
            "first_name" => $user->ClientFirstName,
            "last_name" => $user->ClientLastName,
            "email" => $user->ClientEmail
        ];
        if(!isset($_POST['updateClient'])){
            $this->view('Profile/updateProfile', $data);
        }
        else{
            $data = [
                "email" => $user->ClientEmail,
                "first_name" => trim($_POST['firstNameInput']),
                "last_name" => trim($_POST['lastNameInput'])
            ];
          //  if($this->validateData($data)){
                if($this->model('profileModel')->updateClient($data)){
                    // echo 'Please wait we are updating the profile for you!';
                    // echo '<meta http-equiv="Refresh" content="0.1; url=/TermProject/Profile/">';
                    header('Location: /TermProject/Profile');
                }
           // }
        }
    }

    public function updatePassword(){
        if(!isset($_POST['updatePassword'])){
            $this->view('Profile/updatePassword');
        }else{
            $user = $this->model('profileModel')->getClient($_SESSION['ClientEmail']);
                $data = [
                    "client_password" => $user->ClientPassword,
                    "email" => $user->ClientEmail,
                    'old_password' => $_POST['oldPassword'],
                    'new_password' => password_hash($_POST['newPassword'], PASSWORD_DEFAULT)
                ];
            if(!password_verify($data['old_password'],$data['client_password'])){
                $data = [
                    'msg' => "Old password incorrect!"
                ];
                $this->view('Profile/updatePassword',$data);
            }else {
                if($_POST['newPassword'] != $_POST['reEnterPassword']){
                    $data = [
                        'msg' => "Passwords do not match"
                    ];
                    $this->view('Profile/updatePassword',$data);
                }if($_POST['newPassword'] == $data['old_password']){
                    $data = [
                        'msg' => "New password cannot be the same as old password"
                    ];
                    $this->view('Profile/updatePassword',$data);
                }else {
                    if($this->model('profileModel')->updatePassword($data)){
                        // echo 'Please wait we are updating the password for you!';
                        // echo '<meta http-equiv="Refresh" content="0.1; url=/TermProject/Profile">';
                        header('Location: /TermProject/Profile');
                    }
                }
            }
        }
    }

    public function delete(){
        if(!isset($_POST['deleteProfile'])){
            if ($this->model('addressesModel')->deleteClientAddresses($_SESSION['ClientEmail']) &&
                     $this->model('cardsModel')->deleteClientCards($_SESSION['ClientEmail'])){
                if($this->model('profileModel')->delete($_SESSION['ClientEmail'])){
                    echo 'Please wait we are deleting the account for you!';
                    unset($_SESSION['ClientEmail']);
                    session_destroy();
                    // echo '<meta http-equiv="Refresh" content="0.1; url=/TermProject/Login">';
                    header('Location: /TermProject/Logins');
                }
            }
        }
    }

    public function validateData($data){
        if(!(preg_match('^(?!.*[DFIOQU].*)([A-Z][0-9]){3}$', trim($_POST['shippingAddressInput'])))){
            $data['street_address_error'] = "This street is invalid. Insert:  #, Street name, City, Province, Zip Code.";
        }
        if(empty($data['street_address_error'])){
            return true;
        }
        else{
            $this->view('Profile/updateProfile',$data);
        }
    }

}