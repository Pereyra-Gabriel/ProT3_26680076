<?php
  $session = session();
  $nombre= $session->get('nombre');
  $perfil= $session->get('perfil_id');
  ?>

<nav class="navbar navbar-expand-lg bg-body-blue">
  <div class="container-fluid">
    <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
      <img src="assets/img/logo_empresa.jpg" alt="marca" width="75" height="30" class="img-fluid">
    </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>
<?php if(session()->perfil_id == 1): ?>
  <div class="btn btn-secondary active btnUser btn-sm">
    <a href="">ADMIN:  <?php echo session('nombre'); ?> </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
     <a class="nav-link" href="#"></a></li>
    <li class="nav-item">
     <a class="nav-link" href="registro">Registrarse</a></li>
    <li class="nav-item">
     <a class="nav-link" href="login">Login</a></li>
    <li class="nav-item">
     <a class="nav-link" href="<?php echo base_url('logout');?>" tabindex="-1" aria-disable="true">Cerrar Sesión</a></li>
   </ul>
  </div>
<?php elseif(session()->perfil_id == 2): ?>
  <div class="btn btn-info active btnUser btn-sm">
    <a href="">CLIENTE:  <?php echo session('nombre'); ?> </a>
  </div>
      <!-- NAVBAR PARA CLIENTES que pueden comprar/logueados -->
 <a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
     <a class="nav-link" href="quienes_somos">Quiénes Somos</a></li>   
    <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="lamparas">Lámparas</a></li>
    <li><a class="dropdown-item" href="#">Proyectores</a></li>
    <li><a class="dropdown-divider"></a></li>
    <li><a class="dropdown-item" href="#">Novedades</a></li>
  </ul>
   </li>
   <li class="nav-item">
    <a class="nav-link" href="sugerencias">Sugerencias</a></li>
   <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disable="true">Cerrar Sesión</a></li>
  </ul>
    <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
    <button class="nav-link" type="submit">Buscar</button>
    </form>
</div>
<?php else:?>
      <!-- NAVBAR PARA CLIENTES NO LOGUEADOS -->
    <a class="navbar-brand" href="#"></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quiénes Somos</a></li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="acerca_de">Acerca de</a></li>
      <li class="nav-item">
        <a class="nav-link" href="catalogo">Catálogo</a></li>
      <a class="nav-link" href="registro">Registrarse</a></li>
      <li class="nav-item">
        <a class="nav-link" href="login">Login</a></li>
     </li>
    </ul>
</div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="nav-link" type="submit">Buscar</button>
      </form>
    <?php endif;?>
    </div>
  </div>
</nav>
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

