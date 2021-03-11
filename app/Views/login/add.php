<?= $this->extend('template/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="my-3 ml-4">Form Tambah Data login</h2>

                    <form action="/loginController/save" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        
                <div class="form-group row">
                    <label for="username" class="col-sm-2 ml-4 col-form-label">username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= ($validation->hasError("username")) ? "is-invalid" : ""; ?>" id="username" name="username" value="<?= old("username"); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("username"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 ml-4 col-form-label">password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= ($validation->hasError("password")) ? "is-invalid" : ""; ?>" id="password" name="password" value="<?= old("password"); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("password"); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hak_akses" class="col-sm-2 ml-4 col-form-label">hak_akses</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= ($validation->hasError("hak_akses")) ? "is-invalid" : ""; ?>" id="hak_akses" name="hak_akses" value="<?= old("hak_akses"); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError("hak_akses"); ?>
                        </div>
                    </div>
                </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary ml-4">Tambah login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>