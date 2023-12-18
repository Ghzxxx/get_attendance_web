<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
</head>
<body>
    <div >
        {{-- Display the QR code --}}
        <img src="data:image/png;base64, {!! base64_encode($qrCode) !!} ">
        {{-- <img src="{{ route('qrcode.generate') }}" > --}}
        <h1> asdasdasd</h1>
    </div>
</body>
</html>
