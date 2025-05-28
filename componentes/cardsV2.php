<!--Tarjetas de categorias de productos-->
<div class="container mt-5">
        <div class="row">
          <!-- Tarjeta 1 -->
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://global.machenike.com/cdn/shop/files/K500-B61_-_-2.jpg?v=1690430764" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Teclado  </h5>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
      
          <!-- Tarjeta 2 -->
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://th.bing.com/th/id/R.7d9712a1fdf45e6c1a90cb9fca5fd86e?rik=WWaig4Muylf10A&riu=http%3a%2f%2fbios.do%2fwp-content%2fuploads%2f2017%2f07%2f596525a6ef59c.jpg&ehk=ABCF5wsE0qMlPKO6TtB43TVj8KSKgjEj5FtQAA5vNlY%3d&risl=&pid=ImgRaw&r=0" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mouse</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
      
          <!-- Tarjeta 3 -->
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://www.bhphotovideo.com/images/images2500x2500/logitech_981_000719_g_pro_gaming_headset_1418048.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Audifonos</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <!-- Tarjeta 4 -->
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://th.bing.com/th/id/OIP.ckNPhaxaCPkt7ALVAbonnwHaHa?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Monitores</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <!-- Tarjeta 5 -->
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://th.bing.com/th/id/R.0cc8556574e4e9f46d2a69f1851bf906?rik=MYd0oygW84E4Vg&pid=ImgRaw&r=0" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Impresoras</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <!-- Tarjeta 6 -->
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://cdn.pacifiko.com/image/cache/catalog/p/MTQ1MzQwYz_758-1000x1000.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Televisores</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <!-- Tarjeta 7 -->
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://th.bing.com/th/id/OIP.K5d_1-wdz9Mqpd-sZkqdNgHaHa?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Procesadores</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <!-- Tarjeta 8 -->
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://resources.claroshop.com/medios-plazavip/s2/11978/1454473/5eed2ea2589ba-a9uhjokhoh85dviq-1600x1600.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Fuentes de poder</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <!-- Tarjeta 9 -->
          <div class="col-md-4">
            <div class="card mb-4">
              <img src="https://th.bing.com/th/id/R.a0ea4ac9d55f229e8caf28e7f516386e?rik=xjChp%2fHLzu9pmg&pid=ImgRaw&r=0" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Motherboard</h5>
                <a href="#" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="container" style="margin-top: 20px;" id="listadoProductos">
<form action="home.php?tema=<?= $_GET['tema'] ?>#listadoProductos" method="POST">
<div class="row">
  <div class="col-7">
  </div>
  <div class="col-4">
    <select class="form-select form-select-sm" aria-label="Small select example" name="select_categoria">
    <option selected>menu de categorias</option>
    <?php foreach ($categorias as $c): ?>
    <option value="<?= $c['id'] ?>"><?= $c['titulo'] ?></option>
    <?php endforeach?>
    </select>
  </div>
  <div class="col-1" style="margin-top: 16px;">
    <input type="submit" class="btn btn-warning" value="Buscar">
  </div>
</div>
</form>
<div class="row productos">
<?php if (!empty($productos)): ?>
<?php foreach ($productos as $p): ?>
<div class="col-4">
  <div class="card">
    <img src="<?= htmlspecialchars($p['img']) ?>" class="card-img-top" alt="..." height="250px">
    <div class="card-body">
      <p class="card-text"><?= htmlspecialchars($p['titulo']) ?></p>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?= htmlspecialchars($p['id']) ?>">
        + Información
      </button>
    </div>
  </div>
</div>
<div class="modal fade" id="<?= htmlspecialchars($p['id']) ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><?= htmlspecialchars($p['titulo']) ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?= htmlspecialchars($p['descripcion']) ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php else: ?>
<div class="alert alert-danger" role="alert">
  No se encontraron productos.
</div>
<?php endif; ?>
</div>

</div>
</div>
</div>
