<?php

include 'function.php';
$nik = $_GET['nik'];
$user = query("SELECT * FROM user WHERE username = '$nik'");
$id = $user['id_unit'];
$idp = query("SELECT * FROM periode WHERE id_unit = '$id'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Asset</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .box-laporan {
            font-size: 25px;
        }

        .box-laporan ul li {
            color: #f98989;
        }

        .box-laporan ul li a {
            text-decoration: none;
            color: #E13838 !important;
        }

        .box-laporan ul li a:hover {
            color: #f98989 !important;
        }

        .data-item a.create {
            background: #E13838;
            border-radius: 20px;
            border: none;
            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 30px;
        }

        .data-item a.create:hover {
            background: #f98989;
        }

        table {
            border-collapse: collapse;
            width: 1000px;
            margin: 10px auto;
        }

        table th {
            background: #E13838;
            color: white;
            font-weight: 500;
            border: 1px solid black;
            text-align: center !important;
            font-size: 18px;
            font-weight: 600;
            font-family: "Cambria", Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        table td {
            border: 1px solid black;
            text-align: center;
            font-family: "Cambria", Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        table a {
            font-family: "Cambria", Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-decoration: none;
            color: #E13838;
            font-size: 18px;
            margin: 5px 10px;
            text-align: left !important;
        }

        table td {
            color: #E13838;
            font-size: 18px;
        }

        table a:hover {
            text-decoration: none;
            color: #f98989;
        }

        .form-inline {
            width: 500px;
            margin: 10px auto;
        }

        button.search {
            background: white;
            border: 2px #E13838 solid;
            outline: none;
            color: #E13838;
            font-weight: 500;
            border-radius: 10px;
        }

        button.search:hover {
            background: #E13838;
            color: white;
        }
    </style>
</head>

<body>

    <section class="data" style="background-image: url(foto/bg8.png); background-size: cover; background-repeat: no-repeat; background-position: 50%; width: 100%; min-height: 100vh;">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="navbar-header">
                <img src="foto/logo.png" alt="">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="name nav-item">
                        <a href="logout.php" class="btn" aria-hidden="true">Sign Out</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="data-item">
            <div class="header" style="width: 100%">
                <center>
                    <h1 style="color: #e13838; font-size: 60px; font-weight: bold;padding-top: 120px">Laporan Asset</h1>
                </center>
            </div>
            <center><a href="create.php?nik=<?php echo $nik ?>" class="create" aria-hidden="true">Create Data</a></center>
            <form class="form-inline" method="POST" action="">
                <div class="form-group row">
                    <label for="inputBulan" class="col-sm-2 col-md-2 col-lg-1 col-form-label">Bulan</label>
                    <div class="col-sm-10 col-md-4 col-lg-3">
                        <select name="bulan" id="inputBulan" class="form-control">
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10" selected="">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputTahun" class="col-sm-2 col-md-2 col-lg-1 col-form-label">Tahun</label>
                    <div class="col-sm-10 col-md-4 col-lg-3">
                        <select name="tahun" id="inputTahun" class="form-control">
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022" selected="">2022</option>
                            <option value="2020">2023</option>
                            <option value="2021">2024</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-md-2 col-lg-1 col-form-label"></label>
                    <div class="col-sm-10 col-md-4 col-lg-3">
                        <button class="btn search btn-primary" name="search">Search</button>
                    </div>
                </div>
            </form>
            <div class="box-laporan">
                <br>

                <table>
                    <tr>
                        <th>No</th>
                        <th>Laporan</th>
                    </tr>
                    <tr>
                        <?php include 'datarange.php' ?>
                    </tr>
                </table>

            </div>
        </div>
    </section>
</body>

</html>