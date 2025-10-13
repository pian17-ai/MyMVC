<?php

class About extends Controller{
    public function index() {
        $this->view('About/index');
    }

    public function aboutme() {
        $this->view('About/aboutme');
    }
}