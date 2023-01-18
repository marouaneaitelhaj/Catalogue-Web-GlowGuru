<div class="m-4 text-center d-flex justify-content-around">
    <div class="text-center d-flex">
    <p class="mr-4">TOTAL PRODUCT: </p>
    <p>
    <?php
    foreach ($data['dashboard'][0] as $count) {
        foreach($count as $count){
            echo $count;
        }
    }
    ?>
    </p>
    </div>
    <div class="text-center d-flex">
    <p class="mr-4">TOTAL PRICE: </p>
    <p>
    <?php
    foreach ($data['dashboard'][1] as $sum) {
        foreach($sum as $sum){
            echo $sum;
        }
    }
    ?>
    $
    </p>
    </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">prix</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    foreach($data['query'] as $product){
    ?>
    <tr>
      <th scope="row"><?=$i?></th>
      <td class="w"><?=$product['libelle']?></td>
      <td><?=$product['description']?></td>
      <td><?=$product['Price']?>$</td>
      <td>
        <a href="editproduct?id=<?=$product['IdPrd']?>">
      <button type="button" class="btn">
        Edit
        </button>

        </a>
      </td>
      <td>
      <a href="delete?id=<?=$product['IdPrd']?>">
      <button type="button" class="btn">
      delete
      </button>
        </a>
      </td>
    </tr>
    <?php
    $i++;
    }
    ?>
  </tbody>
</table>