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
    <title>TODO-LIST</title>
</head>

<body class="bg-gradient-to-r from-[#444444] to-[#3A3A3A] font-Josefin">
    <nav class="h-[60px] w-full bg-[#747474] text-[#DDDDDD] p-3">
        <a href="" class="text-[30px] italic">
            List Daily
        </a>
    </nav>
    <div class="container p-5">
        <div
            class="kotak relative rounded-[10px] w-[285px] h-[354px] bg-[#D9D9D9] shadow-[10px_10px_10px_#767676] flex justify-center items-center">
            <a href="">
                <div class="plus relative w-full h-full flex justify-center items-center duration-75 hover:scale-125">
                    <!-- Bagian Vertikal -->
                    <div class="atas absolute bg-[#3A3A3A] w-[40px] h-[165px]"></div>
                    <!-- Bagian Horizontal -->
                    <div class="samping absolute bg-[#3A3A3A] w-[40px] h-[165px] transform rotate-90"></div>
                </div>
            </a>
        </div>
    </div>
</body>
<script>
    feather.replace();
</script>

</html>
