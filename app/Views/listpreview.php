<?= $this->extend('layout/template'); ?>
<?= $this->section('kontenbebas'); ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url('assets/css/gaya.css') ?>">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-sm-flex align-items-center justify-content-between mb-5">
                <h1 class="h3 mb-0 text-gray-800">Daftar Preview</h1>
            </div>
        </div>
    </div>

    <body>

        <div class="container2">
            <div class="main-video">
                <video src="<?= base_url(); ?>/assets/upload/video4.mp4" muted controls></video>
                <footer>
                    <li>Konten Display Ruang Rapat Lantai 9</li>
                    <li><a href="/priviewdisplay/RR01" class="button btn-primary btn-md"><i class="fas fa-fw fa-door-open"></i> Preview </a></li>
                </footer>
            </div>

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

<?= $this->endSection(); ?>