<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                margin: 0;
                font-family: 'Figtree', sans-serif;
                background-color: #90CBC1;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
            }

            .card {
                background-color: #FDCDC5;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                padding: 30px;
                width: 100%;
                max-width: 400px;
                transition: transform 0.3s ease;
            }

            .card:hover {
                transform: translateY(-10px);
            }

            .header-logo {
                display: flex;
                justify-content: center;
                margin-bottom: 20px;
            }

            .header-logo img {
                width: 100px;
                height: auto;
            }

            .form-input {
                width: 100%;
                padding: 12px;
                border-radius: 8px;
                border: 1px solid #0a0a0a;
                margin-bottom: 20px;
                font-size: 16px;
                transition: border-color 0.3s ease;
            }

            .form-input:focus {
                border-color: #4C8BF5;
                outline: none;
            }

            .form-button {
                background-color: #4C8BF5;
                color: rgb(0, 0, 0);
                width: 100%;
                padding: 12px;
                border-radius: 8px;
                border: none;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .form-button:hover {
                background-color: #3979d1;
            }

            .forgot-password {
                text-align: right;
                font-size: 14px;
                color: #ffffff;
            }

            .forgot-password a {
                color: #4C8BF5;
                text-decoration: none;
            }

            .forgot-password a:hover {
                text-decoration: underline;
            }

            /* Responsive Media Queries */
            @media (max-width: 1024px) {
                .card {
                    padding: 25px;
                    max-width: 80%;
                }
                .header-logo img {
                    width: 90px;
                }
            }

            @media (max-width: 768px) {
                .card {
                    padding: 20px;
                    max-width: 90%;
                }
                .header-logo img {
                    width: 80px;
                }
                .form-input, .form-button {
                    font-size: 14px;
                    padding: 10px;
                }
            }

            @media (max-width: 480px) {
                .card {
                    padding: 15px;
                    max-width: 95%;
                }
                .header-logo img {
                    width: 70px;
                }
                .form-input, .form-button {
                    font-size: 12px;
                    padding: 8px;
                }
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="container">
            <div class="card">
                <div class="header-logo">
                    <a href="/">
                        <img src="https://www.dropbox.com/scl/fi/4a6kod3m1l1u7ukq9p60w/logo-remove.png?rlkey=wslgefag7hc5gef0wv6sz09c6&raw=1" alt="Logo" />
                    </a>
                </div>

                {{ $slot }}
            </div>
        </div>
    </body>
</html>
