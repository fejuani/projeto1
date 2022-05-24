<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    ?>
    <main class="container">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Status</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                foreach ($_SESSION["list_of_users"] as $user) :
                ?>
                    <tr>
                        <td>
                            <?= $user["id_client"] ?>
                        </td>
                        <td>
                            <?= $user["name"] ?>
                        </td>
                        <td>
                            <?= $user["phone"] ?>
                        </td>
                        <td>
                            <?= $user["email"] ?>
                        </td>
                        <td>
                            <?= ($user["active"]) ? "Ativo" : "Inativo" ?>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="../Controller/Client.php?operation=edit&codigo=<?= $user["id_client"] ?>">Editar</a>
                            <a class="btn btn-danger" href="../Controller/Client.php?operation=remove&codigo=<?= $user["id_client"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>