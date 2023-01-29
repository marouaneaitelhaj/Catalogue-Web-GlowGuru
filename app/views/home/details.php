<form class="row d-flex justify-content-around" action="" method="post">

    <div class="shopping-cart container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Shopping Cart</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['cart'] as $cart) {
                        ?>
                            <tr>
                                <td><?= $cart['libelle'] ?></td>
                                <td>
                                    <p><?= $cart['quantite'] ?></p>
                                </td>
                            <input type="text" value="<?= $cart['id'] ?>" hidden name="deleteid" id="">

                                <td><?= $cart['prixunitaire'] ?>$</td>
                                <td><?= $cart['prixtotal'] ?>$</td>
                                <td>
                                    <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>


                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <h2>Order Summary</h2>
                <p>Total: $88.00</p>
                <button type="submit" name="BuyNOW" class="btn  btn-block mt-5">Place Order</button>
            </div>
        </div>
    </div>

    <?php
    while ($produit = mysqli_fetch_array($data['query'])) {
    ?>
        <div class="container m-4">
            <div class="bg-light m-4 border rounded">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="m-4"><?= $produit['libelle'] ?></h1>
                        <p class="p-4 pt-0"><?= $produit['description'] ?></p>
        
                        <!-- <button type="submit" name="btn" class="m-4 btn-lg btn-block btn">add to cart</button> -->
</form>
</div>
<div class="col">
    <img class="w-75 border rounded m-4 p-4" src="../uploads/<?= $produit['picProcuct'] ?>">
</div>
</div>
</div>
<?php
    }
?>

<div class="container">
    <div class="d-flex justify-content-around flex-wrap">
        <?php
        while ($suggestion = mysqli_fetch_array($data['suggestion'])) {
        ?>
            <div class="mt-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../uploads/<?= $suggestion['picProcuct'] ?>" style="object-fit: cover;height: 180px;" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $suggestion['libelle'] ?></h5>
                        <p><?= substr($suggestion['description'], 0, 50); ?>...</p>

                        <a href="./details?id=<?= $suggestion['IdPrd'] ?>" class="btn">See Details</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>