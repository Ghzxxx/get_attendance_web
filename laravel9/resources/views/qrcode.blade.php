<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Alert Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <form id="myForm">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional, if you want to use Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function submitForm() {
            // Get form values
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;

            // Display Bootstrap alert with form values
            var alertMessage = `<strong>Name:</strong> ${name}<br><strong>Email:</strong> ${email}`;
            var alertDiv = `
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    ${alertMessage}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;

            // Append the alert to the container
            document.getElementById('myForm').insertAdjacentHTML('beforebegin', alertDiv);
        }
    </script>

</body>
</html>
