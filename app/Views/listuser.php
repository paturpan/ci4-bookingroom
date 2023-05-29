<?= $this->extend('layout/template'); ?>

<?= $this->section('kontenbebas'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <h1 class="h3 mb-0 text-gray-800">List User</h1>
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
                <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#addModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Tambah User</span>
                </a>

                <form class="d-none d-sm-inline-block form-inline ml-md-5 my-2 my-md-0 mw-100 navbar-search" method="GET" action="#">
                    <div class="input-group ">
                        <input type="text" name="cari" class="form-control bg-white border-0 small" style="border:2px solid Violet" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
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
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php foreach ($getusermodel as $haha) : ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?= $haha->username; ?></td>
                                <td> <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editModal">Rubah password</a> </td>
                                <td><?= $haha->name; ?></td>
                                <td>
                                    <a href="/user/hapus/<?= $haha->username; ?>" class="badge badge-danger" onclick="return confirm ('Apakah username <?= $haha->username; ?> ini yang mau anda hapus')">Hapus</a>
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
<form action="<?= base_url(); ?>/register/process" method="post">
    <?= csrf_field(); ?>
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

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_conf" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_conf" name="password_conf">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
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

<form action="/cruddaftarruang/update" method="post">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Jadwal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Password Lama</label>
                        <input type="text" class="form-control" name="password" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" class="form-control" name="password" placeholder="">
                    </div>

                    <div class="form-group">
                        <label>Ketik Ulang Password Baru</label>
                        <input type="password" class="form-control" name="password" placeholder="">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="product_id" class="product_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Edit Product-->
<?= $this->endSection(); ?>