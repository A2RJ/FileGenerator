<?= $this->extend('template/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="my-3 ml-4">Form update Data login</h2>

                    <form action="/index.php/loginController/saveUpdate" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $login["id"]; ?>"><div class="form-group row">
                            <label for="username" class="col-sm-2 ml-4 col-form-label">username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= ($validation->hasError("username")) ? "is-invalid" : ""; ?>" id="username" name="username" autofocus value="<?= (old("username")) ? old("username") : $login["username"] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError("username"); ?>
                                </div>
                            </div>
                        </div>
<div class="form-group row">
                            <label for="password" class="col-sm-2 ml-4 col-form-label">password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= ($validation->hasError("password")) ? "is-invalid" : ""; ?>" id="password" name="password" autofocus value="<?= (old("password")) ? old("password") : $login["password"] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError("password"); ?>
                                </div>
                            </div>
                        </div>
<div class="form-group row">
                            <label for="hak_akses" class="col-sm-2 ml-4 col-form-label">hak_akses</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= ($validation->hasError("hak_akses")) ? "is-invalid" : ""; ?>" id="hak_akses" name="hak_akses" autofocus value="<?= (old("hak_akses")) ? old("hak_akses") : $login["hak_akses"] ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError("hak_akses"); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary ml-4">update login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>