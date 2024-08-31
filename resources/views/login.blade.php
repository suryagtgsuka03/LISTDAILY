<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    {{-- Animate CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- Font Playfair --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    {{-- Font Permanent Marker --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    {{-- Font Josefin Sans --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    {{-- Feather Icon --}}
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Login</title>
</head>

<body class="bg-gradient-to-r from-[#444444] to-[#3A3A3A] h-screen grid grid-cols-2 items-center font-Josefin">
    <div class="kiri flex text-[#DDDDDD] items-center justify-center">
        <h1 class="text-center bold italic w-[300px] h-[160px] text-[36px] animate__animated animate__fadeInDown">
            MAKE YOUR
            DAILY LIST </h1>
    </div>
    <div class="kanan flex justify-center text-[#DDDDDD] animate__animated animate__fadeIn">
        <div class="container w-[518px] h-[349px] bg-[#3A3A3A] p-4 shadow-[20px_20px_10px_#2B2B2B] rounded-[10px]">
            <h1 class="text-[36px] text-center mb-5">Login</h1>
            <div class="form p-7">
                <form class="space-y-[30px] w-full max-w-md mx-auto">
                    <div class="username relative">
                        <input placeholder="Your Username Here....."
                            class="w-full h-10 py-2 pl-12 pr-4 bg-[#696969] border border-[#DDDDDD] rounded-md text-[#DDDDDD] placeholder-[#DDDDDD]"
                            type="text">
                        <div
                            class="absolute left-0 top-0 flex items-center justify-center bg-[#DDDDDD] w-10 h-10 rounded-l-md">
                            <i data-feather="user" class="text-black"></i>
                        </div>
                    </div>
                    <div class="password relative">
                        <input placeholder="Your Password Here....."
                            class="w-full h-10 py-2 pl-12 pr-4 bg-[#696969] border border-[#DDDDDD] rounded-md text-[#DDDDDD] placeholder-[#DDDDDD]"
                            type="password">
                        <div
                            class="absolute left-0 top-0 flex items-center justify-center bg-[#DDDDDD] w-10 h-10 rounded-l-md">
                            <i data-feather="lock" class="text-black"></i>
                        </div>
                    </div>
                </form>
                <div class="btn flex text-[12px] items-center mt-[50px]">
                    <p>Doesnt Have One? <a href="/register" class="text-[#00F6FF] ">Click Here</a> To Make A New One</p>
                    <a class="right login w-[100px] h-[44px] bg-[#AAAAAA] text-[#3A3A3A] justify-center items-center flex rounded-[10px] ml-[50px] text-[16px]"
                        href="/">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    feather.replace();
</script>

</html>
