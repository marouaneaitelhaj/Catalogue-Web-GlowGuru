<?php
class addproduct extends controller
{
    public function __construct()
    {
        $this->model('Database');
        $this->view('addproduct');
        if (isset($_POST['btn'])) {
            // for
            for ($i = 0; $i < count($_FILES['picProcuct'][]);$i++){
                echo "+";
            } 
            $addproduct = $this->model('crud');
            $addproduct->addproduct($_POST['libelle'], $_POST['description'], $_POST['price'],$_FILES['picProcuct']);
            // header('location: ./productlist');
        }
    }
}