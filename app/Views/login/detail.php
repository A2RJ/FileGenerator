<?= $this->extend('template/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h2>Detail login</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>id":</b><?= $login["id"];?></li>
<li class="list-group-item"><b>username":</b><?= $login["username"];?></li>
<li class="list-group-item"><b>password":</b><?= $login["password"];?></li>
<li class="list-group-item"><b>hak_akses":</b><?= $login["hak_akses"];?></li>

                </ul>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>