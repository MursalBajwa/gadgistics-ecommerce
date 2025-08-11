




<?php session_start(); ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Contact Us</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Header */
        header {
            text-align: center;
            padding: 2rem 0;
      
            color: #fff;
            margin-bottom: 1rem;
        }

        /* Contact Form Container */
        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 1rem;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Form Group */
        .form-group {
            margin-bottom: 1rem;
        }

        /* Form Labels */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #000;
        }
        h1
        {
            color: black;
            text-align: center;
        }


        /* Form Inputs */
        input, textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        /* Submit Button */
        .btn-submit {
            display: inline-block;
            width: 100%;
            padding: 0.8rem;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            text-transform: uppercase;
        }

        .btn-submit:hover {
            background-color: #444;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 1rem 0;
            background-color: #333;
            color: #fff;
            margin-top: 2rem;
            font-size: 0.9rem;
        }


    </style>
</head>
<body>
    <!-- Content here -->
    <div class="container">
		<div class="header-content">

			<div class="row">

				<div class="col-lg-12 col-12">
					
						  <nav class="navbar navbar-expand-lg navbar-light">
						    <div class="container-fluid">
						      <a class="navbar-brand" href="#">
						      	<div class="logo">

								 	<img class="logo-image" src="logo.png">
								 	<img class="logo-name" src="logo-name.png">

								 </div>
							</a>
									<br>

			

						      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						        <span class="navbar-toggler-icon"></span>
						      </button>
						      <div class="collapse navbar-collapse" id="navbarNav">
						        <ul class="navbar-nav ms-auto">
								<?php
								

									if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {
										echo '<li class="nav-item">
												<a class="nav-link" aria-current="page" href="admin.php">Admin</a>
											</li>';
									}
									?>

						          <li class="nav-item">
						            <a class="nav-link" aria-current="page" href="Webpage 3.0.php">Home</a>
						          </li>
						          <li class="nav-item">
						            <a class="nav-link" href="Store.php">Store</a>
						          </li>
						          <li class="nav-item">
						            <a class="nav-link" href="About.php">About</a>
						          </li>
                                  <li class="nav-item">
						            <a class="nav-link" href="ContactUs.php">Contact</a>
						          </li>
								  <?php
			
										
									if ((isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == false) || !isset($_SESSION['is_admin'])) {
										echo '<li class="nav-item">
												<a class="nav-link" href="Cart.php"><img src="Cart2.png" width="27px" height="27px"></a>
											</li>';
									}
									?>
						        
						        </ul>
						      </div>
						    </div>
						  </nav>

				</div>
			</div>
			
			</div>
		</div>

    
        <?php
// Check if 'sent' parameter exists in the URL
if (isset($_GET['sent']) && $_GET['sent'] === 'true') {
    // Show the success popup
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Message has been sent successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

if (isset($_GET['sent']) && $_GET['sent'] === 'false') {
    // Show the failure popup
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> Failed to send the message. Please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
?>


    <h1>Contact Us</h1>
    </header>
    <main>
        <div class="contact-container">
        <form id="contactForm" class="contact-form" action="ContactUs_email.php" method="POST">
                <div class="form-group" >
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Your Company. All Rights Reserved.</p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {




        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>









