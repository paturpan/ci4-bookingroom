<?= $this->extend('layout/template'); ?>
<?= $this->section('kontenbebas'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Jadwal Agenda Rapat</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Report</a>
            </div>
        </div>
    </div>
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
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <a href="/jadwalagenda" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#addModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Tambah Jadwal</span>
                </a>

                <form class="d-none d-sm-inline-block form-inline ml-md-5 my-2 my-md-0 mw-100 navbar-search" method="GET" action="#">
                    <div class="input-group ">
                        <input type="text" name="keyword" class="form-control bg-white border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Ruang</th>
                            <th>Tanggal Mulai Rapat</th>
                            <th>Tanggal Selesai Rapat </th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomor = 1 + (4 * ($currentpage - 1)); ?>
                        <?php foreach ($getAgendamodel as $wkwk) : ?>
                            <tr>
                                <td><?= $nomor++; ?></td>
                                <td><?= $wkwk['Judul']; ?></td>
                                <td><?= $wkwk['Ruang']; ?></td>
                                <td><?= $wkwk['startTanggal_rapat']; ?></td>
                                <td><?= $wkwk['endTanggal_rapat']; ?></td>
                                <td><?= $wkwk['start']; ?></td>
                                <td><?= $wkwk['end']; ?></td>
                                <td>
                                    <a href="/edit/<?= $wkwk['id']; ?>" class="badge badge-secondary btn-sm">Edit</a>

                                    <a href="/crudjadwal/hapus/<?= $wkwk['id']; ?>" class="badge badge-warning btn-sm" onclick="confirm ('Apakah Judul <?= $wkwk['Judul']; ?> ini yang mau dihapus?')">Hapus</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?= $pager->links('halaman', 'bootstrap_pagination'); ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal Add Product-->
<form action="/crudjadwal/save" method="post">
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Agenda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= csrf_field(); ?>

                    <div class="form-group">
                        <label>Judul / Nama Rapat</label>
                        <input type="text" class="form-control" name="Judul" placeholder="Judul / Pembahasan Rapat">
                    </div>

                    <div class="form-group">
                        <label for="Ruang">Pilih Ruangan :</label>
                        <select name="Ruang" id="Ruang" class="form-control">
                            <?php foreach ($listbox as $gigi) : ?>
                                <option value="<?php echo $gigi['Nama_Ruangan']; ?>"><?php echo $gigi['Nama_Ruangan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Start Meeting Date</label>
                        <input type="date" class="form-control" name="startTanggal_rapat" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>End Meeting Date</label>
                        <input type="date" class="form-control" name="endTanggal_rapat" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Jam Mulai</label>
                        <input type="time" class="form-control" name="start" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Jam Selesai</label>
                        <input type="time" class="form-control" name="end" placeholder="">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Add Product-->

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">haah serius kamu mau hapus data ini?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Serius nih? Data yang dihapus tidak bisa di kembalikan loh</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="">Sikat</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>