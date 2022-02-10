<?php
/* Smarty version 4.0.4, created on 2022-02-09 09:34:49
  from '/var/www/html/ardis/app/Views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6203df19d7dd87_56654351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b3d239811c101ba7293c5759faa6225e27dae72' => 
    array (
      0 => '/var/www/html/ardis/app/Views/index.tpl',
      1 => 1644419023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6203df19d7dd87_56654351 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description " content="Hotel ardis ,l 'hotel du 'climats ' ">
    <meta name="description " content="Decouvrez nos hotels sur tout les climats, nous avons des hotel sur les 4 coin du globe.
    Nous avons 3 hotel a dubai, 2 en suise est 2 a punt cana tousse ">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Hotel ardis</title>
</head>

<body style="background-image: url('assets/Images/background.jpg')">
    <!-- hedear -->
    <header>
        <!-- navbar -->
        <nav class="navbar bg-transparent navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="assets/Images/logo_menu.png" alt="logo" width="80"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="index.html">Acceuil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Nos hotels
                    </a>
                            <ul class="dropdown-menu bg-transparent" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item bg-transparent text-white" href="nos_hotel/punta_cana.html">Punta cana</a></li>
                                <li><a class="dropdown-item bg-transparent text-white" href="nos_hotel/dubai.html">Dubai</a></li>
                                <li><a class="dropdown-item bg-transparent text-white" href="nos_hotel/suisse.html">Suisse</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="reservation.html">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="activiter.html">Nos activiter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="restaurant.html">Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="galerie_photo.html">Galerie photo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="create_account.html">Creer un compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="avis.html">Les avis </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- reservation -->
    <div class=" form-reservation position-absolute top-50 start-50 translate-middle">
        <div class="row bg-transparent">
            <h1 class="text-center text-white">Decouvrez nos hotels <br> sur tout les climats...</h1>
            <form class="form-control bg-transparent reservation">
                <label for="reservation" class="text-white">Du:</label>
                <input type="date" class="">
                <label for="reservation" class="text-white">Au:</label>
                <input type="date" class="">
                <input type="submit" name="sub" class="btn-dark" value="chercher">
            </form>
        </div>
    </div>

    <i class="fas fa-arrow-down"></i>

    <!-- partie meuilleur hotel/prix -->
    <section>
        <h2 class="text-center presentation_hotel">Nos meuilleur hotel avec les meuilleur prix</h2>
        <div class="card-group">
            <div class="card">
                <img src="assets/Images/punta_cana/photo-1571003123894-1f0594d2b5d9.png" class="d-block mx-auto" alt="hotel_punt_cana" width="200px">
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="nos_hotel/punta_cana.html">Punta cana</a></h5>
                    <p class="card-text ">Hotel ardis Sampatico</p>
                    <p style="color: #ff00aa ;" class="card-text ">a partir de 250€</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/Images/dubai/hotel-desert-dubai.png" class="card-img-top d-block mx-auto" alt="hotel_dubai">
                <div class="card-body">
                    <h5 class="card-title"><a href="nos_hotel/dubai.html">Dubai</a></h5>
                    <p class="card-text text-start">Hotel ardis dubai</p>
                    <p style="color: #ff00aa;" class="card-text text-start">a partir de 320€</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/Images/suisse/images2.png" class="card-img-top d-block mx-auto" alt="hotel_suisse">
                <div class="card-body">
                    <h5 class="card-title"><a href="nos_hotel/suisse.html">Suisse</a></h5>
                    <p class="card-text text-start">Hotel ardis Sampatico</p>
                    <p style="color: #ff00aa ;" class="card-text text-start">a partir de 100€</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-grid gap-2 d-md-block">
                <a href="nos_hotel/punta_cana.html" class="btn">Pour en savoir plus</a>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <footer class=" card-footer d-flex align-items-center ">
        <div class="container ">
            <div class="row ">
                <div class="d-flex ">
                    <p class=" "> © 2021 Hotel ardis|Mention legale</p>
                    <p>| Email: hotel@ardis.com |  Numero mobile: 06 06 06 06 06</p>
                    <img src="assets/Images/Objet dynamique vectoriel.png " alt="logo_icone " height="30">
                </div>
            </div>
        </div>
    </footer>   

</body>
<?php echo '<script'; ?>
 src="assets/js/bootstrap.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/f8e0ca0321.js " crossorigin="anonymous "><?php echo '</script'; ?>
>

</html><?php }
}
