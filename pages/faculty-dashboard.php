<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <!-- Tailwind -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- TW Elements -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css"/> -->
    <!-- CSS -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" type="image/x-icon" href="../images/Al-ghaya logoForPrint.svg">
    <title>Al-Ghaya - Dashboard</title>

    <style>
        @font-face {
            font-family: 'Winky Rough';
            src: url('../assets/fonts/WinkyRough-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .font-winky {
            font-family: 'Winky Rough', sans-serif;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-[#E7EBEF]">
        <div class="mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-between w-full">

                    <!-- Logo -->
                    <div class="flex shrink-0 items-center">
                        <a href="index.php">
                            <img class="h-8 w-auto" src="../images/Al-ghaya logoForPrint.svg" alt="Your Company">
                            <a href="index.php" class="rounded-md px-3 py-2 text-xl font-medium text-neutral-800" aria-current="page">Al-Ghaya</a>
                        </a>
                    </div>

                    <!-- Navigation buttons -->
                    <div class="hidden lg:flex header-content justify-end mr-3 flex w-full">
                        <div class="flex space-x-4 items-center justify-center">
                            <a href="index.php" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Home</a>
                            <a href="#" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">About</a>
                            <a href="programs.php" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Programs</a>
                            <a href="faculty.php" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Faculty</a>
                        </div>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:flex lg:hidden flex items-center">
                        <button id="menu-toggle" class="text-neutral-800 hover:text-gray-400 focus:outline-none hover:cursor-pointer">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu (Initially Hidden) -->
            <div id="mobile-menu" class="hidden flex flex-col items-center overflow-hidden max-h-0 transition-all duration-900 ease-in-out">
                <div class="px-2 pt-2 pb-3 space-y-2 flex flex-col items-center w-full">
                    <a href="index.php" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Home</a>
                    <a href="" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">About</a>
                    <a href="programs.php" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Programs</a>
                    <a href="faculty.php" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Faculty</a>
                    <div class="border-t border-gray-700 w-full my-2"></div>
                </div>
            </div>
        </div>
    </nav>

    <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-neutral-800 via-transparent to-neutral-800 opacity-45 dark:via-transparent"/>

    <!-- Create Program Trigger -->
    <div class="container px-4 mt-15 mx-auto mb-15">
        <button type="button" data-modal-toggle="createProgram" data-modal-target="createProgram" 
        class="hover:text-white text-[#10375B] border border-[#10375B] hover:bg-[#10375B] hover:cursor-pointer rounded-lg text-center p-2 shadow-lg">+ Create Program</button>
    </div>

    <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-neutral-800 via-transparent to-neutral-800 opacity-45 dark:via-transparent"/>

    <!-- Programs Section -->
    <section class="mb-15 mt-15">
        <p class="text-3xl text-[#10375B] font-bold mb-10 text-center">All Existing Programs</p>
        <!-- Beginner -->
        <div class="flex flex-col container mx-auto px-4">
            <!-- Title -->
            <div class="text-container text-center mx-auto lg:mx-0 flex bg-[#F3F3FC] shadow-xl max-w-fit p-2 px-6">
                <p class="text-2xl text-[#10375B] font-bold font-winky">Beginner</p>
            </div>

            <!-- Card Grid -->
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 mt-10 w-full max-w-none mx-auto">
            <!-- Card 1 -->
            <a href="#" class="group relative rounded-lg overflow-hidden">
                <img src="../images/hadith-sub.png" alt="Hadith" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-[#11365C]/80 to-transparent group-hover:from-[#11365C] transition-all duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-lg font-bold">Hadith</h3>
                    <p class="text-sm max-w-xs">Hadith are the recorded accounts of the sayings, actions, silent approvals, and physical descriptions of the Prophet Muhammad (peace be upon him)...</p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="#" class="group relative rounded-lg overflow-hidden">
                <img src="../images/seerah-sub.png" alt="Seerah" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-[#11365C]/80 to-transparent group-hover:from-[#11365C] transition-all duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-lg font-bold">Seerah</h3>
                    <p class="text-sm max-w-xs">Seerah is the comprehensive biography of the Prophet Muhammad (peace be upon him). 
                        It chronicles the events of his life from before his birth, his childhood and early life, the revelation of the Quran and the beginning of his prophethood, …</p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="#" class="group relative rounded-lg overflow-hidden">
                <img src="../images/lugha-arabia-sub.png" alt="Lugha Arabia" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-[#11365C]/80 to-transparent group-hover:from-[#11365C] transition-all duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-lg font-bold">Lugha Arabia</h3>
                    <p class="text-sm max-w-xs">Lugha Arabia is the study of the Arabic language itself. This goes beyond simply learning a few phrases; 
                        it delves into the structure, rules, and richness of the language in which the Quran was revealed and the Prophet Muhammad (peace be upon him) spoke.</p>
                </div>
            </a>
            </div>
        </div>

        <!-- Intermediate -->
        <div class="flex flex-col container mx-auto px-4 mt-10">
            <!-- Title -->
            <div class="text-container text-center mx-auto lg:mx-0 flex bg-[#F3F3FC] shadow-xl max-w-fit p-2 px-6">
                <p class="text-2xl text-[#10375B] font-bold font-winky">Intermediate</p>
            </div>

            <!-- Card Grid -->
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 mt-10 w-full max-w-none mx-auto">
            <!-- Card 1 -->
            <a href="#" class="group relative rounded-lg overflow-hidden">
                <img src="../images/sub4.png" alt="Hadith" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-[#11365C]/80 to-transparent group-hover:from-[#11365C] transition-all duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-lg font-bold">Adeeqah</h3>
                    <p class="text-sm max-w-xs">Aqeedah refers to the fundamental tenets of Islamic belief – 
                        the core convictions that form the foundation of a Muslim's faith. It deals with what a 
                        Muslim must believe in their heart with certainty. The most central aspect of Aqeedah is the belief in the absolute …</p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="#" class="group relative rounded-lg overflow-hidden">
                <img src="../images/sub5.png" alt="Seerah" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-[#11365C]/80 to-transparent group-hover:from-[#11365C] transition-all duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-lg font-bold">Fiqh</h3>
                    <p class="text-sm max-w-xs">Fiqh refers to Islamic jurisprudence, which is the human understanding and practical application 
                        of Islamic divine law (Sharia) to everyday life. It involves the detailed rulings and guidelines derived by qualified scholars from the primary sources of Islam ...</p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="#" class="group relative rounded-lg overflow-hidden">
                <img src="../images/quoran.jpg" alt="Lugha Arabia" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-[#11365C]/80 to-transparent group-hover:from-[#11365C] transition-all duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-lg font-bold">Tafsir</h3>
                    <p class="text-sm max-w-xs">Tafsir is the explanation and interpretation of the Holy Quran. Since the Quran is the 
                        literal word of God revealed in Arabic, understanding its profound meanings, context, and implications requires dedicated study. Tafsir delves into the linguistic…</p>
                </div>
            </a>
            </div>
        </div>

        <!-- Advanced -->
        <div class="flex flex-col container mx-auto px-4 mt-10">
            <!-- Title -->
            <div class="text-container text-center mx-auto lg:mx-0 flex bg-[#F3F3FC] shadow-xl max-w-fit p-2 px-6">
                <p class="text-2xl text-[#10375B] font-bold font-winky">Advanced</p>
            </div>

            <!-- Card Grid -->
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 mt-10 w-full max-w-none mx-auto">
            <!-- Card 1 -->
            <a href="#" class="group relative rounded-lg overflow-hidden">
                <img src="../images/sub7.png" alt="Hadith" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-[#11365C]/80 to-transparent group-hover:from-[#11365C] transition-all duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-lg font-bold">Tafsir - Mastery</h3>
                    <p class="text-sm max-w-xs">Tafsir is the explanation and interpretation of the Holy Quran. Since the Quran is the 
                        literal word of God revealed in Arabic, understanding its profound meanings, context, and implications requires dedicated study. Tafsir delves into the linguistic…</p>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="#" class="group relative rounded-lg overflow-hidden">
                <img src="../images/sub8.png" alt="Seerah" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-[#11365C]/80 to-transparent group-hover:from-[#11365C] transition-all duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-lg font-bold">Tajweed</h3>
                    <p class="text-sm max-w-xs">Tajweed is the set of rules governing how to pronounce the letters and words of the 
                        Holy Quran correctly during recitation. The Arabic of the Quran is precise, and the correct pronunciation of each letter, 
                        along with rules for elongation, pauses, and …</p>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="#" class="group relative rounded-lg overflow-hidden">
                <img src="../images/sub9.png" alt="Lugha Arabia" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                <div class="absolute inset-0 bg-gradient-to-t from-[#11365C]/80 to-transparent group-hover:from-[#11365C] transition-all duration-300"></div>
                <div class="absolute bottom-4 left-4 text-white">
                    <h3 class="text-lg font-bold">Adeeqah - Mastery</h3>
                    <p class="text-sm max-w-xs">Aqeedah refers to the fundamental tenets of Islamic belief – 
                        the core convictions that form the foundation of a Muslim's faith. It deals with what a
                        Muslim must believe in their heart with certainty. The most central aspect of Aqeedah is the belief in the absolute …</p>
                </div>
            </a>
            </div>
        </div>
    </section>

    <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-neutral-800 via-transparent to-neutral-800 opacity-45 dark:via-transparent"/>

    <!-- Footer -->
    <footer class="bg-[#10375B]">
        <div class="mx-auto w-full max-w-screen-2xl p-4 py-6 lg:py-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 sm:gap-6 items-start">
                <!-- Logo and Character -->
                <div class="col-span-2 flex flex-row items-center justify-center mb-6">
                    <img src="../images/muslim-coffee.svg" class="h-65 lg:max-w-xs lg:flex hidden" alt="Character" />
                    <div class="flex items-center">
                        <img src="../images/Vertical.svg" class="h-[148px] me-3" alt="Al-Ghaya Logo"/>
                    </div>
                </div>

                <!-- Our Location -->
                <div class="col-span-1 px-10 lg:mt-20">
                    <h2 class="mb-3 text-lg font-semibold text-white uppercase">Our Location</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-4">
                            <span class="font-bold">Al-Ghaya Office</span>
                        </li>
                        <li class="break-all max-w-xs">
                            <span>ISCAG School, Salitran 1, Dasmarinas, Cavite</span>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="col-span-1 px-10 lg:mt-20">
                    <h2 class="mb-3 text-lg font-semibold text-white uppercase">Contact</h2>
                    <ul class="text-white font-medium">
                        <li class="mb-3">
                            <span>Omar Eguia</span>
                        </li>
                        <li>
                            <span>+9766231230</span>
                        </li>
                    </ul>
                </div>

                <!-- Socials -->
                <div class="col-span-1 px-10 lg:mt-20">
                    <h2 class="mb-3 text-lg font-semibold text-white uppercase">Socials</h2>
                    <a href="#" class="text-white hover:text-gray-600">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                </div>
            </div>

            <hr class="my-6 border-gray-200 mx-auto dark:border-gray-700 lg:my-8" />

            <div class="sm:flex sm:items-center sm:justify-center text-center">
                <span class="text-sm text-white">© 2025 Al-Ghaya. All Rights Reserved.</span>
            </div>
        </div>
    </footer>

    <!-- Back to Top button -->
    <button type="button" onclick="scrollToTop()" class="scroll-to-top hidden fixed bottom-4 right-4 bg-gray-800 text-white rounded-full transition duration-300 hover:bg-gray-700 hover:text-gray-200 hover:cursor-pointer" id="scroll-to-top">
        <img src= "https://media.geeksforgeeks.org/wp-content/uploads/20240227155250/up.png" class="w-10 h-10 rounded-full bg-white" alt="">
    </button>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <!-- JS -->
    <script src="../components/navbar.js"></script>
    <script src="../javascript/scroll-to-top.js"></script>
    <script src="../javascript/faculty-dashboard.js"></script>
</body>
</html>