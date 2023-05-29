<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/priviewdisplay.css'); ?>">
<link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">

<div class="Container2">
    <div class="Content">
        <div class="Wrapper">
            <div class="RightContent">

                <head>
                    <script src="/assets/js/scroll.js"></script>
                </head>
                <div class="main-video">
                    <video src="/assets/upload/Aku Cinta Kau Dan Dia(720p).mp4" controls></video>
                </div>
                <div class="tabel" style="border-radius: 14px;">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead style="color :linen">
                                <tr bgcolor="indigo">
                                    <th>
                                        <p align="center"> No.</p>
                                    </th>
                                    <th>
                                        <p align="center"> Judul</p>
                                    </th>
                                    <th>
                                        <p align="center"> Ruang</p>
                                    </th>
                                    <th>
                                        <p align="center"> Tanggal Mulai</p>
                                    </th>
                                    <th>
                                        <p align="center"> Tanggal Selesai</p>
                                    </th>
                                    <th>
                                        <p align="center"> Jam Mulai</p>
                                    </th>
                                    <th>
                                        <p align="center"> Jam Selesai</p>
                                    </th>

                                </tr>
                            </thead>
                            <?php $nomor = 1 ?>
                            <tbody>
                                <?php foreach ($getjadwal as $wkwk) : ?>
                                    <tr>
                                        <td>
                                            <center> <?= $nomor++; ?> </center>
                                        </td>
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

            <div class="LeftContent">

                <h1 class="d-flex align-items-center justify-content-center" style="animation: cubic-bezier(0.165, 0.84, 0.44, 1);"><b><?= $Meetingroom[0]->Nama_Ruangan; ?></b></h1>

                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">

                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

                </head>

                <body>
                    <div class="bs-example">
                        <div class='col-md-6'>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="/assets/img/pic1.jpg" alt="First Slide">
                                        <div class="carousel-caption">
                                            <h3>First slide label</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="/assets/img/pic2.jpg" alt="Second Slide">
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="/assets/img/pic3.jpg" alt="Third Slide">
                                        <div class="carousel-caption">
                                            <h3>Third slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel controls -->
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </body>

                </html>
            </div>
        </div>
    </div>
</div>