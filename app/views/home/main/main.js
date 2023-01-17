document.querySelector("#onemore").addEventListener('click', function () {
  var div = document.createElement("div");
  div.innerHTML = '<div class="row mt-4"> <div class="col"> <input type="text" class="form-control" name="libelle[]" placeholder="Name" aria-label="First name"> </div> <div class="col"> <textarea type="text" name="description[]" class="form-control" placeholder="Description" aria-label="Last name"></textarea> </div> <div class="col"> <input type="number" name="price[]" class="form-control" placeholder="price" aria-label="Last name"> </div> </div>';
  document.querySelector("#bigdiv").appendChild(div);
})