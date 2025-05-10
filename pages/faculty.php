<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/faculty.css">
    <link rel="icon" type="image/x-icon" href="../images/Al-ghaya logoForPrint.svg">
    <title>Al-Ghaya - Faculty</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="bg-[#E6E6E8]">
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
                            <a href="about.php" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">About</a>
                            <a href="programs.php" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Programs</a>
                            <a href="#" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white bg-gray-700 text-white">Faculty</a>
                        </div>
                    </div>

                    <!-- Login buttons -->
                    <div class="hidden lg:flex flex items-center gap-2">
                        <a href="register.php" class="rounded-md bg-[#10375B] px-3 py-2 text-base font-medium text-white hover:bg-blue-900">Register</a>
                        <a href="login.php" class="rounded-md px-3 py-2 font-medium text-[#A58618] border border-[#A58618] hover:bg-[#A58618] hover:text-white">Login</a>
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
                    <a href="about.php" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">About</a>
                    <a href="programs.php" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Programs</a>
                    <a href="#" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white bg-gray-700 text-white">Faculty</a>
                    <div class="border-t border-gray-700 w-full my-2"></div>
                    <a href="register.php" class="block w-full text-center rounded-md bg-[#10375B] px-3 py-2 text-base font-medium text-white hover:bg-blue-900">Register</a>
                    <a href="login.php" class="block w-full text-center rounded-md px-3 py-2 font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-neutral-800 via-transparent to-neutral-800 opacity-45 dark:via-transparent"/>

    <!-- Description -->
    <div id="contact" class="container mx-auto flex lg:flex-row items-center pt-10 pb-5 lg:px-10 max-w-[55%] lg:max-w-[70%]">
        <!-- Left Illustration -->
        <div class="flex hidden lg:flex justify-center lg:block">
            <img src="../images/half-right.svg" alt="Illustration" class="lg:w-200">
        </div>

        <!-- Text Container -->
        <div class="text-container px-5 py-5 lg:py-20 max-w-screen mx-auto text-start">
            <p class="text-4xl lg:text-6xl font-bold text-gray-900">Get to know our faculty</p>
            <p class="text-lg text-neutral-500 text-justify pt-5">Our dedicated faculty are entrusted with guiding your learning journey at Al-Ghaya. 
                With strong qualifications and a commitment to the authentic teachings of Ahlus Sunnah wal Jama'ah, 
                they are here to ensure you receive sound knowledge and values directly from trusted sources. 
                Learn with confidence from our knowledgeable instructors.</p>
        </div>
    </div>
    
    <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-800 to-transparent opacity-45 dark:via-neutral-800"/>
    
    <!-- Faculty Display -->
    <div class="grid grid-cols-1 xl:grid-cols-4 md:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-35 xl:gap-30 px-3 py-3 pt-15 pb-15 lg:mx-auto mx-auto justify-center items-center max-w-[65%]">
        <div class="w-60 h-100 rounded-xl">
            <img src="../images/fac-1.png" class="rounded-xl" alt="">
            <p class="pt-5 text-[#05051A] font-bold">Ustadh Eljamil</p>
            <p class="pt-4 text-neutral-500">Al-Maarif Graduate <br>(Batch 10)</p>
            <p class="pt-4 text-[#A58618]">Mastery in Fiqh</p>
        </div>
        
        <div class="w-60 h-100 rounded-xl">
            <img src="../images/fac-2.png" class="rounded-xl" alt="">
            <p class="pt-5 text-[#05051A] font-bold">Ustadh Muhammad</p>
            <p class="pt-4 text-neutral-500">Al-Maarif Graduate <br>(Batch 10)</p>
            <p class="pt-4 text-[#A58618]">Mastery in Fiqh</p>
        </div>

        <div class="w-60 h-100 rounded-xl">
            <img src="../images/fac-3.png" class="rounded-xl" alt="">
            <p class="pt-5 text-[#05051A] font-bold">Ustadh Yusuf</p>
            <p class="pt-4 text-neutral-500">Al-Maarif Graduate <br>(Batch 10)</p>
            <p class="pt-4 text-[#A58618]">Mastery in Fiqh</p>
        </div>

        <div class="w-60 h-100 rounded-xl">
            <img src="../images/fac-4.png" class="rounded-xl" alt="">
            <p class="pt-5 text-[#05051A] font-bold">Ustadh Nuh</p>
            <p class="pt-4 text-neutral-500">Al-Maarif Graduate <br>(Batch 10)</p>
            <p class="pt-4 text-[#A58618]">Mastery in Fiqh</p>
        </div>

        <div class="w-60 h-100 rounded-xl">
            <img src="../images/fac-5.png" class="rounded-xl" alt="">
            <p class="pt-5 text-[#05051A] font-bold">Ustadhah Fatima</p>
            <p class="pt-4 text-neutral-500">Al-Maarif Graduate <br>(Batch 10)</p>
            <p class="pt-4 text-[#A58618]">Mastery in Fiqh</p>
        </div>

        <div class="w-60 h-100 rounded-xl">
            <img src="../images/fac-6.png" class="rounded-xl" alt="">
            <p class="pt-5 text-[#05051A] font-bold">Ustadhah Aisha</p>
            <p class="pt-4 text-neutral-500">Al-Maarif Graduate <br>(Batch 10)</p>
            <p class="pt-4 text-[#A58618]">Mastery in Fiqh</p>
        </div>

        <div class="w-60 h-100 rounded-xl">
            <img src="../images/fac-7.png" class="rounded-xl" alt="">
            <p class="pt-5 text-[#05051A] font-bold">Ustadhah Ameerah</p>
            <p class="pt-4 text-neutral-500">Al-Maarif Graduate <br>(Batch 10)</p>
            <p class="pt-4 text-[#A58618]">Mastery in Fiqh</p>
        </div>
        
        <div class="w-60 h-100 rounded-xl">
            <img src="../images/fac-8.png" class="rounded-xl" alt="">
            <p class="pt-5 text-[#05051A] font-bold">Ustadhah Khadijah</p>
            <p class="pt-4 text-neutral-500">Al-Maarif Graduate <br>(Batch 10)</p>
            <p class="pt-4 text-[#A58618]">Mastery in Fiqh</p>
        </div>
    </div>

    <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-800 to-transparent opacity-45 dark:via-neutral-800"/>

    <!-- Container -->
    <div class="text-container mx-auto flex flex-col lg:flex-row items-center justify-center h-auto lg:h-[508px] gap-x-20">
        <!-- Text Content -->
        <div class="flex flex-col max-w-[70%] lg:max-w-[35%] md:max-w-[60%] text-center lg:mt-15 lg:text-left">
            <p class="text-xl md:text-3xl lg:text-4xl font-bold text-[#10375B]">
                Learn Arabic Language and Islam, the Al-Ghaya way
            </p>
            <p class="text-base lg:text-xl md:text-lg text-black py-5 font-bold text-justify">
                Experience a truly unique approach to learning. With Al-Ghaya, immerse yourself in Arabic and Islamic studies through engaging stories, 
                track your growth, and learn at your own flexible pace. Discover the difference the Al-Ghaya way makes.
            </p>
            <div class="mt-4">
                <a href="login.php">
                    <button type="button" class="text-lg text-white bg-[#10375B] w-full px-4 py-2 mb-6 rounded-xl border border-white hover:bg-blue-900 hover:cursor-pointer">
                    Enroll Now
                    </button>
                </a>
            </div>
        </div>

        <!-- Right Illustration -->
        <div class="flex justify-center">
            <img src="../images/hero.svg" alt="Illustration" class="w-auto max-h-[300px] lg:max-h-none">
        </div>
    </div>

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

    <!-- Navbar -->
    <script src="../components/navbar.js"></script>
    <!-- Scroll To Top -->
    <script src="../javascript/scroll-to-top.js"></script>
</body>
</html>