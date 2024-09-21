<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            text-align: center;
            padding: 20px;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }
        h1 {
            margin: 0;
            font-size: 24px;
        }
        p {
            font-size: 18px;
            color: #333;
            margin-top: 20px;
        }
        .link-container {
            margin-top: 30px;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Ministry of ICT</h1>
    </div>
    <p>Thank you!</p>
    <p>Thank you for taking the time to complete the survey. Your input is invaluable in shaping the future of digital skills development in the public sector.</p>

    <div class="link-container">
        <a href="{{ url('/') }}">Return to Home Page</a>
    </div>
</div>
</body>
</html>
