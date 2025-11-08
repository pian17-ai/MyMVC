<div class="container mt-5">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['user']['name'] ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['user']['username'] ?></h6>
    <p class="card-text"><?= $data['user']['email'] ?></p>
    <a href="<?= BASEURL; ?>/Users" class="card-link">Kembali</a>
  </div>
</div>
</div>