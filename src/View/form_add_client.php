<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de formulários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <form action="../Controller/Client.php?operation=insert" method="POST">
            <section class="row">
                <article class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome completo</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                </article>
                <article class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                    </div>
                </article>
                <article class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                </article>
            </section>
            <section class="row">
                <article class="col-12">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </article>
            </section>
        </form>
    </main>
</body>

</html>