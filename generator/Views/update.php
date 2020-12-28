<?= $this->extend('template/template'); ?>

<?= $this->Section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="my-3 ml-4">Form update Data Variable</h2>

                    <form action="/index.php/VariableController/saveUpdate" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        UPDATE
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary ml-4">update Variable</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>