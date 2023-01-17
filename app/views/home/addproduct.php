<div class="container m-4">
    <form action="" method="POST" enctype="multipart/form-data">
        <div id="bigdiv">
            <div id="hiddendiv">
                product1
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="libelle[]" placeholder="Name" aria-label="First name">
                </div>
                <div class="col">
                    <textarea type="text" name="description[]" class="form-control" placeholder="Description" aria-label="Last name"></textarea>
                </div>
                <div class="col">
                    <input type="number" name="price[]" class="form-control" placeholder="price" aria-label="Last name">
                </div>
                <div class="col">
                    <input type="file" name="picProcuct[]" class="form-control" placeholder="price" aria-label="Last name">
                </div>
            </div>
        </div>
        <button type="button" id="onemore" class="btn border">ONE MORE</button>
        <button type="submit" name="btn" class="btn border">SUBMITE</button>
    </form>
</div>