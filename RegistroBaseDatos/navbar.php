<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar Dos</title>
    <link rel="stylesheet" href="./assets/./css/nav.css">
</head>
<body>
<!--LOGO-->
    <header class="header">
        <div class="logo">
<!---->            <img src="./assets/./images/logo.jpg" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="registro.php">Registro</a></li>
           </ul>            
        </nav>
        <a class="btn" href="#"><button>Contact</button></a>

<!---->        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

<!---->        <div id="mobile-menu" class="overlay">
<!---->            <a onclick="closeNav()" href="" class="close">&times;</a>
<!---->            <div class="overlay-content">
<!---->                <a href="#">Services</a>
<!---->                <a href="#">Projects</a>
<!---->                <a href="registro.php">Registro</a>
<!---->                <a href="#">Contact</a>
<!---->            </div>
<!---->        </div>

    </header>
<!---->    <script type="text/javascript" src="/assets/./js/nav.js"></script>

</body>
</html>