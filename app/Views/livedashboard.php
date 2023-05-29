<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('/assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('/assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <style>
            body {
                font-family: 'Noto Sans', sans-serif;
            }
        </style>
        <div class="row">
            <div class="col">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Jadwal Agenda Rapat</h1>
                </div>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
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
                            </tr>
                        </thead>

                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php foreach ($getjadwal as $wkwk) : ?>
                                <tr>
                                    <td><?= $nomor++; ?></td>
                                    <td><?= $wkwk['Judul']; ?></td>
                                    <td><?= $wkwk['Ruang']; ?></td>
                                    <td><?= $wkwk['startTanggal_rapat']; ?></td>
                                    <td><?= $wkwk['endTanggal_rapat']; ?></td>
                                    <td><?= $wkwk['start']; ?></td>
                                    <td><?= $wkwk['end']; ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        let scrollerID;
        let paused = true;
        let speed = 3; // 1 - Fast | 2 - Medium | 3 - Slow
        let interval = speed * 20;

        function startScroll() {
            let id = setInterval(function() {
                window.scrollBy(0, 2);
                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                    // Reached end of page
                    stopScroll();
                }
            }, interval);
            return id;
        }

        function stopScroll() {
            clearInterval(scrollerID);
        }

        document.body.addEventListener('keypress', function(event) {
            if (event.which == 13 || event.keyCode == 13) {
                // It's the 'Enter' key
                if (paused == true) {
                    scrollerID = startScroll();
                    paused = false;
                } else {
                    // stopScroll();
                    paused = true;
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                }
            }
        }, true);
    </script>
</body>