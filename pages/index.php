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
    <title>Al-Ghaya - Homepage</title>
</head>
<body class="bg-[#F3F3FC]">
    <!-- <div class="container bg-white w-1/2 h-screen right-0 top-0 fixed z-50"></div> -->
    <!-- Navbar -->
    <nav class="bg-[#F3F3FC]">
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
                            <a href="#" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Home</a>
                            <a href="about.php" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">About</a>
                            <a href="programs.php" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Programs</a>
                            <a href="faculty.php" class="rounded-md px-3 py-2 text-md font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Faculty</a>
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
                    <a href="#" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Home</a>
                    <a href="about.php" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">About</a>
                    <a href="programs.php" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Programs</a>
                    <a href="faculty.php" class="block w-full text-center rounded-md px-3 py-2 text-sm font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Faculty</a>
                    <div class="border-t border-gray-700 w-full my-2"></div>
                    <a href="register.php" class="block w-full text-center rounded-md bg-[#10375B] px-3 py-2 text-base font-medium text-white hover:bg-blue-900">Register</a>
                    <a href="login.php" class="block w-full text-center rounded-md px-3 py-2 font-medium text-neutral-800 hover:bg-gray-700 hover:text-white">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div id="hero-section" class="relative flex mx-auto overflow-hidden" style="background-image: url('../images/blog-bg.svg')">
        <!-- Container -->
        <div class="text-container mx-auto flex flex-col lg:flex-row items-center justify-center h-auto lg:h-[508px] gap-x-20">
            <!-- Left Illustration -->
            <div class="flex justify-center">
                <img src="../images/hero.svg" alt="Illustration" class="w-auto max-h-[300px] lg:max-h-none">
            </div>
            
            <!-- Text Content -->
            <div class="flex flex-col max-w-[70%] lg:max-w-[45%] md:max-w-[60%] text-center lg:mt-15 lg:text-left">
                <p class="text-xl md:text-3xl lg:text-5xl font-bold text-white">
                    Study <span class="text-[#dddbff]">Arabic</span> and <span class="text-[#dddbff]">Islam</span> at your own pace
                </p>
                <p class="text-base lg:text-xl md:text-lg text-gray-100 py-5 font-bold text-justify">
                    Embark on a unique and engaging journey to master the Arabic language and deepen your understanding of Islamic studies with Al-Ghaya. 
                    Study at your own pace through captivating, gamified stories that bring learning to life. Experience a flexible and interactive learning 
                    environment designed for your success.
                </p>
                <div class="mt-4">
                    <a href="login.php">
                        <button type="button" class="text-lg text-white bg-[#10375B] w-fit px-4 py-2 mb-6 rounded-xl border border-white hover:bg-blue-900 hover:cursor-pointer">
                        Enroll Now
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Learning Method Section -->
    <div id="learning-method-section" class="relative mx-auto pt-20 max-w-[1500px] overflow-visible">
        <div class="text-center mb-10">
            <p class="text-3xl font-bold text-neutral-800">How Can Al-Ghaya Help?</p>
            <p class="text-xl font-bold text-neutral-600">The Features</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-5 lg:grid-rows-6 gap-0">
            <!-- Feature 1 -->
            <div class="flex flex-col lg:col-span-2 lg:row-span-3 items-center text-center bg-white p-5 lg:items-start lg:text-start">
                <img src="../images/self-paced.png" alt="Feature 1" class="w-full h-48 object-cover rounded-lg mb-4">
                <p class="text-xl font-bold text-neutral-800">Self-paced Learning</p>
                <p class="text-base lg:px-0 text-neutral-600 md:px-10 text-justify">
                    Study when and where it suits you, with no fixed class times or deadlines, 
                    allowing you to progress through your Arabic and Islamic studies programs entirely at your own speed.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col lg:col-span-3 lg:row-span-3 items-center text-center bg-white p-5 lg:items-start lg:text-start">
                <img src="../images/SE-c3e5e444-b4e4-4bd1-bda8-ad57282bd703.jpg" alt="Feature 2" class="w-full h-48 object-cover rounded-lg mb-4">
                <p class="text-xl font-bold text-neutral-800">Proficiency-level Based Programs</p>
                <p class="text-base lg:px-0 text-neutral-600 md:px-10 text-justify">
                    Learn according to your skill level, with programs structured across Beginner (Student), 
                    Intermediate (Aspiring), and Advanced (Master) proficiencies that align with your account progress.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="flex flex-col lg:col-span-3 lg:row-span-3 lg:row-start-4 items-center text-center bg-white p-5 lg:items-start lg:text-start">
                <img src="../images/quoran.jpg" alt="Feature 3" class="w-full h-48 object-cover rounded-lg mb-4">
                <p class="text-xl font-bold text-neutral-800">Interactive Storytelling</p>
                <p class="text-base lg:px-0 text-neutral-600 md:px-10 text-justify">
                    Engage with interactive lessons delivered through captivating stories, 
                    earning points and managing lives as you learn, making studying feel like an exciting game.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="flex flex-col lg:col-span-2 lg:row-span-3 lg:row-start-4 items-center text-center bg-white p-5 lg:items-start lg:text-start">
                <img src="../images/tracker.png" alt="Feature 4" class="w-full h-48 object-cover rounded-lg mb-4">
                <p class="text-xl font-bold text-neutral-800">Program Progress Tracker</p>
                <p class="text-base lg:px-0 text-neutral-600 md:px-10 text-justify">
                    Easily monitor your advancement through all your enrolled programs, 
                    seeing exactly how far you've come and what's next on your learning path.
                </p>
            </div>
        </div>
    </div>

    <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-800 to-transparent opacity-45 dark:via-neutral-800"/>

    <!-- Programs Offered Section -->
    <section id="programs" class="relative text-white py-20">
        <div class="relative lg:flex lg:items-center z-10 max-w-full mx-auto sm:px-6">
            <div class="text-center mb-10 p-5 lg:mx-auto">
                <h2 class="text-6xl font-bold">The Featured Programs</h2>
            </div>

            <!-- Course Cards Grid -->
            <div class="grid grid-cols-1 px-10 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white text-black rounded-lg shadow-lg overflow-hidden lg:max-w-sm">
                    <div class="w-full h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="../images/arabic-lessons-near-me-in-abuja.jpg.webp" alt="Arabic Language">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-[#A58618]">Arabic Language</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="inline-block px-4 py-2 text-sm font-medium text-white bg-[#10375B] rounded hover:bg-blue-900">Learn More</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white text-black rounded-lg shadow-lg overflow-hidden lg:max-w-sm">
                    <div class="w-full h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="../images/camel.jpg" alt="Hadith">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-[#A58618]">Hadith</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="inline-block px-4 py-2 text-sm font-medium text-white bg-[#10375B] rounded hover:bg-blue-900">Learn More</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white text-black rounded-lg shadow-lg overflow-hidden lg:max-w-sm">
                    <div class="w-full h-48 overflow-hidden">
                        <img class="w-full h-full object-cover" src="../images/Untitled-design-22-1255x706.png" alt="Fiqh">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-[#A58618]">Fiqh</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="inline-block px-4 py-2 text-sm font-medium text-white bg-[#10375B] rounded hover:bg-blue-900">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0">
            <img src="../images/blog-bg.svg" alt="Background Pattern" class="w-full h-full object-cover">
        </div>
    </section>

    <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-800 to-transparent opacity-45 dark:via-neutral-800"/>

    <!-- Team Section -->
    <div id="team" class="container mx-auto py-20 px-5 lg:px-0 gap-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <!-- Left Side: Team Description -->
            <div class="lg:text-left text-center px-10">
                <p class="text-5xl font-extrabold text-gray-800">Want to know our Adeeqah and Learning Quality?</p>
                <p class="text-xl font-semibold text-gray-600 pt-10">
                    Our dedicated professionals bring expertise and passion to our work. 
                    Get to know the amazing individuals behind our success.
                </p>
                <a href="about.php">
                    <button type="button" class="text-lg mx-auto mt-10 text-white bg-[#10375B] px-5 py-2 rounded-xl hover:bg-blue-900 hover:cursor-pointer">
                        Learn More
                    </button>
                </a>
            </div>
    
            <!-- Right Side: Swiper Carousel -->
            <div class="swiper swiper-container max-w-60 md:max-w-md lg:max-w-lg xl:max-w-xl">
                <div class="swiper-wrapper">
                    <!-- Team Member 1 -->
                    <div class="swiper-slide flex flex-col items-center">
                        <img src="../images/lecturer.jpg" alt="Team Member 1" class="shadow-lg h-60 w-60 md:w-md md:h-md lg:w-[400px] lg:h-[400px] object-cover">
                    </div>
                    <!-- Team Member 2 -->
                    <div class="swiper-slide flex flex-col items-center">
                        <img src="../images/lecturer2.jpg" alt="Team Member 2" class="shadow-lg h-60 w-60 md:w-md md:h-md lg:w-[400px] lg:h-[400px] object-cover">
                    </div>
                    <!-- Team Member 3 -->
                    <div class="swiper-slide flex flex-col items-center">
                        <img src="../images/andri-helmansyah-e9tCOGG40mw-unsplash.jpg" alt="Team Member 3" class="shadow-lg h-60 w-60 md:w-md md:h-md lg:w-[400px] lg:h-[400px] object-cover">
                    </div>
                </div>

                <!-- Fading Borders -->
                <div class="fading-border left"></div>
                <div class="fading-border right"></div>
            </div>
        </div>
    </div>

    <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-800 to-transparent opacity-45 dark:via-neutral-800"/>

    <!-- Call To Action -->
    <div id="contact" class="container mx-auto flex flex-col lg:flex-row items-center py-20 lg:px-10">
        <!-- Left Illustration -->
        <div class="flex hidden lg:ml-20 lg:block">
            <img src="../images/muslimah.svg" alt="Illustration" class="lg:w-50">
        </div>

        <!-- Text Container -->
        <div class="text-container px-5 flex-2 py-10 lg:py-20 max-w-screen mx-auto text-center">
            <p class="text-4xl lg:text-5xl font-bold text-gray-900">Al-Ghaya made it Accessible and Flexible</p>
            <p class="text-lg font-semibold text-gray-600 mt-5">
                Ready to learn Arabic and Islam on your schedule, wherever you are? Al-Ghaya makes deep learning achievable with flexible access.
            </p>
            <a href="login.php">
                <button type="button" class="mt-10 text-lg text-white bg-[#10375B] px-6 py-3 rounded-xl hover:bg-blue-900 hover:cursor-pointer">
                    Enroll Now
                </button>
            </a>
        </div>

        <!-- Right Illustration -->
        <div class="flex-1 hidden lg:block">
            <img src="../images/muslim.svg" alt="Illustration" class="lg:w-50">
        </div>
    </div>

    <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-800 to-transparent opacity-45 dark:via-neutral-800"/>

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
    <script src="../javascript/carousel.js"></script>
</body>
</html>