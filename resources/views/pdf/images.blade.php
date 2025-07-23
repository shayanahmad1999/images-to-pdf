<!DOCTYPE html>
<html>
<head>
    <title>User Images PDF</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding: 30px;
            background-color: #f9f9f9;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 24px;
            color: #007bff;
        }
        .image-container {
            text-align: center;
            margin-bottom: 30px;
            page-break-inside: avoid;
        }
        .image-container img {
            width: 300px;
            border: 1px solid #ccc;
            padding: 5px;
            background-color: #fff;
        }
        .footer {
            position: fixed;
            bottom: 30px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 12px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <h1>User Uploaded Images</h1>

    @foreach ($paths as $path)
        <div class="image-container">
            <img src="{{ public_path('storage/' . $path) }}" alt="User Image">
        </div>
    @endforeach

    <div class="footer">
        Generated on {{ now()->format('F j, Y, g:i A') }}
    </div>
</body>
</html>
