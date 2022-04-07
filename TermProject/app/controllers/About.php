<?php
class About extends Controller
{
    public function __construct()
    {
        $this->aboutModel = $this->model("aboutModel");
    }

    public function index()
    {
        $about = $this->aboutModel->displayAbout();
        $data = [
            "about" => $about
        ];
        $this->view('About/aboutus',$data);
    }

    public function displayAbout(){
        $about = $this->aboutModel->displayAbout();
        $data = [
            "about" => $about
        ];
        $this->view('About/aboutus',$data);
    }

    public function edit($firstparagraph){
            if(!isset($_POST['update'])){
                $this->view('About/editAbout',$about);
            }
            else{
                $data=[
                    'firstparagraph' => trim($_POST['firstparagraph']),
                    'secondparagraph' => trim($_POST['secondparagraph']),
                    'thirdparagraph' => trim($_POST['thirdparagraph']),
                    'firstparagraph' => $firstparagraph
                ];
                if($this->aboutModel->updateAbout($data)){
                    echo 'Please wait we are upating the "About Us" page for you!';
                    echo '<meta http-equiv="Refresh" content="2; url=/TermProject/About/displayAbout">';
                }      
            }
    }
}
