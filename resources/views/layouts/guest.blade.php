<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: start;
        }

        h2 {
            margin-bottom: 20px;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btns.ar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 20px;
        }

        .link {
            background: #0000;
            color: #9b9b9b;
            border: none;
            text-decoration: underline;
        }

        .link:hover {
            cursor: pointer;
        }

        .btn {
            background: #ec6e2d;
            border-radius: 8px;
            color: white;
            padding: 10px;
            border: none
        }

        .btn:hover {
            cursor: pointer;
            background-color: #ec7c45;
        }

        .text {
            text-align: justify;
        }

        .success {
            color: #18b718;
            font-size: 13px;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div style="text-align: center">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>
        {{ $slot }}
    </div>
</body>

</html>
