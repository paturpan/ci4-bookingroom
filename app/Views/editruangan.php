<?= $this->extend('layout/template'); ?>
<?= $this->section('kontenbebas'); ?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mt-2">FORM UPDATE / UBAH DATA</h1>
                <!-- /.container-fluid -->
                <!-- // Display Response -->
                <?php
                if (session()->has('message')) {
                ?>
                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                <?php
                }
                ?>
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <form action="/cruddaftarruang/update/<?= $result['id'] ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class=" form-group">
                                <label>Kode Ruangan</label>
                                <input type="text" class="form-control" id="Kode_Ruangan" name="Kode_Ruangan" placeholder="" value="<?= $result['Kode_Ruangan'] ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Ruang Rapat</label>
                                <input type="text" class="form-control" id="Nama_Ruangan" name="Nama_Ruangan" placeholder="" value="<?= $result['Nama_Ruangan'] ?>">
                            </div>

                            <button type="submit" class="btn btn-primary my-4 d-inline">SUBMIT DATA</button>
                        </form>
                        <a class="btn btn-success btn-md d-inline" href="/daftarruang">Cancel</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
<?= $this->endSection(); ?>