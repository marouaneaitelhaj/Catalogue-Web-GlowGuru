<?php
class addproduct extends controller
{
    public function __construct()
    {
        if (isset($_SESSION["email"])) {
            $this->model('Database');
            $this->view('addproduct');
            if (isset($_POST['btn'])) {
                // for
                for ($i = 0; $i < count($_FILES['picProcuct']["name"]); $i++) {
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["picProcuct"]["name"][$i]);
                    move_uploaded_file($_FILES["picProcuct"]["tmp_name"][$i], $target_file);
                }
                $addproduct = $this->model('crud');
                $addproduct->addproduct($_POST['libelle'], $_POST['description'], $_POST['price'], $_FILES['picProcuct']);
                header('location: ./newArrivals');
            }
        }else{
            header('location: ./');
        }
    }
}
