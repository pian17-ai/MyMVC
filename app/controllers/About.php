<?php

class About extends Controller{
    public function index() {
        $data['title'] = "About";
        $this->view('templates/header', $data);
        $this->view('About/index', $data);
        $this->view('templates/footer', $data);
    }
    
    public function aboutme() {
        $data['title'] = "About me";
        $this->view('templates/header', $data);
        $this->view('About/aboutme', $data);
        $this->view('templates/footer', $data);
    }
}