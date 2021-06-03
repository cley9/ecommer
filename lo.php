<?php
include("includes/head_.php"); ?>
<!-- COMBAK: ---------------------------------------------------------------- -->


<div class="container mb-4 pt-4">
    <div class="">
        <div class="  container  border  col-lg-4 shadow-lg text-center rounded-3">
            <div class="mb-2"></div>
                    <div class="mb-3">
                        <h3 >Usuario</h3>
                        <img src="../img/LOGO_RESTAURANTE.gif" class="rounded-circle border border-primary" alt="" height="180px">

            <a class=""href="#" style=" color:#828C8A; font-size:40px;"><i class="bi bi-person-circle"></i></a>

                    </div>
<form action="crud.php" method="post">
<div class="mb-3">
<label for="exampleInputEmail1" class=""> <img src="icons/person-fill.svg" alt=""height="22px">Correo</label>
<input type="text" class="form-control" id="exampleInputEmail1" name="txtUsu" aria-describedby="emailHelp"  placeholder="Email">
</div>
<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">
Contraseña</label>
<img src="icons/eye-fill.svg" alt="" onclick="mostrar()" height="20px">
<input type="password" class="form-control" id="password" name="txtPass"  placeholder="Password" aria-describedby="emailHelp" >

<div id="emailHelp" class="form-text">Iniciar cuenta.</div>
</div>
<button type="submit" name="user_login_" class="btn btn-warning mb-3 rounded-pill  " style="width:100px;">Ingresar</button>
</form>
</div>
</div>
</div>

<style>
/*
  input:focus {
  background-color:#FFEBCD;
  border: 2px solid #CB8B07;
  }
  ------------------------------------------->
                eliminar los bordes
  textarea:focus, input:focus, input[type]:focus {
  outline: 0 none;
  }
  textarea:focus, input:focus, input[type]:focus {
  border-color: rgb(255, 144, 0);
  box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px rgba(255,144,0,0.6);
  outline: 0 none;
  }
  */
input{
    border-color:#FDFEFE;
}
input:focus{

  border-color: ##76D7C4;
    box-shadow: 0 1px 1px rgba(229, 103, 23, 0.075)inset, 0 0 8px rgba(118, 215, 196,0.6);
  outline: 0 none;
}
</style>
<!-- COMBAK: ---------------------------------------------------------------- -->
<div class="container">
<div class="  container  border  col-lg-3 shadow-lg text-center rounded-3 bg-primary " style="height:500px">
  <div class="bg-success mb-4 ">
    <i class="bi bi-person-circle bg-primary"style=" color:#828C8A; font-size:120px;" >
    </i>
    <!--  <img src="../img/LOGO_RESTAURANTE.gif" class="rounded-circle border border-primary" alt="" height="180px">-->

      <h3 class="text-light ">Usuario</h3>
  </div>
  <form action="crud.php" method="post" class="pt-4">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-light">Correo</label>

  <input type="text" class="form-control rounded-3 text-light" id="exampleInputEmail1" name="txtUsu" aria-describedby="emailHelp"  placeholder="Email">
  </div>
  <div class="mb-3">

  <label for="exampleInputEmail1" class="form-label text-light">  Contraseña</label>
 <i class="bi bi-eye text-light " onclick="mostrar()" style="font-size:20px;" ></i>

  <input type="password" class=" rounded-3 text-light " id="password" name="txtPass"  placeholder="Password" aria-describedby="emailHelp" >
  </div>
  <div class="pt-3">
    <button type="submit" name="user_login_" class="btn btn-warning mb-3 rounded-pill " style="width:100px;">Ingresar</button>
  </div>
  </form>
  </div>
</div>
<!-- COMBAK: ---------------------------------------------------------------- -->

<?php
include("includes/footer_.php"); ?>
