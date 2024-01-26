<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body style="background: lightgray">

    <!-- Navbar Data Guru SLB Melati -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9dc183;">
        <a class="navbar-brand" href="#">
            <i class="fas fa-chalkboard-teacher mr-2"></i> DATA SISWA SLB MELATI
        </a>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h2 class="text-center mb-4">
                            <i class="fas fa-user-plus mr-2"></i> Tambah Data Siswa
                        </h2>
                        <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama" class="font-weight-bold">Nama</label>
                                <input type="varchar" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                    placeholder="Masukkan Nama">
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kelas" class="font-weight-bold">Kelas</label>
                                <input type="varchar" class="form-control @error('kelas') is-invalid @enderror"
                                    name="kelas" placeholder="Masukkan Kelas">
                                @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin" class="font-weight-bold">Gender</label>
                                <input type="varchar" class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin" placeholder="Masukkan Gender">
                                @error('jenis_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="font-weight-bold">Alamat</label>
                                <input type="varchar" class="form-control @error('alamat') is-invalid @enderror"
                                    name="alamat" placeholder="Masukkan Alamat">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-md btn-success">
                                    <i class="fas fa-save mr-2"></i>SIMPAN
                                </button>
                                <button type="reset" class="btn btn-md btn-warning">
                                    <i class="fas fa-sync-alt mr-2"></i>RESET
                                </button>
                                <a href="{{ route('guru1.index') }}" class="btn btn-md btn-secondary">
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
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
</body>

</html>
