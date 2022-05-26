<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    if (!empty($_SESSION["msg_validation_erro"])) :
    ?>
        <div class="alert alert-warning">
            <h3>Erros de validação</h3>
            <ul>
                <?php
                foreach ($_SESSION["msg_validation_erro"] as $msg) :
                ?>
                    <li>
                        <?= $msg ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif;
    unset($_SESSION["msg_validation_erro"]); ?>

    <?php
    if (!empty($_SESSION["msg_confirm"])) :
    ?>
        <div class="alert alert-success">
            <?= $_SESSION["msg_confirm"] ?>
        </div>
    <?php endif;
    unset($_SESSION["msg_confirm"]); ?>

    <?php
    if (!empty($_SESSION["msg_error"])) :
    ?>
        <div class="alert alert-danger">
            <?= $_SESSION["msg_error"] ?>
        </div>
    <?php endif;
    unset($_SESSION["msg_error"]) ?>
    <a href="form_add_client.php">Voltar</a>
</body>

</html>