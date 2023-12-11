<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Data Pelajaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body style="background: lightgray">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9dc183;">
        <a class="navbar-brand" href="#">
            <i class="fas fa-book mr-2"></i> DATA PELAJARAN
        </a>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h2 class="text-center mb-4">
                            <i class="fas fa-book mr-2"></i> Tambah Data Pelajaran
                        </h2>
                        <form action="{{ route('data_pelajaran.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="p_huruf" class="font-weight-bold">Pengenalan huruf</label>
                                <input type="text" class="form-control @error('p_huruf') is-invalid @enderror"
                                    name="p_huruf" placeholder="Pengenalan huruf">
                               
                                @error('p_huruf')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="p_angka" class="font-weight-bold">Pengenalan angka</label>
                                <input type="text" class="form-control @error('p_angka') is-invalid @enderror"
                                    name="p_angka" placeholder="Pengenalan angka">
                                
                                @error('p_angka')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="p_warna" class="font-weight-bold">Pengenalan warna</label>
                                <input type="text" class="form-control @error('p_warna') is-invalid @enderror"
                                    name="p_warna" placeholder="Pengenalan warna">
                                <!-- error message untuk Pengenalan warna -->
                                @error('p_warna')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="p_kata" class="font-weight-bold">Pengenalan kata</label>
                                <input type="text" class="form-control @error('p_kata') is-invalid @enderror"
                                    name="p_kata" placeholder="Pengenalan kata">
                                <!-- error message untuk Pengenalan kata -->
                                @error('p_kata')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="p_mtk_dasar" class="font-weight-bold">Pengenalan matematika dasar</label>
                                <input type="text" class="form-control @error('p_mtk_dasar') is-invalid @enderror"
                                    name="p_mtk_dasar" placeholder="Pengenalan matematika dasar">
                                <!-- error message untuk Pengenalan matematika dasar -->
                                @error('p_mtk_dasar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-md btn-primary">
                                    <i class="fas fa-save mr-2"></i>SIMPAN
                                </button>
                                <button type="reset" class="btn btn-md btn-warning">
                                    <i class="fas fa-sync-alt mr-2"></i>RESET
                                </button>
                                <a href="{{ route('data_pelajaran.index') }}" class="btn btn-md btn-secondary">
                                    <i class="fas fa-arrow-left mr-2"></i>BATAL
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
