<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
            border-radius: 15px;
            overflow: hidden;
        }

        .card-header {
            background-color: #9dc183;
            color: #ffffff;
            font-weight: bold;
            text-align: center;
            padding: 20px;
        }

        .card-header i {
            margin-right: 10px;
        }

        .card-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #9dc183;
            border-color: #9dc183;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #88ab5a;
            border-color: #88ab5a;
        }

        .registration-link {
            text-align: center;
            margin-top: 15px;
        }

        .registration-link a {
            color: #007bff;
        }

        .registration-link a:hover {
            text-decoration: underline;
        }

        .login-text {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h3 class="login-text"><i class="fas fa-sign-in-alt"></i> Login</h3>
        </div>
        <div class="card-body">
            @if(session()->has('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

            <div class="registration-link">
                <p>Belum terdaftar? <a href="{{ route('register') }}">Daftar disini</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
