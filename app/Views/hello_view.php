<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    <h1>HELLO</h1>
    <?= dd($getjadwal); ?>
    <form action="" method="get">
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" class="form-control" name="x" placeholder="" value="">
        </div>
        <div class="form-group">
            <label>jam rapat</label>
            <input type="time" class="form-control" name="y" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    <?php
    $tglinput = strtotime("2021-12-01");
    $jaminput = strtotime("10:35"); //1638131520
    $tglstart = strtotime($getjadwal[0]['startTanggal_rapat']); //2021-11-29, 
    $start = strtotime($getjadwal[0]['start']); // 14:31, 1638165600
    $end = strtotime($getjadwal[0]['end']); //  6:31, 1638138660
    $diff   = $end - $start; //7200
    $b = $diff + $start; //7200 + 1638165600 = 1638138660

    if ($tglinput == $tglstart) {
        echo "sama jadi validasi lagi!! ";
        if ($jaminput == $start) {
            echo "sama juga tolak tolak, ";
            if ($jaminput < $end) {
                echo "ga bisa gaes, sory ya.. cari jam lain gih, ";
            }
        } else {
            echo "sama tanggal tapi sudah lewat dari jam berakhir rapat sebelumnya nya, jadi gpp ";
        }
    } else {
        echo "beda jadi save aja gpp, ";
    }

    $jam    = floor($diff / (60 * 60));
    $tglstartjamend = $tglstart + ($start + $diff); // 1638165600 + (1638131460+7200)  = 3276304260
    ?>
</body>

</html>