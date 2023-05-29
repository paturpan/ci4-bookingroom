<?= $this->extend('layout/template'); ?>
<?= $this->section('kontenbebas'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mt-2">FORM UPDATE / UBAH DATA</h1>
            <!-- /.container-fluid -->

            <!-- Default box -->
            <div class="card">
                <div class="card-header">

                    <form action="/crudjadwal/update/<?= $result['id'] ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class=" form-group">
                            <label>Judul / Nama Rapat</label>
                            <input type="text" class="form-control" id="Judul" name="Judul" placeholder="" value="<?= $result['Judul'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Ruang Rapat</label>
                            <input type="text" class="form-control" id="Ruang" name="Ruang" placeholder="" value="<?= $result['Ruang'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Start Meeting Date</label>
                            <input type="date" class="form-control" id="startTanggal_rapat" name="startTanggal_rapat" placeholder="" value="<?= $result['startTanggal_rapat'] ?>">
                        </div>

                        <div class="form-group">
                            <label>End Meeting Date</label>
                            <input type="date" class="form-control" id="endTanggal_rapat" name="endTanggal_rapat" placeholder="" value="<?= $result['endTanggal_rapat'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Jam Mulai</label>
                            <input type="time" class="form-control" id="start" name="start" placeholder="" value="<?= $result['start'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Jam Selesai</label>
                            <input type="time" class="form-control" id="end" name="end" placeholder="" value="<?= $result['end'] ?>">
                        </div>

                        <button type="submit" class="btn btn-primary my-4 d-inline">SUBMIT DATA</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>