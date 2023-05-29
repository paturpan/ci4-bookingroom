<?= $this->extend('layout/template'); ?>

<?= $this->section('kontenbebas'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/galery.css') ?>">

<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">List gallery</h1>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#addModal">
        <span class="icon text-white-50">
            <i class="fas fa-plus-circle"></i>
        </span>
        <span class="text">Tambah Gambar</span>
    </a>

    <div class="gallery">
        <div class="row">
            <div class="item">
                <div class="card-columns">
                    <?php foreach ($getgaleri as $nono) : ?>
                        <div class="card">
                            <a href="assets/upload/<?= $nono["name"]; ?>" img class="card-img-top" data-fancybox="mygallery">
                                <img src="<?= base_url(); ?>/assets/upload/<?= $nono["name"]; ?>" alt="Card image cap"></a>
                            <div class="card-body">
                                <h5 class="card-title"><?= $nono["name"]; ?></h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <a href="/media/hapus/<?= $nono["id"]; ?>" class="badge badge-danger btn-md" onclick="return confirm('Yakin mau dihapus ?')">Hapus</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?= $pager->links('halaman', 'bootstrap_pagination'); ?>
            </div>
        </div>
    </div>

</div>
<!-- Modal Add Product-->
<form method="post" action="<?php echo base_url('media/upload'); ?>" enctype="multipart/form-data">
    <?= csrf_field(); ?>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Galery</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="name" class="form-label">name</label>
                        <input type="file" name="file" class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End Modal Add Product-->


<?= $this->endSection(); ?>