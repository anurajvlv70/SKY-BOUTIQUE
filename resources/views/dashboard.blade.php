<x-app-layout>
    <!-- Header Slot -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Go with SKY') }}
        </h2>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SELECT YOUR STYLE WITH SKY') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SKY BOUTIQUE</title>

        <!-- Fonts and Bootstrap -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Custom Styles -->
        <style>
            body, html {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Figtree', sans-serif;
                color: #333;
                background-color: #f9f9f9;
            }

            .header {
                background-color: rgba(231, 10, 96, 0.8);
                color: white;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .btn-custom {
                background-color: #e70a60;
                color: white;
                border: none;
            }

            .btn-custom:hover {
                background-color: #d50a55;
            }

            .btn-outline-success {
                --bs-btn-color: #e70a60;
                --bs-btn-border-color: #e70a60;
                --bs-btn-hover-color: #fff;
                --bs-btn-hover-bg: #e70a60;
                --bs-btn-hover-border-color: #e70a60;
            }

            .floating-image {
                animation: floating 7s ease-in-out infinite;
            }

            @keyframes floating {
                0% { transform: translateY(0); }
                50% { transform: translateY(-20px); }
                100% { transform: translateY(0); }
            }

            .background {
                background-image: url('{{ asset('istockphoto2.jpg') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
            }

            .overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
                z-index: 1;
            }

            .content {
                position: relative;
                z-index: 2; /* Bring content above the overlay */
            }

            .btn-photos, .btn-view {
                background-color: #e70a60; /* Same background color */
                color: white; /* Text color */
                border: 2px solid #fff;
                font-weight: bold;
                transition: all 0.3s ease-in-out;
                box-shadow: 0 4px 15px rgba(0, 140, 186, 0.4);

                /* Larger size */
                padding: 20px 50px;
                font-size: 1.5rem;
                width: 100%;
            }

            .btn-photos:hover, .btn-view:hover {
                background-color: #e6b800; /* Darker shade on hover */
                transform: scale(1.05); /* Slight scaling effect */
            }
        </style>
    </head>
    <body>
        <!-- Background Section -->
        <div class="background">
            <div class="overlay"></div>
            <div class="content text-center">
                <!-- Main Heading -->
                <h1 class="fw-bolder text-white mb-4" style="font-size: 3rem;">
                    SKY BOUTIQUE
                </h1>
                
                <!-- Button Section -->
                <div class="row justify-content-center mb-3">
                    <!-- ADD Button -->
                    <div class="col-md-6 mb-3">
                        <a href="{{ url('/product') }}" class="btn btn-photos rounded-0">ADD</a>
                    </div>

                    <!-- SHOW Button -->
                    <div class="col-md-6 mb-3">
                        <a href="{{ url('/show') }}" class="btn btn-photos rounded-0">SHOW</a>
                    </div>

                    <!-- LIST Button -->
                    <div class="col-md-6">
                        <a href="{{ url('/list') }}" class="btn btn-photos rounded-0">LIST</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
</x-app-layout>
