<!DOCTYPE html>
<html lang="pt-BR">
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
    <title>SmallArt</title>

</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <img src="img/logo.png" alt="SmallArt" class="img_logo">
                <div class="logo_name" >SmallArt</div>
            </div>
        </div>
        <i class='bx bx-menu' id="btn"></i>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search-alt-2'></i>
                <input type="text" placeholder="Pesquisar...">
                <span class="negocio">Pesquisar</span>
            </li>       
            <li>
                <a href="src/View/form_add_client.php">
                    <i class='bx bx-log-in' ></i>
                    <span class="links_name">Login</span>
                </a>
                <span class="negocio">Login</span>
            </li>
            <li>
                <a href="index.php">
                    <i class='bx bxs-home-smile' ></i>
                    <span class="links_name">home</span>
                </a>
                <span class="negocio">home</span>
            </li>
            <li>
                <a href="categoria.html">
                    <i class='bx bxs-category' ></i>
                    <span class="links_name">Categorias</span>
                </a>
                <span class="negocio">Categorias</span>
            </li>
            <li>
                <a href="sobre.html">
                    <i class='bx bxs-group'></i>
                    <span class="links_name">Sobre</span>
                </a>
                <span class="negocio">Sobre Nós</span>
            </li>
            <li>
                <a href="src/View/count_user.php">
                    <i class='bx bxs-user'></i>
                    <span class="links_name">Sua Conta</span>
                </a>
                <span class="negocio">Sua Conta</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <a href="src/Model/images.php">
                <i class='bx bx-log-out'></i>
                </a>
            </div>
        </div>
    </div>

    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchbtn = document.querySelector(".bx-search-alt-2");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchbtn.onclick = function(){
            sidebar.classList.toggle("active");
        }

    </script>

    <footer>
    <p class="copyright">&copy;copyright: SmallArt - 2022</p>
    </footer>
</body>
</html>
