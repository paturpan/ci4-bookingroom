<?= $this->extend('layout/template'); ?>
<?= $this->section('kontenbebas'); ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url('assets/css/gaya.css') ?>">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <h1 class="h3 text-gray-800">Video Konten</h1>
            </div>
        </div>
    </div>

    <body>
        <div class="col">
            <div class="row">
                <a href="#" class="btn btn-info btn-icon-split mb-4" data-toggle="modal" data-target="#addModal">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus-circle"></i>
                    </span>
                    <span class="text">Tambah Video</span>
                </a>
            </div>
        </div>
        <div class="container2">
            <?php foreach ($getvideo as $lala) : ?>

                <div class="main-video">
                    <video src="<?= base_url(); ?>/assets/upload/<?= $lala["name"]; ?>" muted controls></video>
                    <footer>
                        <li><?= $lala["name"]; ?></li>
                        <li><a href="/media/hapus/<?= $lala["id"]; ?>" class="badge badge-danger btn-md" onclick="return confirm('Yakin mau dihapus ?')"><i class="fas fa-fw fa-trash"></i> Hapus</a></li>
                    </footer>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $pager->links('halaman', 'bootstrap_pagination'); ?>
    </body>
</div>
<script>
    var video = document.querySelectorAll('video')
    video.forEach(play => play.addEventListener('click', () => {
        play.classList.toggle('active');
        if (play.paused) {
            play.play();
        } else {
            play.paused();
            play.currentTime = 0;
        }
    }));
</script>

<!-- Modal Add Product-->
<form method="post" action="<?php echo base_url('media/uploadvideo'); ?>" enctype="multipart/form-data">
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