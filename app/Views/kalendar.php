<script src="assets/js/evo-calendar.min.js"></script>

<!-- Add jQuery library (required) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

<!-- Add the evo-calendar.js for.. obviously, functionality! -->
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
<script>
    // Initialize evo-calendar in your script file or an inline <script> tag
    $(document).ready(function() {
        $('#calendar').evoCalendar({
            theme: 'Midnight Blue',
            calendarEvents: [
                <?php foreach ($getAgendamodel as $ddmm) : ?> {
                        id: "<?= $ddmm['id']; ?>", // Event's ID (required) ambil nanti dari db
                        name: "<?= $ddmm['Judul']; ?>", // Event name (required)
                        date: [
                            "<?= $ddmm['startTanggal_rapat']; ?>"
                        ], // Event date (required) ambil nanti dri db
                        description: "Ruang : <?= $ddmm['Ruang']; ?>" + "<br/>" + "Jam :  <?= $ddmm['start']; ?>",
                        everyYear: false,
                        type: "<?= $ddmm['warna']; ?>"
                    },
                <?php endforeach; ?> {
                    badge: "More 1 days", // Event badge (optional)
                    name: "<?= $getAgendamodel[3]['Judul']; ?>",
                    date: ["<?= $getAgendamodel[3]['startTanggal_rapat']; ?>",
                        "<?= $getAgendamodel[3]['endTanggal_rapat']; ?>"
                    ], // Date range
                    description: "Ruang : <?= $getAgendamodel[1]['Ruang']; ?>" + "<br/>" + "Jam :  <?= $getAgendamodel[1]['start']; ?>", // Event description (optional)
                    type: "event",
                    color: "#63d867" // Event custom color (optional)
                }
            ]
        })
    });
</script>

<link rel="stylesheet" href="assets/css/evo-calendar.min.css">
<link rel="stylesheet" href="assets/css/evo-calendar.midnight-blue.min.css">
<link rel="stylesheet" href="assets/css/calender.css">
<link href="/assets/css/sb-admin-2.min.css" rel="stylesheet">


<body>
    <div class="container">
        <div class="col">
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <h1 class="h3 mb-2 ml-2 text-gray-800">Kalendar</h1>
                <a class=" mr-3 btn btn-primary btn-md d-inline" href="/dashboard">back to home</a>
            </div>
            <div class="col">
                <div id="calendar"></div>
            </div>
            <div class="col sm-4">
                <!-- Footer -->
                <footer class="sticky-footer bg-lightblue">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; paturpan 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
        </div>
    </div>
</body>