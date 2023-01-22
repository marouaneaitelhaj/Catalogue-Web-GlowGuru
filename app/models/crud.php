<?php

use LDAP\Result;

use function PHPSTORM_META\sql_injection_subst;

class crud extends Database
{
    public $query;
    public function addproduct($value1, $value3, $value4, $value8)
    {
        // echo $value1;
        // print_r($value1);
        for ($i = 0; $i < count($value3); $i++) {
            $image = $value8["name"][$i];
            $sql = "INSERT INTO produit (libelle, description,Price,picProcuct) VALUES
        ('$value1[$i]','$value3[$i]','$value4[$i]','$image');";
            mysqli_query($this->conn, $sql);
        }
        // var_dump($value1);
    }
    public function search()
    {
        $libelle = $_GET["libelle"];
        echo $libelle;
        $this->query = mysqli_query($this->conn, "SELECT * FROM produit WHERE libelle LIKE '%$libelle%'");
        return $this->query;
    }
    public function productlist()
    {
        $this->query = mysqli_query($this->conn, "SELECT * FROM produit ORDER BY RAND()");
    }

    public function suggestion()
    {
        $this->query = mysqli_query($this->conn, 'SELECT * FROM produit ORDER BY RAND() LIMIT 3;');
    }
    public function cover()
    {
        $this->query = mysqli_query($this->conn, 'SELECT * FROM produit ORDER BY RAND() LIMIT 1;');
    }
    public function details()
    {
        $idprd = mysqli_real_escape_string($this->conn, $_GET['id']);
        $this->query = mysqli_query($this->conn, "SELECT * FROM produit where IdPrd='$idprd'");
    }
    public function delete($value1)
    {
        $sql = "DELETE FROM `produit` WHERE IdPrd='$value1';";
        mysqli_query($this->conn, $sql);
        var_dump($sql);
    }
    public function editproduct($value1, $value2, $value3, $value4, $value5, $value6, $value7)
    {
        $idprd = mysqli_real_escape_string($this->conn, $_GET['id']);
        if (!$value7["size"] == 0) {
            $image = $value7["name"];
            $sql = "UPDATE produit SET libelle='$value1',description='$value5', picProcuct='$image' where IdPrd='$idprd' ;";
        } else {
            $sql = "UPDATE produit SET libelle='$value1',description='$value5'  where IdPrd='$idprd';";
        }
        mysqli_query($this->conn, $sql);

        header('location: ./newArrivals');
    }
    public function dashboard()
    {
        $sql = 'SELECT COUNT(*) FROM `produit`;';
        $count = mysqli_query($this->conn, $sql);
        $sql = 'SELECT SUM(`Price`) FROM `produit`;';
        $total = mysqli_query($this->conn, $sql);
        return array($count, $total);
    }
    public function signup($value1, $value2, $value3)
    {
        $sql = "INSERT INTO `user` (`login`, `Password`, `email`) VALUES ('$value1', '$value2', '$value3');";
        mysqli_query($this->conn, $sql);
    }

    public function login($value1, $value2)
    {
        $sql = "SELECT * FROM `user`;";
        $result = mysqli_query($this->conn, $sql);
        foreach ($result as $user) {
            if ($value1 == $user['email'] and password_verify($value2, $user['Password'])) {
                $_SESSION["email"] = $user['email'];
                $_SESSION["username"] = $user['login'];
                $_SESSION["Password"] = $user['Password'];
                $_SESSION["TYPEACC"] = $user['TYPEACC'];
                $_SESSION["login"] = 'true';
                $_SESSION["userPic"] = $user['userPic'];
                $_SESSION["id"] = $user['id'];
                header('location: ./');
            }
        }
    }

    public function addtocart($value1, $value2, $value3, $value4, $value5)
    {
        $sql = "INSERT INTO cart (IdPrd, prixtotal, prixunitaire, quantite,client, situation) VALUES ('$value1','$value2', '$value3', '$value4','$value5', 'notdone');";
        mysqli_query($this->conn, $sql);
    }
    public function readcart($value1)
    {
        $sql = "SELECT * FROM cart JOIN produit on cart.IdPrd = produit.IdPrd WHERE client='$value1' AND situation='notdone';";
        $this->query = mysqli_query($this->conn, $sql);
    }
    public function allclient()
    {
        $sql = "SELECT * FROM `user`;";
        $this->query = mysqli_query($this->conn, $sql);
    }
    public function profile($value1)
    {
        if (isset($_SESSION['id']) and $_SESSION['id'] == 1) {
            $sql = "SELECT * FROM commande LEFT JOIN user ON commande.idclient = user.id;";
        } else {
            $sql = "SELECT * FROM `commande` WHERE `idclient`=$value1;";
        }
        $this->query = mysqli_query($this->conn, $sql);
    }
    public function addcommand($value1, $value2, $value3, $value4)
    {
        $idcmnd = 0;
        //some
        // $sql = "SELECT prixtotal FROM cart JOIN produit on cart.IdPrd = produit.IdPrd WHERE client='$value1' AND situation='notdone';";
        $sql = "SELECT SUM(`prixtotal`) AS total FROM cart WHERE client='$value4' AND situation='notdone';";
        $result = mysqli_query($this->conn, $sql);
        foreach ($result as $total) {
            //insert
            var_dump($total);
            $tota = $total['total'];
            $sql = "INSERT INTO `commande` (`datedecreation`, `datedenvoi`, `datedelivraison`, `idclient`, `prixtotaldelacommande`) VALUES ('$value1', '$value2', '$value3', '$value4', '$tota');";
        }
        mysqli_query($this->conn, $sql);
        $sql = "SELECT LAST_INSERT_ID();";
        $result = mysqli_query($this->conn, $sql);
        foreach ($result as $idcmnd) {
            $idcmnd = $idcmnd['LAST_INSERT_ID()'];
        }
        $sql = "UPDATE cart SET situation='done', IdCmnd='$idcmnd' where client='$value4'";
        mysqli_query($this->conn, $sql);
    }
    public function deletefromcart($value1)
    {
        $sql = "DELETE FROM cart where id='$value1';";
        mysqli_query($this->conn, $sql);
    }
    public function Cancelcmnd($value1)
    {
        $sql = "DELETE FROM commande where id='$value1';";
        mysqli_query($this->conn, $sql);
    }
}
