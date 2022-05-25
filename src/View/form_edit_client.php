<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="artesanato, artes feitas a mão, artes pequenas, pequenas artes"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="shortcut icon" href="img/logo_black.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .form{
            background: rgb(219, 196, 162);
            color: white;
            margin-top: 150px;
            height: 600px;
            padding: 25px;
        }
    </style>

</head>

<body>
    <main class="container" >
        <div class="d-flex justify-content-center"><h1>SUA CONTA</h1></div>
        <form action="../Controller/Client.php?operation=update" method="POST" class="form">
            <input type="hidden" id="code" name="code" value="<?= $_SESSION["client_data"]["id_client"] ?>">
            <section class="row">
                <article class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label" >Nome completo</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nome" value="<?= $_SESSION["client_data"]["name"] ?>">
                    </div>
                </article>
                <article class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="(51)XXXXX-XXXX"  value="<?= $_SESSION["client_data"]["phone"] ?>">
                    </div>
                </article>
                <article class="col-12 col-md-4">
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="123456">
                    </div>
                </article>
                <article class="col-12 col-md-12">
                <div class="mb-3">
                        <center><label for="email" class="form-label">Email</label></center>
                        <input type="email" id="email" name="email" class="form-control" placeholder="email@gmail.com" value="<?= $_SESSION["client_data"]["email"] ?>">
                    </div>
                </article>
            </section>
            <section class="row">
                <article class="col-12">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">SALVAR</button>
                    </div>
                </article>
                <a href="../../index.php" class="">Voltar</a>
            </section>
        </form>
    </main>
</body>

</html>