<div class="container" id="container">
    <div class="d-flex justify-content-around flex-wrap">
        <?php
        if (mysqli_num_rows($data['search']) > 0) {
            while ($produit = mysqli_fetch_array($data['search'])) {
        ?>
                <div class="mt-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="../uploads/<?= $produit['picProcuct'] ?>" style="object-fit: cover;height: 180px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produit['libelle'] ?></h5>
                            <p class="card-text"><?= $produit['description'] ?></p>
                            <a href="./details?id=<?= $produit['IdPrd'] ?>" class="btn m-4">See Details</a>

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
<script src="../app/views/home/main/searsh.js"></script>