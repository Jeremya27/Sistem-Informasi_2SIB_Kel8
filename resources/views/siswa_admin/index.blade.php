<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data siswa SLB Melati</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #9dc183;
            color: #ffffff !important;
        }

        .navbar-brand {
            font-weight: bold;
            text-align: center;
            width: 100%;
            font-size: 24px;
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .navbar-nav .nav-item .nav-link {
            color: #ffffff !important;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #ffffff;
            background-color: #6c757d;
        }

        .sidebar {
            background-color: #343a40;
            color: #ffffff;
            padding: 15px;
            height: 100vh;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            margin-bottom: 15px;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        .container {
            margin-top: 20px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .table th {
            background-color: #9dc183;
            color: #ffffff;
        }

        .table tbody tr {
            transition: background-color 0.3s;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body style="background: lightgray">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <i class="fas fa-chalkboard-teacher mr-2"></i>
            DATA SISWA SLB MELATI
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Tautan Logout dipindahkan ke sidebar -->
        </div>
    </nav>

    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user"></i> Profil
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru1.index') }}">
                            <i class="fas fa-database"></i> Data Guru SLB Melati
                        </a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('siswa_admin.index') }}">
                            <i class="fas fa-database"></i> Data Siswa SLB Melati
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('data_pelajaran_a.index') }}">
                            <i class="fas fa-book"></i> Data Pelajaran
                        </a>
                    </li>
                    <!-- Tambahkan tautan Logout di sini -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <a href="{{ route('siswa.create') }}" class="btn btn-md btn-success mb-3">
                                    <i class="fas fa-plus"></i> TAMBAH DATA SISWA
                                </a>

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="text-align: center;">Nama Siswa</th>
                                            <th scope="col" style="text-align: center;">Kelas Siswa</th>
                                            <th scope="col" style="text-align: center;">Gender Siswa</th>
                                            <th scope="col" style="text-align: center;">Alamat Siswa</th>
                                            <th scope="col" style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $siswa)
                                        <tr>
                                            <td style="text-align: center;">{{ $siswa->nama }}</td>
                                            <td style="text-align: center;">{{ $siswa->kelas_siswa }}</td>
                                            <td style="text-align: center;">{{ $siswa->jenis_kelamin }}</td>
                                            <td style="text-align: center;">{{ $siswa->alamat }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('siswa1.destroy', $siswa->id) }}" method="post">
                                                    <a href="{{ route('siswa1.edit', $siswa->id) }}" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-edit"></i> EDIT
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash"></i> HAPUS
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center">
                                    
                                            </td>                                           
                                        </tr>   
                                        <div class="alert alert-danger">
                                                    Data Siswa belum Tersedia.
                                                </div>                                       
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if(session()-> has('success'))
        toastr.success('{{ session('success ') }}', 'BERHASIL!');
        @elseif(session()-> has('error'))
        toastr.error('{{ session('error ') }}', 'GAGAL!');
        @endif
    </script>
</body>
</html>
