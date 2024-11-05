<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mybiodata</title>
    <!-- CSS Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>
    <!-- menu -->
    <?php include "includes/navbar.php" ?>
    <!-- ./menu -->

    <!-- konten -->
    <div class="container mt-3">
        <?php include "konten.php" ?>
    </div>
    <!-- ./konten -->
    <footer>
        <div class="fixed-bottom text-bg-dark p-3 text-center mt-5 bg-success">
            Wasis Wibisono @ <?= date("Y") ?>
        </div>
    </footer>
    <script src="assets/jquery/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        new DataTable('#example');
    </script>
</body>