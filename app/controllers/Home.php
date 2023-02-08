<?php

class Home extends Controller
{
    public function index()
    {
        $data["judul"] = "Dashboard";
        // $data["nama"] = $this->model("Home_model")->getUser();
        $this->view("templates/header", $data);
        $this->view("templates/sidebar");
        $this->view("home/index", $data);
        $this->view("templates/footer");
    }
}
