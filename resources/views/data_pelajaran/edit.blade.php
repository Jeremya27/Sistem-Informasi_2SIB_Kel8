<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Pelajaran - Data Guru SLB Melati</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body style="background: lightgray">
    <!-- Navbar Data Guru SLB Melati -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #9dc183;">
        <a class="navbar-brand" href="#">
            <i class="fas fa-book mr-2"></i> DATA PELAJARAN
        </a>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h2 class="text-center mb-4">
                            <i class="fas fa-edit mr-2"></i> Edit Data Pelajaran
                        </h2>
                        <form action="{{ route('data_pelajaran.update', $data->id) }}" method="post">

                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label><strong>Pengenalan Huruf</strong></label>
                                <input type="varchar" class="form-control" name="p_huruf" value="{{ $data->p_huruf }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Pengenalan Angka</strong></label>
                                <input type="varchar" class="form-control" name="p_angka" value="{{ $data->p_angka }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Pengenalan Warna</strong></label>
                                <input type="varchar" class="form-control" name="p_warna" value="{{ $data->p_warna }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Pengenalan Kata</strong></label>
                                <input type="varchar" class="form-control" name="p_kata" value="{{ $data->p_kata }}" required>
                            </div>
                            <div class="form-group">
                                <label><strong>Pengenalan Matematika Dasar</strong></label>
                                <input type="varchar" class="form-control" name="p_mtk_dasar" value="{{ $data->p_mtk_dasar }}" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-2"></i> Update
                                </button>
                                <button type="reset" class="btn btn-warning">
                                    <i class="fas fa-sync-alt mr-2"></i> Reset
                                </button>
                                <a href="{{ route('data_pelajaran.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left mr-2"></i> Batal
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
