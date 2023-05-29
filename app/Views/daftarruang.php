<?= $this->extend('layout/template'); ?>
<?= $this->section('kontenbebas'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Daftar Perangkat</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Report</a>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">

        <!-- tombol tambah dan search -->
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#addModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Tambah Jadwal</span>
                </a>

                <form class="d-none d-sm-inline-block form-inline ml-md-3 my-2 my-md-0 mw-100 navbar-search ">
                    <div class="input-group ">
                        <input type="text" class="form-control bg-lightsalmon border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
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

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($ruangmodel as $yaya) : ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?= $yaya['Kode_Ruangan']; ?></td>
                                <td><?= $yaya['Nama_Ruangan']; ?></td>
                                <td>
                                    <a href="/editruangan/<?= $yaya['id']; ?>" class="ml-2 mr-2 badge badge-secondary btn-sm">Edit</a> |

                                    <form action="/cruddaftarruang/hapus/<?= $yaya['id']; ?>" method="POST" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="ml-2 badge badge-danger btn" onclick="return confirm('Apakah data ini benar mau dihapus ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal Add Product-->
<form action="/cruddaftarruang/save" method="post">
    <?= csrf_field(); ?>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Daftar Ruangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" name="id" placeholder="id manual dulu yuk">
                    </div>

                    <div class="form-group">
                        <label>Kode_Ruangan Rapat</label>
                        <input type="text" class="form-control" name="Kode_Ruangan" placeholder="Kode Untuk Ruang Rapat">
                    </div>


                    <div class="form-group">
                        <label>Nama Ruang Rapat</label>
                        <input type="text" class="form-control" name="Nama_Ruangan" placeholder="Nama Ruang Rapat">
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

<?= $this->endSection(); ?>