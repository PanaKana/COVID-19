<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi COVID 19</title>
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin"
        rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="http://cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel="stylesheet" type="text/css">

    <!-- Core stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/pixeladmin.min.css" rel="stylesheet" type="text/css">
    <link href="css/widgets.min.css" rel="stylesheet" type="text/css">

    <!-- Theme -->
    <link href="css/themes/clean.min.css" rel="stylesheet" type="text/css">

    <!-- Landing page CSS -->
    <link href="css/landing.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar px-navbar">
        <div class="container">
            <div class="navbar-header">
                <a href="#home" class="scroll-to navbar-brand">Informasi COVID 19</a>
            </div>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"
                aria-expanded="false"><i class="navbar-toggle-icon"></i></button>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#jumlahpasien" class="scroll-to">JUMLAH PASIEN</a></li>
                    <li><a href="#dataprov" class="scroll-to">JUMLAH PASIEN TIAP PROVINSI</a></li>
                    <li><a href="#gejala" class="scroll-to">GEJALA</a></li>
                    <li><a href="#telp" class="scroll-to">TELEPON DAN HOTLINE</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero block -->

    <a class="position-relative" name="home"></a>
    <div id="landing-hero" class="text-xs-center clearfix">
        <div class="container">
            <!-- Header -->
            <h1 class="font-weight-semibold">Pusat Informasi COVID-19</h1>
            <h2 class="font-weight-light">
                Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia.
                Beberapa jenis
                coronavirus diketahui menyebabkan infeksi saluran nafas pada manusia mulai dari batuk pilek hingga yang
                lebih serius
                seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS).
                Coronavirus jenis baru
                yang ditemukan menyebabkan penyakit COVID-19.
            </h2>

            <!-- Buttons -->
            <div>

            </div>

            <!-- App sample -->
            <div class="sample">
                <img src="assets/img/sample-img.png" alt="" class="sample-img">
                <img src="assets/img/sample-win.png" alt="" class="sample-win">
            </div>
        </div>
    </div>

    <!-- Content -->

    <a class="position-relative" name="jumlahpasien"></a>
    <div class="landing-section landing-features-grid bg-white b-y-1">
        <div class="container">
        <h1 align="center"><b>Jumlah Pasien COVID 19</b></h1>
            <canvas id="chart-doughnut" width="400" height="200"></canvas>
            <h2>Total Pasien : {{$jumlah}}</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-row">
                            <div class="box-cell p-x-3 p-y-1 bg-success darken">
                                <div class="pull-xs-left font-weight-semibold font-size-12">PASIEN SEMBUH</div>
                                <div class="pull-xs-right font-size-12">
                                    {{number_format($data[0]['sembuh'] / $jumlah * 100, 2)}}%</div>
                            </div>
                        </div>
                        <div class="box-row">
                            <div class="box-cell p-x-3 p-y-2 bg-success">
                                <img src="img/smile.png" width="40" height="40" align="left">
                                <div class="pull-xs-right font-weight-semibold font-size-24">{{$data[0]['sembuh']}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="box-row">
                            <div class="box-cell p-x-3 p-y-1 bg-warning darken">
                                <div class="pull-xs-left font-weight-semibold font-size-12">PASIEN POSITIF</div>
                                <div class="pull-xs-right font-size-12">
                                    {{number_format(str_replace(',','',$data[0]['positif']) / $jumlah * 100, 2)}}%</div>
                            </div>
                        </div>
                        <div class="box-row">
                            <div class="box-cell p-x-3 p-y-2 bg-warning">
                                <img src="img/sad.png" width="40" height="40" align="left">
                                <div class="pull-xs-right font-weight-semibold font-size-24">{{$data[0]['positif']}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box">
                        <div class="box-row">
                            <div class="box-cell p-x-3 p-y-1 bg-danger darken">
                                <div class="pull-xs-left font-weight-semibold font-size-12">PASIEN MENINGGAL</div>
                                <div class="pull-xs-right font-size-12">
                                    {{number_format($data[0]['meninggal'] / $jumlah * 100, 2)}}%</div>
                            </div>
                        </div>
                        <div class="box-row">
                            <div class="box-cell p-x-3 p-y-2 bg-danger">
                                <img src="img/dead.png" width="40" height="40" align="left">
                                <div class="pull-xs-right font-weight-semibold font-size-24">{{$data[0]['meninggal']}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <a class="position-relative" name="dataprov"></a>
                    <h2>Data Pasien Tiap Provinsi</h2>

                   <div class="table-primary">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Provinsi</th>
                                <th>Positif</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($dataprov); $i++) <tr>
                                <td>{{$dataprov[$i]['attributes']['FID']}}</td>
                                <td>{{$dataprov[$i]['attributes']['Provinsi']}}</td>
                                <td>{{$dataprov[$i]['attributes']['Kasus_Posi']}}</td>
                                <td>{{$dataprov[$i]['attributes']['Kasus_Semb']}}</td>
                                <td>{{$dataprov[$i]['attributes']['Kasus_Meni']}}</td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                </div>
            
                <a class="position-relative" name="gejala"></a>
            <div class="row">\
                <h2>Gejala Covid-19</h2>
                    <div class="panel">
                        <div class="panel-body">
                            <p align="left" style="font-size:130%;">
                                Gejala awal infeksi virus Corona atau COVID-19 bisa berupa gejala flu, seperti demam,
                                pilek, batuk kering, sakit
                                tenggorokan, dan sakit kepala. Setelah itu, gejala bisa memberat. Pasien bisa mengalam
                                demam tinggi, batuk berdahak
                                bahkan berdarah, sesak napas, dan nyeri dada. Gejala-gejala tersebut muncul ketika tubuh
                                bereaksi melawan virus Corona.<br>
                                Menurut penelitian, gejala COVID-19 muncul dalam waktu 2 hari sampai 2 minggu setelah terpapar virus Corona.
                                <br>
                                Namun, secara umum ada 3 gejala umum yang bisa menandakan seseorang terinfeksi virus
                                Corona, yaitu:

                                <ol align="left" style="font-size: 130%;">
                                    <li><b>Demam (suhu tubuh di atas 38 derajat Celsius)</b></li>
                                    <li><b>Batuk</b></li>
                                    <li><b>Sesak napas</b></li>
                                </ol>

                            </p>
                        </div>
                    </div>

                
                <a class="position-relative" name="telp"></a>
                <h2>Telepon Dan Hotline</h2>
                    <div class="panel">
                        <div class="panel-title">Telepon Darurat</div>
                        <div class="panel-body">
                            <ul align="left" style="font-size: 130%;">
                                <li><b>081113339900 (Via Whatsapp)</b><a href="https://wa.me/6281113339900"><br><img src="img/wabutton.png" alt="" height="75" width="227"></a></li>
                                <li><b>119</b><br><a href="tel:119"><img src="img/callbutton.png" alt="" height="60" width="270"></a></li>
                            </ul>
                        </div>
                    </div>
            </div>

        </div>
    </div>

    <!-- Footer -->

    <div class="px-footer">
        <div class="container p-t-3">
            <div class="row">

            </div>

            <hr>

            <span class="text-muted">Copyright © 2020 PanaKana Web Dev.</span>
        </div>
    </div>

    <!-- ==============================================================================
  |
  |  SCRIPTS
  |
  =============================================================================== -->

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Core scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pixeladmin.min.js"></script>

    <!-- Landing page dependencies -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/lazysizes.min.js"></script>

    <!-- Landing page JS -->
    <script src="js/landing.js"></script>

    <script>
        $(function() {
        $('#datatables').dataTable({
            "pageLength": 15
        });
        $('#datatables_wrapper .table-caption').text('Data Pasien Tiap Provinsi');
        $('#datatables_wrapper .dataTables_filter input').attr('placeholder', 'Cari Provinsi..');
      });
    </script>

    <script>
        $(function() {
        var data = {
          labels: [ 'Sembuh', 'Positif', 'Meninggal' ],
          datasets: [{
            data:                 [ {{$data[0]['sembuh']}}, {{str_replace(',', '', $data[0]['positif'])}}, {{$data[0]['meninggal']}} ],
            backgroundColor:      [ '#4BC0C0', '#FFCE56', '#A64452' ],
            hoverBackgroundColor: [ '#4BC0C0', '#FFCE56', '#A64452' ],
          }],
        };

    
        new Chart(document.getElementById('chart-doughnut').getContext("2d"), {
          type: 'doughnut',
          data: data,
        });
      });
    </script>

</html>