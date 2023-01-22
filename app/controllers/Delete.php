<?php
class delete extends controller{
    public function __construct()
    {
        if (isset($_SESSION["email"])) {
        $this->model('Database');
        $delete = $this->model('crud');
        $delete->delete($_GET['id']);
        header('location: ./tableproduct');
    }else{
        header('location: ./');
    }
    }
}