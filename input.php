<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentoring Asset</title>
    <link rel="stylesheet" href="styledokumen.css">
    <style>
        .kolom h2 {
            font-size: 22px;
            margin-left: 170px;
            margin-bottom: -20px;
        }

        .wrap {
            width: 100%;
            margin: auto;
            color: white;
            font-family: 'Open Sans', sans-serif;
            background-color: #E13838;
            border-radius: 10px;

        }

        .container {
            padding: 20px;
        }

        table {
            padding-bottom: 2px;
        }

        table td {
            padding: 5px;
        }

        button {
            width: 50px;
            font-family: 'Open Sans', sans-serif;
            height: 30px;
            background-color: #808080;
            border-radius: 7px;
        }
    </style>
</head>

<body>
    <nav>
        <div class="wrapper">
            <a class="navbar-brand" href="#"><img src="/MentoringAsset/images/logo.png" alt="Lights" style="width:12%"></a>
            <div class="menu">
                <ul>
                    <li><a href="" class="tbl-biru">Back</a></li>
                    <li><a href="" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="kolom">
                <h2>Format Monitoring Progress Penanganan Permasalahan Aset</h2>
            </div>
        </section>

        <div class="wrap">
            <div class="container">
                <form action="" method="">
                    <table>
                        <tr>
                            <td>Unit</td>
                            <td>:</td>
                            <td><input type="text" name="unit"></td>
                        </tr>
                        <tr>
                            <td>Penanggung Jawab</td>
                            <td>:</td>
                            <td><input type="text" name="penanggung_jawab"></td>
                        </tr>
                        <tr>
                            <td>Periode Monitoring</td>
                            <td>:</td>
                            <td><input type="date" name="periode_monitoring"></td>
                        </tr>
                        <tr>
                            <td>Permasalahan & Kategori Permasalahan</td>
                            <td>:</td>
                            <td><textarea name="permasalahan_&_kategori_permasalahan"></textarea></td>
                        </tr>
                        <tr>
                            <td>Ringkasan Permasalahan</td>
                            <td>:</td>
                            <td><textarea name="ringkasan_permasalahan"></textarea></td>
                        </tr>
                        <tr>
                            <td>Progress Penanganan & Rencana Tindak Lanjut</td>
                            <td>:</td>
                            <td><textarea name="progress_penanganan_&_rencana_tindak_lanjut"></textarea></td>
                        </tr>
                        <tr>
                            <td>Isu Penting</td>
                            <td>:</td>
                            <td><textarea name="isu_penting"></textarea></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal"></td>
                        </tr>
                        <tr>
                            <td>Perihal dan keterangan</td>
                            <td>:</td>
                            <td><textarea name="perihal_dan_keterangan"></textarea></td>
                        </tr>
                        <tr>
                            <td>Dokumen Pendukung</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="dp" value="ada">Ada
                                <input type="radio" name="dp" value="tidak_ada">Tidak Ada
                            </td>
                        </tr>
                        <tr>
                            <td>Status Dokumen</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="sd" value="asli">Asli
                                <input type="radio" name="sd" value="copy">Copy
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit" name="kirim">Kirim</button>
                                <button type="reset" name="reset">Batal</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

</body>

</html>