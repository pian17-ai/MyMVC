<?php

class Users extends Controller {
    public function index() {
        $data['title'] = 'Users';
        $data['users'] = $this->model('UserModel')->getAllUsers();

        $this->view('templates/header');
        $this->view('Users/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data ['title'] = "Detail User";
        $data ['user'] = $this->model('UserModel')->getUserById($id);

        $this->view('templates/header', $data);
        $this->view('Users/detail', $data);
        $this->view('templates/footer');
    }
}