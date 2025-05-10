<?php
    include('../php/dbConnection.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate input
        if (empty($email) || empty($password)) {
            echo "All fields are required.";
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
            exit;
        }

        // Prepare and bind
        $stmt = $conn->prepare("SELECT userID, password, role FROM user WHERE email = ?");
        $stmt->bind_param("s", $email);

        // Execute the statement
        $stmt->execute();
        $stmt->store_result();

        // Check if user exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($userID, $hashedPassword, $role);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $hashedPassword)) {
                // Password is correct, start session
                $_SESSION['userID'] = $userID;
                $_SESSION['role'] = $role;
                echo "Login successful!";
                // Redirect to a protected page or dashboard
                header("Location: student-dashboard.php");
                exit;
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this email.";
        }

        // Close the statement
        $stmt->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/login.css">
    <!-- Tailwind -->
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="icon" type="image/x-icon" href="../images/Al-ghaya logoForPrint.svg">
    <title>Al-Ghaya - Login</title>
</head>
<body class="bg-[#f3f3fc]">
    <!-- Content -->
    <div class="content flex justify-center items-center min-h-screen px-6">
        <div class="flex max-w-6xl w-full bg-neutral-100 rounded-xl p-6 flex-wrap items-center justify-center shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
            <!-- Back Button -->
            <button class="absolute top-4 left-4 hover:cursor-pointer hover:bg-white transition-all text-[#A58618] font-medium rounded-full p-2 shadow-md border border-md">
                <a href="#" onclick="history.back()"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg></a>
            </button>

            <!-- Left column container -->
            <div class="hidden lg:flex lg:flex-col gap-5 lg:py-40 md:w-6/12 lg:w-7/12 px-25">
                <img class="max-w-20 mb-10 -mt-25" src="../images/Al-ghaya logoForPrint.svg" alt="">
                <p class="text-6xl font-black text-[#05051A]">Login</p>
                <p class="text-xl text-[#05051A]">You may use your Gmail account or the Al-Ghaya account</p>
            </div>

            <!-- Right column container -->
            <div class="w-full md:w-9/12 lg:w-5/12 p-4">
                <form action="#" method="POST" class="space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block text-gray-700 font-medium">Email Address</label>
                        <div class="relative">
                            <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required class="w-full p-3 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <img src="https://img.icons8.com/ios-filled/50/new-post.png" class="absolute left-3 top-4 w-5 h-5 text-gray-500">
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block text-gray-700 font-medium">Password</label>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="********" required class="w-full p-3 pl-10 pr-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <img src="https://img.icons8.com/?size=100&id=2862&format=png&color=000000" class="absolute left-3 top-3 w-6 h-6 text-gray-500">
                            <button type="button" onclick="togglePassword()" class="absolute right-3 top-3 cursor-pointer">
                                <img id="eye-icon" src="https://img.icons8.com/?size=100&id=0ciqibcg6iLl&format=png&color=000000" class="w-7 h-7 text-gray-500">
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-blue-500 hover:cursor-pointer">
                            <span class="ml-2 text-gray-600">Remember Me</span>
                        </label>
                        <a href="#" class="text-blue-500 hover:underline text-sm">Forgot Password?</a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="w-full bg-[#10375b] text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300 hover:cursor-pointer">
                        Login
                    </button>

                    <!-- Signup Link -->
                    <p class="text-center text-gray-600 text-sm">
                        Don't have an account?
                        <a href="register.php" class="text-blue-500 font-medium hover:underline">Sign Up</a>
                    </p>
                </form>

                <div class="my-4 flex items-center">
                    <hr class="flex-grow border-gray-400">
                    <span class="mx-3 text-gray-900">or</span>
                    <hr class="flex-grow border-gray-400">
                </div>

                <!-- Social Login Buttons -->
                <div class="flex flex-col space-y-3">
                    <button class="flex items-center justify-center w-full bg-white border border-gray-300 text-gray-700 py-2 rounded-lg shadow-md hover:bg-gray-100 transition hover:cursor-pointer">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2" alt="Google Icon">
                        Login with Google
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="../components/navbar.js"></script>
    <script src="../javascript/login.js"></script>
</body>
</html>
