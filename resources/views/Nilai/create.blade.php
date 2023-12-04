<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstr
ap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('nilaisiswa.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">ID Data</label>

                                <input type="varchar" class="form-control @error('cost') is-invalid @enderror"
                                    name="id_data" placeholder="Isi ID Data">

                                <!-- error message untuk cost -->
                                @error('id_data')
                                <div class="alert alert-danger

mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                            <div class="form-group">
                                <label class="font-weight-bold">ID Pelajaran</label>

                                <input type="varchar" class="form-control @error('cost') is-invalid @enderror"
                                    name="id_pelajaran" placeholder="Isi ID Pelajaran">

                                <!-- error message untuk cost -->
                                @error('id_pelajaran')
                                <div class="alert alert-danger

mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi</label>

                                <input type="varchar" class="form-control
@error('due_date') is-invalid @enderror" name="deskripsi" placeholder="Deskripsi">
<!-- error message untuk due_date

-->

@error('deskripsi')
<div class=" alert alert-danger mt-2">

                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <button type="submit" class="btn btn-md

btn-primary">SIMPAN</button>

                    <button type="reset" class="btn btn-md

btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.
js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap
.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('description');
    </script>
</body>

</html>