<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="reset.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<form action="../Controller/Product.php?operation=insert" method="post" enctype="multipart/form-data" class="produto">
    <h1>cadastre seu produto</h1>
    <section class="row">
        <article class="col-12 col-md-6">    
            <div class="mb-3">
                <input type="file"accept="image/jpeg, image/png, image/jpg" name="imagem[]" id="imagem[]" multiple>
            </div>
        </article>
        <article class="col-12 col-md-6">
            <div class="mb-3">
                <label for="product" class="form-label">nome do produto</label>
                <input type="text" id="product" name="product" class="form-control">
            </div>
        </article>
        <article class="col-12 col-md-6">
            <div class="mb-3">
                <label for="description" class="form-label">descrição do produto</label><br>
                <textarea name="description" id="descrição" cols="50" rows="5"></textarea>
            </div>
        </article>
        <article class="col-12 col-md-6">
            <div class="mb-3">
                <label for="valor" class="form-label">valor:</label>
                <input type="float" id="valor" name="valor" class="form-control">
            </div>
        </article>
        <article class="col-12 col-md-12">
            <div class="mb-3">
                <button class="btn btn-primary">ENVIAR</button>
            </div>
        </article>
    </section>
</form>
</body>
</html>