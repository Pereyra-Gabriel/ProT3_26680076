<?php
  $session = session();
  $nombre= $session->get('nombre');
  $perfil= $session->get('perfil_id');
?>

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="assets/img/producto_1.jpg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Eco</h5>
        <p class="card-text">Lamparas para uso domestico y super eco.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/img/producto_2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Eco Comerciales</h5>
        <p class="card-text">Ilumina de manera eficiente tu empresa.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/img/producto_3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Decos</h5>
        <p class="card-text">Para que tus ambientes fascinen.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="assets/img/producto_4.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tecnos</h5>
        <p class="card-text">Toda la última tecnología.</p>
      </div>
    </div>
  </div>
</div>