<?php
class editproduct extends controller
{
    public function __construct()
    {
        $this->model('Database');
        $this->model('Database');
        $details = $this->model('crud');
        $details->details();
        $this->view('editproduct', ['details' => $details->query]);
        if (isset($_POST['btn'])) {
            $target_dir = "../uploads/";
            $target_file = $target_dir . basename($_FILES["productPic"]["name"]);
            move_uploaded_file($_FILES["productPic"]["tmp_name"], $target_file);
            $editproduct = $this->model('crud');
            $editproduct->editproduct($_POST['libelle'], $_POST['prixdachat'],  $_POST['prixfinal'],$_POST['Prixoffre'], $_POST['description'], $_POST['catégorie'],$_FILES['productPic']);
        }
    }
}
