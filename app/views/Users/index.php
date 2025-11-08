<div class="container">
    <div class="row">
        <div class="col-6 mt-3">
            <br></br>
            <h3>Student List</h3>
            <ul class="list-group">
                <?php foreach ($data['users'] as $user) :  ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $user['username'] ?>
                        <a href="<?= BASEURL; ?>/Users/detail/<?= $user['id'] ?>" class="badge text-bg-info">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
