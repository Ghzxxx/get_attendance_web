<!-- resources/views/qrcode/generate-qrcode.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Code</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Function to display the QR code
            function displayQRCode() {
                // Replace this URL with the actual URL for generating QR codes
                var qrCodeEndpoint = "/generate-qrcode";

                // Make an AJAX request to the QR code generation endpoint
                $.get(qrCodeEndpoint, function (data) {
                    // Create an img element with the QR code data
                    var imgElement = document.createElement("img");
                    imgElement.src = "data:image/png;base64," + data;

                    // Append the img element to the specified container
                    $("#qrCodeContainer").empty().append(imgElement);
                })
                .fail(function () {
                    // Handle the case where the request fails
                    alert("Failed to fetch QR Code data");
                });
            }

            // Call the function to display the QR code when the page loads
            displayQRCode();
        });
    </script>
</head>
<body>
    <!-- Container for QR code -->
    <div id="qrCodeContainer"></div>
</body>
</html>
