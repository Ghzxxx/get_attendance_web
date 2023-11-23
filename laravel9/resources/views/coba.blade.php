<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Background Card</title>

    <style>
        body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f8f9fa; /* Set the background color of the page */
}

.card {
    width: 300px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
    overflow: hidden;
}

.card-header {
    background-color: #007bff; /* Set the header background color */
    color: #ffffff; /* Set the header text color */
    padding: 15px;
    text-align: center;
}

.card-body {
    padding: 20px;
    background-size: cover; /* Ensure the background image covers the entire card */
}

    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <h2>Card Title</h2>
        </div>
        <div class="card-body" img src="https://www.gstatic.com/webp/gallery3/1.sm.png" alt="Logo"></div>


            <p>This is the content of the card. You can add any text or elements here.</p>
        </div>
    </div>
</body>
</html>
