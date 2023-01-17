<?php
class addproduct extends controller
{
    public function __construct()
    {
        $this->model('Database');
        $this->view('addproduct');
        if (isset($_POST['btn'])) {
            var_dump($_POST['libelle']);
            echo "abdo";
            $addproduct = $this->model('crud');
            $addproduct->addproduct($_POST['libelle'], $_POST['description'], $_POST['price']);
            // header('location: ./productlist');
        }
    }
}
