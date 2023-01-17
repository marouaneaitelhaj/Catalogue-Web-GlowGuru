<div class="container" id="container">
    <div class="d-flex justify-content-around flex-wrap">
        <?php
        if (mysqli_num_rows($data['query']) > 0) {
            while ($produit = mysqli_fetch_array($data['query'])) {
        ?>
                <div class="mt-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../uploads/<?= $produit['picProcuct'] ?>" style="object-fit: cover;height: 180px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produit['libelle'] ?></h5>
                            <p class="card-text"><?= $produit['description'] ?></p>
                            <a href="./details?id=<?= $produit['IdPrd'] ?>" class="btn m-4">See Details</a>
                            <br>
                            <?php
                            if (isset($_SESSION["TYPEACC"]) && $_SESSION["TYPEACC"] == 'admin') {
                            ?>
                                <a href="./Delete?id=<?= $produit['IdPrd'] ?>" class="btn p-1" style="background-color: #d9534f;">Delete</a>
                                <a href="./editproduct?id=<?= $produit['IdPrd'] ?>" class="btn p-1" style="background-color: #337ab7;">Edit</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<h1>NOTHING TO SHOW</h1>";
        }
        ?>

    </div>

</div>