<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        <h1>Contact Us</h1>
        <p>If you have any questions, feel free to reach out to us through this page.</p>
    </div>
</body>
</html>