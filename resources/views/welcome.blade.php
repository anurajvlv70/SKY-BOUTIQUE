<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trip Partner</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom Styles -->
    <style>
        /* Floating Animation */
        @keyframes floating {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0);
            }
        }

        .floating-image {
            animation: floating 7s ease-in-out infinite;
        }

        /* Reset Padding and Margin */
        body, html {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            height: 100%;
            font-family: 'Figtree', sans-serif;
        }

        /* Button Customization */
        .btn-outline-success {
            --bs-btn-color: #e70a60;
            --bs-btn-border-color: #e70a60;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #e70a60;
            --bs-btn-hover-border-color: #e70a60;
            --bs-btn-focus-shadow-rgb: 25, 135, 84;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #e70a60;
            --bs-btn-active-border-color: #e70a60;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #e70a60;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #e70a60;
            --bs-gradient: none;
        }

        /* Overlay for Better Text Visibility */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2;
        }

        /* Content Styling */
        .content {
            position: relative;
            z-index: 3;
            color: #fff;
        }

        .content h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        /* Responsive Image */
        .floating-image {
            max-width: 100%;
            height: auto;
        }

        /* Adjust Button Width on Smaller Screens */
        @media (max-width: 576px) {
            .btn-width {
                width: 100% !important;
                margin-bottom: 0.5rem;
            }
        }

        /* Full-Screen Carousel Styling */
        .bg-carousel {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .bg-carousel .carousel-item {
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">
    
    <!-- Background Carousel -->
    <div id="bgCarousel" class="carousel slide bg-carousel" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('{{ asset('istockphoto.jpg') }}');">
            </div>
            <div class="carousel-item" style="background-image: url('{{ asset('green-dress.avif') }}');">
            </div>
            <div class="carousel-item" style="background-image: url('{{ asset('istockphoto.jpg') }}');">
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="overlay"></div>
    
    <!-- Content Container -->
    <div class="container content text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="fw-bolder">SKY BOUTIQUE</h1>
                <p>
                    Travel Partner is a travel diary tool for recording trip details, including travel dates, start and end destinations, and the number of friends who joined. Keep track of your adventures effortlessly!
                </p>
                
                @if (Route::has('login'))
                    <div class="d-flex justify-content-center flex-column flex-sm-row mt-4">
                        @auth
                            <a href="{{ url('/index') }}" class="btn btn-outline-success rounded-0 me-sm-2 mb-2 mb-sm-0">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-success rounded-0 me-sm-2 mb-2 mb-sm-0 btn-width">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-light rounded-0 btn-width">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <!-- Optional Image Section -->
            <!-- <div class="col-lg-4 d-none d-lg-block">
                <img src="{{ asset('trip_image.png') }}" alt="Travel" class="floating-image mt-4">
            </div> -->
        </div>
    </div>

    <!-- Bootstrap JS (Optional for Bootstrap Components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+65nZ74RRMpW5V1MkL5Zk8P0p4kG/" crossorigin="anonymous"></script>
</body>
</html>
