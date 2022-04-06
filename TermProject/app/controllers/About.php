<?php
class About extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('About/aboutus');
    }

    public function displayAbout(){
        $about = $this->aboutModel->displayAbout();
        $data = [
            "about" => $about
        ];
        $this->view('About/aboutus',$data);
    }
}
