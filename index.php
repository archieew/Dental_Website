<?php
    $conn = new mysqli('localhost', 'root', '', 'contact_db') or die('connection failed');
    if(isset($_POST['submit'])){
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name= mysqli_real_escape_string($conn, $_POST['last_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $number = $_POST['number'];
        $date = $_POST['date'];

        $insert = mysqli_query($conn, "INSERT INTO `contact_form` (`first_name`,`last_name`, `email`, `number`, `date`) VALUES ('$first_name','$last_name', '$email', '$number', '$date')") or die('query failed');
        
        if($insert){
            $message[] = 'Appointment made successfully!';
        } else {
            $message[] = 'Appointment Failed!';
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Dentist Website Design</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <!-- css cdn link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap">
    <!-- link styles.css -->
    <link rel = "stylesheet" href = "css/styles.css">

</head>
<body>
    <!-- header section start here -->
    <header class = "header fixed-top">
        <div class = "row align-items-center justify-content-between">
            <nav class = "nav">
                <a href = "#home">Home</a>
                <a href = "#about">About</a>
                <a href = "#services">Services</a>
                <a href = "#reviews">Reviews</a>
                <a href = "#contact">Contact</a>  
            </nav>
            <a href = "#contact" class = "link-btn">Make Appointment</a>    
            <div id = "menu-btn" class = "fas fa-bars"></div>
        </div>      
</header>
<!-- header section ends -->

<!-- about section starts -->
<section class = "about" id = "about">    
    <div class = "container">
        <div class = "row align-items-center">
        <div class = "col-md-6 image">
            <img src = "images/about-img.jpg" class = "w-100 mb-5 mb-md-0" alt = "">
        </div>
        <div class = "col-md-6" image>
            <span>About Us</span>
            <h3> True Healthcare for your Family </h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
            <a href = "#contact" class = "link-btn">Make Appointment</a>
        </div>
    </div>
<!-- about section ends -->

<!-- service begins -->
<section class = "services" id = "services">
    <h1 class = "heading">Our Services</h1>
    <div class = "box-container container">
    
    <div class = "box">
        <img src = "images/icon-1.svg" alt = "">
        <h3>Alignment Specialist</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
    <div class = "box">
        <img src = "images/icon-2.svg" alt = "">
        <h3>Cosmetic Dentistry</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
    <div class = "box">
        <img src = "images/icon-3.svg" alt = "">
        <h3>Oral Hygiene Experts</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
    <div class = "box">
        <img src = "images/icon-4.svg" alt = "">
        <h3>Root Canal Specialist</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
    <div class = "box">
        <img src = "images/icon-5.svg" alt = "">
        <h3>Live Dental Advisory</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
    <div class = "box">
        <img src = "images/icon-6.svg" alt = "">
        <h3>Cavity Inspection</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
</section>
<!-- services ends here -->

<!-- process start here -->
<section class = "process">
    <h1 class = "heading">Work Process</h1>
    <div class = "box-container container">

    <div class = "box">
        <img src = "images/process-1.png" alt = "">
        <h3>Cosmetic Dentistry</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
    <div class = "box">
        <img src = "images/process-2.png" alt = "">
        <h3>Pediatric Dentistry</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
    <div class = "box">
        <img src = "images/process-3.png" alt = "">
        <h3>Dental Implants</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
</section>
<!-- process ends here -->

<!-- review start here -->
<section class = "reviews" id = "reviews">
    <h1 class = "heading">Satisfied Clients</h1>
    <div class = "box-container container">

    <div class = "box">
        <img src = "images/pic-1.png" alt = "">
        <p>I was formerly Bungal. Now my teeth are Pustiso. Happily served!</p>
        <div class = "stars">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
        </div>
        <h3>John Deo</h3>
    </div>
    <div class = "box">
        <img src = "images/pic-2.png" alt = "">
        <p>I have sungki. Now i have invisible braces at the back. Mookbang pa more!</p>
        <div class = "stars">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
        </div>
        <h3>Mari Possa</h3>
    </div>
    <div class = "box">
        <img src = "images/pic-3.png" alt = "">
        <p>I used to love candies. Now, the candies ae my teeth.</p>
        <div class = "stars">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
        </div>
        <h3>Felix Bungal</h3>
    </div>
</section>
<!-- review ends here -->

<!-- contact from start -->
<section class = "contact" id = "contact">
    <h1 class = "heading">Make Appointments</h1>
        <div class = "box-container container">
        <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
            <?php
                if(isset($message)){
                    foreach ($message as $message){
                        echo '<p class = "message">' .$message. '</p>';
                    }
                }
            ?>
            <span>First Name :</span>
            <input type = 'text' name = 'first_name' placeholder = "Enter your first name" class = "box" required>
            <span>Last Name :</span>
            <input type = 'text' name = 'last_name' placeholder = "Enter your last name" class = "box" required>
            <span>Your Email :</span>
            <input type = 'email' name = 'email' placeholder = "Enter your email" class = "box" required>
            <span>Your Number :</span>
            <input type = 'number' name = 'number' placeholder = "Enter your number" class = "box" required>
            <span>Appointment Date :</span>
            <input type = 'datetime local' name = 'date' class = "box" required>
            <input type = 'submit' value = 'Make Appointment' name = "submit" class = "link-box" required>
        </forms>
</section>        
<!-- contact ends here -->

<!-- footer starts here -->
<section class = "footer">
    <div class = "box-container container">
        
    <div class = "box">
        <i class = "fas fa-phone"></i>
        <h3>Phone Number</h3>
        <p>+63-905-412-1452</p>
        <p>+63-822-1245</p>
    </div>

    <div class = "box">
        <i class = "fas fa-mar-marker-alt"></i>
        <h3>Our Address</h3>
        <p>Brgy. Alang Ngipan, Angeles City</p>
    </div>

    <div class = "box">
        <i class = "fas fa-clock"></i>
        <h3>Opening Hours</h3>
        <p>9:00 AM - 5:00 PM</p>
    </div>

    <div class = "box">
        <i class = "fas fa-envelope"></i>
        <h3>Email Address</h3>
        <p>alangipan@gmail.com</p>
        <p>bungaldentist@gmail.com</p>
    </div>

    <div class = "credit"> &copy: Copyright @ <?php echo date('Y'); ?> <span>by: Archie Custodio</span>
<!-- footer ends here -->

</body>
</html>