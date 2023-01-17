<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">prix</th>
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
      <td>@fat</td>
      <td>
        <a href="editproduct?id=<?=$product['IdPrd']?>">
      <button type="button" class="btn btn-primary">
        Edit
        </button>

        </a>
      </td>
      <td>
      <a href="delete?id=<?=$product['IdPrd']?>">
      <button type="button" class="btn btn-danger">
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