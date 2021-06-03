<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style_carusel.css">

    <link rel="stylesheet" href="d.css">
  <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
-->
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- iconos de bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<!---  plugins de alaert model_edit

--->
<script src='https://code.jquery.com/jquery-3.5.1.js' ></script>
<script src="https://unpkg.com/sweetalert2@10.15.0/dist/sweetalert2.all.js" charset="utf-8"></script>

<!--
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css");-->
    <title>Navbar - Bootstrap 5</title>


  </head>
  <body>



<div id="app">

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: orange;">
  <div class="container-fluid">
    <!-- Icono de NAVBAR -->
    <nav class="navbar navbar-dark">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <a class="navbar-brand" href="#"><img src="img/conocimiento.png" class="img-fluid " width="80px" height="80px" alt=""></a>

          <!--<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
        --></a>

    </div>
    </nav>
    <b><a class="navbar-brand text-success">AgrupecVentas</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent"><!---->

      <ul class="navbar-nav  mb-2 mb-lg-0"><!---->

        <li class="nav-item">
          <a href="index.php" class="nav-link active" aria-current="page">Inicio</a>

          <!-- <router-link to="/" href="../index.php" class="nav-link active" aria-current="page">Inicio</router-link>-->
        </li>
        <li class="nav-item">
        <!--<router-link to="/portfolio" class="nav-link">Portfolio</router-link>-->
        <a href="index.php" class="nav-link active" aria-current="page">Portfolio</a>
        </li>
         <li class="nav-item ">
           <!--<router-link to="/contacto" class="nav-link">Contacto</router-link>-->
           <a href="index.php" class="nav-link active" aria-current="page">Contacto</a>
         </li>
        <li class="nav-item">
          <a href="login.php" class="nav-link active" aria-current="page">Iniciar sesion</a>

      </li>

      </ul>
      <!--
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>
</div>


<!--es para el boton de menu-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
