<?php
class Contact extends Controller
{
    public function __construct()
    {
        $this->contactModel = $this->model("contactModel");
    }

    public function index()
    {
        $this->view('Contact/contact');
    }
    
    public function displayContact(){
        $contact = $this->contactModel->displayContact();
        $data = [
            "contact" => $contact
        ];
        $this->view('Contact/contact', $data);
    }

    public function editContact(){
        $contact = $this->contactModel->displayContact(1);
            if(!isset($_POST['update'])){
                $this->view('Contact/editContact', $contact);
            }
            else{
                $data=[
                    'Instagram' => trim($_POST['Instagram']),
                    'Twitter' => trim($_POST['Twitter']),
                    'Facebook' => trim($_POST['Facebook']),
                    'contactID' => 1
                ];
                if($this->contactModel->updateContact($data)){
                    header('Location: /TermProject/Contact/displayContact');
                }      
            }
    }
}
