
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda (nombre / logo en proceso)</title>
    <link rel="stylesheet" href="/proyecto/css/style.css">
    <link rel="stylesheet" href="/proyecto/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="preload" href="/proyecto/css/style.css">
    <link rel="preload" href="/proyecto/css/normalize.css">
    

</head>
<body>
    <header>
        <a href="index.php">
            <img class="header__logo" src="/proyecto/img/logoProvisional.png" alt="logotipo tienda"> 
        </a>
        <div class="header__inicio">
        <a href="signIn.php">
            <p class = header__inicio--inicioses>Iniciar Sesión</p>
        </a>
        <a href="signUp.php">
            <p class="header__inicio--crearcuen">Crear Cuenta</p>
        </a>

        <a href="carrito.php"> 
            <svg class="header__inicio--carrito" xmlns="http://www.w3.org/2000/svg"  width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="6" cy="19" r="2" />
                <circle cx="17" cy="19" r="2" />
                <path d="M17 17h-11v-14h-2" />
                <path d="M6 5l14 1l-1 7h-13" />
              </svg>
          </svg>
        </a>
        </div>

    </header>

    <nav class="navegacion">


        <?php switch ($activo) {
            case "inicio" :
                ?>
                <a class="navegacion__enlace navegacion__enlace--activo" href="index.php"> Tienda </a>
                <a class="navegacion__enlace" href="departamentos.php"> Departamentos </a>
                <a class="navegacion__enlace" href="nosotros.php"> Nosotros </a>
                <a class="navegacion__enlace" href="contacto.php"> Contacto </a>
                <?php
                break;
            case "departamentos":
                ?>
                <a class="navegacion__enlace" href="index.php"> Tienda </a>
                <a class="navegacion__enlace navegacion__enlace--activo" href="departamentos.php"> Departamentos </a>
                <a class="navegacion__enlace" href="nosotros.php"> Nosotros </a>
                <a class="navegacion__enlace" href="contacto.php"> Contacto </a>
                <?php
                break;
                case "nosotros":
                    ?>
                     <a class="navegacion__enlace" href="index.php"> Tienda </a>
                    <a class="navegacion__enlace" href="departamentos.php"> Departamentos </a>
                    <a class="navegacion__enlace navegacion__enlace--activo" href="nosotros.php"> Nosotros </a>
                    <a class="navegacion__enlace" href="contacto.php"> Contacto </a>
                    <?php
                    break;
                case "contacto":
                    ?>
                    <a class="navegacion__enlace" href="index.php"> Tienda </a>
                    <a class="navegacion__enlace" href="departamentos.php"> Departamentos </a>
                    <a class="navegacion__enlace" href="nosotros.php"> Nosotros </a>
                    <a class="navegacion__enlace navegacion__enlace--activo" href="contacto.php"> Contacto </a>
                    <?php
                    break;
            default:
                    ?>
                    <a class="navegacion__enlace" href="/proyecto/index.php"> Tienda </a>
                    <a class="navegacion__enlace" href="/proyecto/departamentos.php"> Departamentos </a>
                    <a class="navegacion__enlace" href="/proyecto/nosotros.php"> Nosotros </a>
                    <a class="navegacion__enlace" href="/proyecto/contacto.php"> Contacto </a>
                    <?php
                break;
        } ?>
    </nav>