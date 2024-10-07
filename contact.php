<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- jQuery library for JavaScript interactions -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- External CSS files for layout and design -->
    <link rel="stylesheet" href="Components/footer.css">
    <link rel="stylesheet" href="style/categories3.css">
    <link rel="stylesheet" href="Components/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    
    <!-- Bootstrap CSS for responsive layout and design -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Popper.js and Bootstrap JS for handling interactive elements -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
    <!-- Custom JavaScript for page-specific interactions -->
    <script src="javascript/index.js"></script>
    
    <title>Contact Us</title>
</head>

<body>
    <!-- Header section -->
    <?php include 'Components/header.php'; ?>
    
    <main>
        <!-- Banner image for the contact page -->
        <img src="images/contact2.jpg" alt="contact" width="1500">
        
        <!-- Main content area for contact information -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <!-- Contact Information Section -->
                        <div class="col-4 my-5">
                            <!-- Phone Numbers -->
                            <ul>
                                <li class="list-group-item">
                                    <p class="fs-4 fw-bold">Phone number</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="fs-6 mt-0"><i class="bi bi-telephone fs-5 me-2"></i> +84 241133119</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="fs-6 mt-0"><i class="bi bi-telephone fs-5 me-2"></i> +84 824010101</p>
                                </li>
                            </ul>

                            <!-- Contact Address -->
                            <ul>
                                <li class="list-group-item">
                                    <p class="fs-4 fw-bold mt-5">Contact address</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="fs-6 mt-0"><i class="bi bi-house-door fs-5 me-2"></i>
                                        65 Nguyen Hy Quang - Dong Da - Ha Noi
                                    </p>
                                </li>
                            </ul>

                            <!-- Email Address -->
                            <ul>
                                <li class="list-group-item">
                                    <p class="fs-4 fw-bold mt-5">Email address</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="fs-6 mt-0"><i class="bi bi-envelope fs-5 me-2"></i> bidspirit@gmail.com</p>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact Form Section -->
                        <div class="col-8 mt-5">
                            <p class="fs-6 fw-bold text-center mb-5">Contact us in the way most convenient for you. We are ready to answer all your questions.</p>
                            
                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="YourEmail@gmail.com">
                            </div>
                            
                            <!-- Message Textarea -->
                            <div class="mb-3">
                                <label for="messageInput" class="form-label">Message</label>
                                <textarea class="form-control" id="messageInput" rows="3"></textarea>
                            </div>
                            
                            <!-- Submit Button -->
                            <button type="button" class="btn-dark btn px-5">Contact us</button>
                        </div>
                    </div>

                    <!-- Google Maps Integration for the contact address -->
                    <div class="row">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2500.093544445589!2d105.82412858663054!3d21.01935869199608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab784c389a67%3A0xf9f0ec80bba47839!2zNjUgUC4gTmd1eeG7hW4gSHkgUXVhbmcsIENo4bujIEThu6thLCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpIDEwMDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1728151417655!5m2!1sen!2s" width="760" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="my-5" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer section -->
    <?php include 'Components/footer2.php'; ?>
</body>

</html>
