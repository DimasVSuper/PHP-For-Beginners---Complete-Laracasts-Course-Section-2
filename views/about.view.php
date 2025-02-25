<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #f0f8ff; /* Light blue */
            padding: 10px 0;
            text-align: center;
        }
        .header a {
            margin: 0 15px;
            text-decoration: none;
            color: #000; /* Black */
        }
        .header a:hover {
            text-decoration: underline;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>
        <?php
            include 'views/partials/nav.php';
        ?>
    <div class="content">
        <h1>About Us</h1>
        <p>Welcome to the About page. Here you can find more information about our website and what we do.</p>
    </div>
</body>
</html>