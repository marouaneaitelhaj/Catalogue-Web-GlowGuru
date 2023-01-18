<?php
class signup extends controller
{
    public function __construct()
    {
        $this->view('signup');
        if (isset($_SESSION['login'])) {

            header('location: ./');
        }else{
        if (isset($_POST['btn'])) {
            $this->model('Database');
            $signup = $this->model('crud');
            $signup->signup($_POST['login'], password_hash($_POST['Password'],PASSWORD_BCRYPT), $_POST['email']);
        }
    }
    }
}
