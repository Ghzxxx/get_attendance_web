<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Code Viewer</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        html {
            height: 100%;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            background-size: 200% 100%;
            animation: gradientAnimation 10s infinite;
            background: url("https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2018/11/dark-wallpapers.jpg"  )
            no-repeat center center;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 100% 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            max-width: 500px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            @if($qrCode)
                <img src="data:image/png;base64, {!! base64_encode($qrCode) !!}" alt="QR Code">
            @else
                <p>No QR Code available.</p>
            @endif
    
            <div class="btn-group">
                <a href="/dashboard" class="btn btn-primary">Kembali</a>
                <a href="{{ route('qrcode.show') }}" class="btn btn-success">Reload</a>
                
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
