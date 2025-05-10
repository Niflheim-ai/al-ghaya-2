<?php
    include('dbConnection.php');

    // Create Account
    function createAccount($conn) {
        if (isset($_POST['create-account'])) {
            if (!empty($_POST['first-name']) && !empty($_POST['last-name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])) {
                
                $inputFirstName = $_POST['first-name'];
                $inputLastName = $_POST['last-name'];
                $inputEmail = $_POST['email'];
                $inputPassword = $_POST['password'];
                $inputConfirmPassword = $_POST['confirm-password'];
    
                // Validate email format
                if (!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
                    echo '<script>
                        Swal.fire({
                            title: "Error",
                            text: "Invalid email format",
                            icon: "error"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "register.php";
                            }
                        });
                    </script>';
                    return;
                }
    
                // Check if passwords match
                if ($inputPassword !== $inputConfirmPassword) {
                    echo '<script>
                        Swal.fire({
                            title: "Error",
                            text: "Passwords do not match",
                            icon: "error"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "register.php";
                            }
                        });
                    </script>';
                    return;
                }
    
                // Check if email already exists
                $checkEmail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$inputEmail'");
                $numberOfUser = mysqli_num_rows($checkEmail);
    
                if ($numberOfUser < 1) {
                    // Hash password
                    $hashedPassword = password_hash($inputPassword, PASSWORD_BCRYPT, array('cost' => 12));
    
                    // Default values
                    $role = 'student';
                    $level = 1;
                    $points = 0;
                    $proficiency = 'beginner';
    
                    $saveRecord = $conn->prepare("INSERT INTO user (email, password, fname, lname, role, level, points, proficiency, dateCreated)
                                                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    
                    $saveRecord->bind_param("sssssiis", $inputEmail, $hashedPassword, $inputFirstName, $inputLastName, $role, $level, $points, $proficiency);
    
                    if ($saveRecord->errno) {
                        echo '<script>
                            Swal.fire({
                                title: "Error",
                                text: "Account creation failed",
                                icon: "error"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "register.php";
                                }
                            });
                        </script>';
                    } else {
                        echo '<script>
                            Swal.fire({
                                title: "Success",
                                text: "Account successfully created",
                                icon: "success"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "register.php";
                                }
                            });
                        </script>';
    
                        $saveRecord->execute();
                        $saveRecord->close();
                        $conn->close();
                    }
                } else {
                    echo '<script>
                        Swal.fire({
                            title: "Error",
                            text: "Email is already in use",
                            icon: "error"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "register.php";
                            }
                        });
                    </script>';
                }
            } else {
                echo '<script>
                    Swal.fire({
                        title: "Error",
                        text: "All fields are required",
                        icon: "error"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "register.php";
                        }
                    });
                </script>';
            }
        }
    }    

    // Create Program
    function handleCreateProgram($conn, $postData, $teacherID) {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return ['success' => false, 'message' => 'Invalid request method.'];
        }
    
        // Sanitize and validate inputs
        $title = trim($postData['title'] ?? '');
        $category = trim($postData['category'] ?? '');
        $description = trim($postData['description'] ?? '');
        $price = isset($postData['price']) ? floatval($postData['price']) : 0;
    
        if (empty($title) || empty($category) || empty($description) || !$teacherID) {
            return ['success' => false, 'message' => 'All fields are required.'];
        }
    
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO programs (title, category, description, price, teacherID, dateCreated) VALUES (?, ?, ?, ?, ?, NOW())");
    
        if (!$stmt) {
            return ['success' => false, 'message' => 'Prepare failed: ' . $conn->error];
        }
    
        $stmt->bind_param("sssdi", $title, $category, $description, $price, $teacherID);
    
        if ($stmt->execute()) {
            return ['success' => true, 'message' => 'Program created successfully.'];
        } else {
            return ['success' => false, 'message' => 'Execute failed: ' . $stmt->error];
        }
    }

    // Fetching program data
    function fetchProgramData($conn) {
        if (isset($_GET['title']) && isset($_GET['category'])) {
            $title = trim($_GET['title']);
            $category = trim($_GET['category']);
    
            $programQuery = "SELECT `image`, `title`, `description`, `category` FROM `programs` WHERE `title` = '$title' AND `category` = '$category'";
            $programResult = mysqli_query($conn, $programQuery);
    
            if ($programResult && $programResult->num_rows > 0) {
                while($row = mysqli_fetch_assoc($programResult)) {
                    
                    $program_title = $row['title'];
                    $program_level = $row['category'];
                    $program_description = $row['description'];
                    $program_image = $row['image'];

                    $levelClass = '';

                    switch (strtolower($program_level)) {
                        case 'beginner':
                            $levelClass = 'text-white bg-black px-3 rounded-lg font-semibold';
                            break;
                        case 'intermediate':
                            $levelClass = 'text-white bg-[#10375B] px-3 rounded-lg font-semibold';
                            break;
                        case 'advanced':
                            $levelClass = 'text-white bg-[#A58618] px-3 rounded-lg font-semibold';
                            break;
                        default:
                            $levelClass = 'text-gray-600'; // fallback
                    }

                    echo "
                    <div class='container mx-auto'>
                        <div class='max-w-4xl mx-auto bg-white shadow-md rounded-b-lg overflow-hidden'>
                            <img src='../images/$program_image.png' alt='$program_title' class='w-full h-80 object-cover'>
                        </div>
                        <div class='mx-auto max-w-[70%] lg:max-w-[65%] md:max-w-[60%] text-justify mt-15 lg:text-left'>
                            <h1 class='text-4xl font-bold mb-2 text-[#10375B] text-center lg:text-left'>$program_title <span class='text-lg mb-4 ml-2 $levelClass'>$program_level</span></h1> 
                            <p class='text-gray-700 leading-relaxed'>$program_description</p>
                        </div>
                    </div>";
                }
            } else {
                // No data found, redirect early
                header("Location: 404.php");
                exit();
            }
        }
    }

    function displayProgram($conn) {

    }
?>