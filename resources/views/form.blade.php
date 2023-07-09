<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    <style>
        .center{
            margin: auto;
            width: auto;
            padding: 50px;
            padding-top: 50px;
            padding-left: 500px;
        }
    </style>
</head>
<body>
    <section id="basic-vertical-layouts">
        <div class="center">
            <div class="row match-height">
                <div class="col-md-6 col-12">
                    <div class="card">                      
                        <div class="card-header">
                            <h4 class="card-title">Form Rekomendasi Restoran</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ url('/form/store') }}" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Nama Lengkap</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="nama" placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="restoran">Nama Restoran</label>
                                                    <input type="text" id="restoran" class="form-control"
                                                        name="nama_restoran" placeholder="Nama Restoran">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat Restoran</label>
                                                    <input type="text" id="alamat" class="form-control"
                                                        name="alamat_restoran" placeholder="Alamat">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Harga</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="Harga" placeholder="Harga">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">Lokasi</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="Lokasi" placeholder="Lokasi">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Menu</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="Menu" placeholder="Menu">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Pelayanan</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="Pelayanan" placeholder="Pelayanan">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Jarak</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="Jarak" placeholder="Jarak">
                                                </div>
                                            </div>
                            
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1"><a href="{{ url('/') }}">Kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
    </div>
        </section>
    <!-- // Basic Vertical form layout section end -->
    </body>
</html>