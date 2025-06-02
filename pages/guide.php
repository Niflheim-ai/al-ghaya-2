<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <!-- Tailwind -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" type="image/x-icon" href="../images/Al-ghaya logoForPrint.svg">
    <title>Al-Ghaya - Guide</title>
</head>
<body class="bg-[#10375B] min-h-screen flex items-center justify-center">
    <div class="bg-[#F6F7FF] rounded-xl shadow-md p-10 w-[90%] max-w-3xl relative">
    
    <!-- Back Button -->
    <div class="absolute top-4 left-4 flex items-center space-x-1 text-sm text-yellow-600 cursor-pointer">
        <buttton onclick="history.back()"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
        </button>
    </div>

    <!-- Header -->
    <div class="text-center mb-10">
        <h1 class="text-2xl font-semibold text-[#0F3554] mb-1">السلام عليكم</h1>
        <p class="text-sm text-gray-500">Assalamu Alaykum</p>
    </div>

    <!-- Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <!-- Sister Card -->
        <div class="bg-[#E6E6E8] rounded-md flex flex-col items-center p-6 border border-lg border-[#10375B]">
            <img src="../images/muslimah.svg" alt="Sister" class="mb-4 relative max-w-[80%]"/>
            <h2 class="text-lg text-[#0F3554] font-semibold">أخت</h2>
            <p class="text-sm text-gray-700 mt-1">Sister</p>
        </div>

        <!-- Brother Card -->
        <div class="bg-[#E6E6E8] rounded-md flex flex-col items-center p-6 border border-lg border-[#10375B]">
            <img src="../images/muslim.svg" alt="Brother" class="mb-4 relative max-w-[80%]"/>
            <h2 class="text-lg text-[#0F3554] font-semibold">أخ</h2>
            <p class="text-sm text-gray-700 mt-1">Brother</p>
        </div>
    </div>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- JS -->
    <script src="../components/navbar.js"></script>
    <script src="../javascript/scroll-to-top.js"></script>
    <script src="../javascript/carousel.js"></script>
</body>
</html>