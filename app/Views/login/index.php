<?= $this->extend('template/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">login</h2>
                    <a href="/loginController/add" class="btn btn-success">Tambah</a>

                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col" class="text-center">username</th>
<th scope="col" class="text-center">password</th>
<th scope="col" class="text-center">hak_akses</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($login as $p) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td class="text-center"><?= $p["username"]; ?></td>
<td class="text-center"><?= $p["password"]; ?></td>
<td class="text-center"><?= $p["hak_akses"]; ?></td>

            <td class="text-center">
                <a href="/loginController/update/<?= $p["id"]; ?>" class="btn btn-warning">Edit</a>
                <a href="/loginController/detail/<?= $p["id"]; ?>" class="btn btn-success">Detail</a>
                <a href="/loginController/delete/<?= $p["id"]; ?>" class="btn btn-danger">Delete</a>
            </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>