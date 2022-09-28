<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentoring Asset</title>
    <link rel="stylesheet" href="styleform.css">
    <style>
        section {
            display: block !important;
        }

        .kolom h2 {
            margin-top: -20px;
            text-align: center;
            font-size: 18px;
        }

        .data p {
            margin-top: -20px;
        }

        table {
            width: 100%;
            margin: auto;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid brown;
            padding: 5px;
        }

        th {
            background: #E13838;
        }

        .komentar p {
            margin-top: 10px;
            padding: 1px;
        }

        .edit {
            margin-top: -135px;
            margin-left: 400px;
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

            <div class="edit">
                <ul>
                    <li><a href="" class="tbl-biru">Input</a></li>
                    <li><a href="" class="tbl-biru">Delete</a></li>
                </ul>
            </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <div class="kolom">
                <h2>PROGRESS PENANGANAN PERMASALAHAN ASET TELKOM</h2>
                <h2>(LITIGASI, NON LITIGASI, BERPOTENSI BERMASALAH)</h2>
            </div>
        </section>

        <!-- untuk form -->

        <div class="wrapper">
            <div class="data">
                <p>Unit : </p>
                <p>Penanggung Jawab : </p>
                <p>Periode Mentoring : </p>
            </div>

            <table>
                <th>No.</th>
                <th>Permasalahan & Kategori Permasalahan</th>
                <th>Ringkasan Permasalahan</th>
                <th>Progress Penanganan & Rencana Tindak Lanjut</th>
                <th>Isu Penting</th>
                <tr>
                    <td>1.</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <div class="komentar">
                <p>* Berdasarkan Prioritas</p>
                <p>** Dilengkapi kronologis (di lembar terpisah sebagaimana contoh format terlampir), menjadi
                    satu kesatuan dengan laporan ini
                </p>
                <p>*** Dilengkapi dengan waktu dan/atau rencana waktu (Time Plan)</p>
            </div>

        </div>

        <section id="home">
            <div class="kolom">
                <h2>KRONOLOGIS PERMASALAHAN</h2>
            </div>
        </section>

        <table>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Tanggal</th>
                <th rowspan="2">Perihal dan keterangan</th>
                <th colspan="2">Dokumen Pendukung</th>
                <th colspan="2">Status Dokumen</th>
            </tr>
            <tr>
                <th>Ada</th>
                <th>Tidak ada</th>
                <th>Asli</th>
                <th>Copy</th>
            </tr>
            <tr>
                <td>1.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <div class="komentar">
            <p>* kronologis dibuat per permasalahan (case) aset</p>
            <p>** Diberi tanda centang (√) di salah satu kolom "Ada"/"Tidak Ada"
            </p>
            <p>*** Diberi tanda centang (√) di salah satu kolom "Asli"/"Copy"</p>
        </div>
    </div>
</body>

</html>