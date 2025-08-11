<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="Styles1.css">
		<title>Gadgistics</title>
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

		 <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">


	
		<div class="upperline">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 col-12">
					<div class="AttractiveOffer">
					<p>Free shipping 30 Days return or refund guarantee</p>
					
					</div>
				</div>
				
				<div class="col-lg-6 col-12">
					<nav class="RegisterNav">
						<ul class="group">
							<li><a href="#" class="signup">Sign Up</a></li>
							<li><a href="#" class="login">Login</a></li>
				<form id="logoutform" method="post" action="Logout.php">
				    <li style="float: right;">
				        <button type="submit" name="logout_button" value="logout" class="logout" style="display:none; background-color:black; color:white; border: 3px solid white; border-radius: 10px; font-size: 90%;">Logout</button>
				    </li>
				</form>

<?php
if (session_status() === PHP_SESSION_NONE) {
									    session_start();
}
if (isset($_SESSION['logout_success']) && $_SESSION['logout_success'] === true) {
    echo "<script>const logoutSuccess = true;</script>";
    unset($_SESSION['logout_success']); // Clear session variable after use
} else {
    echo "<script>const logoutSuccess = false;</script>";
}
?>


<?php
if (session_status() === PHP_SESSION_NONE) {
									    session_start();
}
if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {
    echo "<script>const is_admin = true;</script>";
    
} else {
    echo "<script>const is_admin = false;</script>";
}
?>








							<div id="Signup">
								<h2>Sign Up</h2>
								    <form id="SignupForm" method="post" action="SignUp.php">
								        <!-- Name input -->
								        
									        <label for="Signupname">Full Name:</label><br>
									        <input type="text" id="Signupname" name="name" placeholder="John Doe" required><br><br>
								    

								        <!-- Email input -->
								        <div class="input">

									        <label for="Signupemail">Email:</label><br>
									        <input type="email" id="Signupemail" name="email" placeholder="john.doe@example.com"required><br><br>
								    	</div>

								        <!-- Password input -->
								        <div class="input">

									        <label for="Signuppassword">Password:</label><br>
									        <input type="password" id="Signuppassword" name="password" required><br><br>
								        </div>
								        <!-- Date of Birth input -->
								        <div class="input">

									        <label for="Signupdob">Date of Birth:</label><br>
									        <input  id="Signupdob" name="dob" 	><br><br>
								    	</div>
								        <!-- Submit button -->
								        <div class="input">
								        <input type="submit" id="SignupBtn">

								    </div>
								    </form>
							</div>


							<?php
if (session_status() === PHP_SESSION_NONE) {
									    session_start();
}
if (isset($_SESSION['signup_success']) && $_SESSION['signup_success'] === true) {
    echo "<script>const signupSuccess = true;</script>";
    unset($_SESSION['signup_success']); // Clear session variable after use
} else {
    echo "<script>const signupSuccess = false;</script>";
}
?>





							<div id="Login">
								<h2>Login</h2>
								    <form  id="LoginForm" method="post" action="Login.php">
								       
								    

								        <!-- Email input -->
								        <div class="input">

									        <label for="Loginemail">Email:</label><br>
									        <input type="email" id="Loginemail" name="email" placeholder="john.doe@example.com" required><br><br>
								    	</div>

								        <!-- Password input -->
								        <div class="input">

									        <label for="Loginpassword">Password:</label><br>
									        <input type="password" id="Loginpassword" name="password"  required><br><br>
								        </div>
								       

									        
								        <!-- Submit button -->
								        <div class="input">
								        <input type="submit" id="LoginBtn" value="Login">
								    </div>
								    </form>
							</div>

						</ul>
					</nav>

							<?php 
							if (session_status() === PHP_SESSION_NONE){
										session_start();
							}
							if(isset($_SESSION['login_success']) && $_SESSION['login_success'] === true)
							{
								echo "<script>const loginSuccess = true;</script>";
							} else {
								echo "<script>const loginSuccess = false;</script>";
							}
							?>

							<?php
							if (session_status() === PHP_SESSION_NONE) {
								session_start();
								}
								if (isset($_SESSION['invalid']) && $_SESSION['invalid'] === true) {
								echo "<script>const invalid = true;</script>";
								unset($_SESSION['invalid']); // Clear session variable after use
								} else {
								echo "<script>const invalid = false;</script>";
								}
								?>

					
				</div>

			</div>

		</div>
		</div>



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
									if (session_status() === PHP_SESSION_NONE) {
										session_start();
										}

									if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true) {
										echo '<li class="nav-item">
												<a class="nav-link" aria-current="page" href="admin.php">Admin</a>
											</li>';
									}
									?>

						          <li class="nav-item">
						            <a class="nav-link" aria-current="page" href="#">Home</a>
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
									if (session_status() === PHP_SESSION_NONE) {
										session_start();
										}
										
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
		
		
	</head>
	<body>

	<?php
// Check if 'sent' parameter exists in the URL
if (isset($_GET['signup']) && $_GET['signup'] === 'true') {
    // Show the success popup
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> SignUp successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

if (isset($_GET['signup']) && $_GET['signup'] === 'false') {
    // Show the failure popup
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> SignUp Failed . Please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}

if (isset($_GET['duplicate']) && $_GET['duplicate'] === 'true') {
    // Show the failure popup
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Oops!</strong> SignUp failed account already exist. Please try again.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
?>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

			
				<div class="main-poster">
				<div class="container">
					<div class="row">

						<div class="col-lg-12 col-12">
							<div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
								  <div class="carousel-inner">
								    <div class="carousel-item active" data-bs-interval="3000">
								      <img src="Poster.jpg" class="d-block w-100" alt="...">
								    </div>
								    <div class="carousel-item" data-bs-interval="3000">
								      <img src="Poster2.jpg" class="d-block w-100" alt="...">
								    </div>
								    <div class="carousel-item"  data-bs-interval="3000">
								      <img src="Poster3.jpg" class="d-block w-100" alt="...">
								    </div>
								  </div>
								  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
								    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Previous</span>
								  </button>
								  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
								    <span class="carousel-control-next-icon" aria-hidden="true"></span>
								    <span class="visually-hidden">Next</span>
								  </button>
								</div>

							<div class="poster-Button d-none d-md-block">
								<a href="Store.php" id="shopNowLink">Shop Now</a>
								<div id="popup" style="display: none;">
									<p id="shopNotification"></p>
								</div>
							</div>
						</div>
							
						</div>
					</div>
			</div>

		


			<div class="discount">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-12">
								<p class="title" >Amazing Discounts</p>
				</div>
					</div>
						</div>




				<div class="discount-img">

			
					
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-12">
								<a ><img class="Discount1" src="Discount1.jpg"></a>
							</div>
							<div class="col-lg-4 col-12">
								<a ><img class="Discount2" src="Discount2.jpg"></a>
							</div>
							<div class="col-lg-4 col-12">
								<a ><img class="Discount3" src="Discount3.jpg"></a>
							</div>
						</div>
					</div>
			

				</div>
			</div>

			<div class="Categories">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-12">
							<p class="title">Gadgets Categories</p>
				</div>
					</div>
						</div>
			</div>

				<div class="categories-img">

				
					<div class="category1">
						<div class="container">
								<div class="row">
									
										<div class="col-lg-6 col-12">
									
										<a href="Categorize_product.php?category=Smartphones%20%26%20Accessories
"><img src="Smartphones&Accessories.jpg"></a>
									</div>
								
									<div class="col-lg-6 col-12">
										<h1>Smartphones & Accessories</h1>
										<p>Mobile phones, screen protectors, phone cases, chargers, and wireless earbuds.</p>
									</div>
								</div>
							</div>
						</div>
										<div class="category2">
						<div class="container">
								<div class="row">
										<div class="col-lg-6 col-12">
											<h1>Wearable Technology</h1>
											<p>Smartwatches, fitness trackers, VR headsets, and smart glasses.</p>
										</div>
										<div class="col-lg-6 col-12">
											<a href="Categorize_product.php?category=Wearable%20Technology"><img src="Wearable Technology.jpg"></a>
										</div>
									</div>
							</div>
					</div>
					<div class="category3">
							<div class="container">
								<div class="row">
										<div class="col-lg-6 col-12">
											<a href="Categorize_product.php?category=Home%20Automation%20Devices"><img src="Home Automation Devices.jpg"></a>
										</div>

										<div class="col-lg-6 col-12">
											<h1>Home Automation Devices</h1>
											<p>Smart speakers, smart lights, security cameras, and smart thermostats.</p>
										</div>
								</div>
							</div>
					</div>
					<div class="category4">
							<div class="container">
								<div class="row">
										<div class="col-lg-6 col-12">
											<h1>Computers & Peripherals</h1>
											<p>Laptops, tablets, keyboards, mice, monitors, and external storage devices.</p>
										</div>
										<div class="col-lg-6 col-12">
											<a href="Categorize_product.php?category=Computers%20%26%20Peripherals"><img src="Computers&Peripherals.jpg"></a>
										</div>

					</div>
				</div>
			</div>
		</div>
			

				</div>
			
			</div>

			<div Class="Container">
				<div class="row">
					<div class="col-lg-8">

					

								
							<div class="Features">	
									<div Class="Container">
										<div class="row">
											<div class="col-lg-12 col-12">
											 	<h2>Features</h2> 
											 </div>
										</div>
									</div>

								<div Class="Container">
									<div class="row">
										<div class="col-lg-3 col-6">

											 	<div class="delivery">

											 		<img src="delivery.png" >

												 		<div class="delivery-description">
												 		<p>Fast and Reliable Shipping</p>
												 		</div>
											 	
												 </div>
										</div>
							
								
										<div class="col-lg-3 col-6">

											 	<div class="Return">

												 		<img src="return.png">

												 		<div class="return-description">

												 		<p>Return in 30 Days</p>
												 		</div>
											 		
											 	</div>
										</div>
								
								
								
										<div class="col-lg-3 col-6">
								

											 	<div class="Branded-Products">

												 		<img src="branded.png">

												 		<div class="branded-description">

												 		<p>Branded Products</p>
												 		</div>
									 		
												</div>
										</div>
												

							
										<div class="col-lg-3 col-6">

										 	<div class="Customer-Support">

										 		<img src="costumer-support.png">

										 		<div class="Customer-Support-description">
										 		<p>Exceptional Customer Support</p>
										 		</div>
										 		
										 	</div>
									
										</div>
								</div>
							
							</div>
						
					</div>
				</div>

							<div class="col-lg-4 col-12">
							
									<aside>
									 <div class="Upcoming">
										<div Class="container">
											<div class="row">
												<div class="col-lg-12">

									 				<h2 style="margin-top: 50px;">Upcoming Stock</h2>
									 			</div>
									 		</div>
									 	</div>
											<ul class="group" id="upcoming">

												<li class="first-product">Apple iPhone 16 (September 9, 2024)</li>
												
												<li class="second-product">Cooler Master MasterHub (Late 2024)</li>
										
												<li class="third-product">Google Pixel 9 Pro XL (September 2024)</li>
										
												<li class="fourth-product">Cellecor 5G Smartphones (September 2024)</li>
										
												<li class="fifth-product">ASUS Gaming Keyboards (August 2024)</li>
											</ul>
									 	
									 </div>
									 </aside>
							</div>
					</div>
				</div>


			<div class="Reviews ">

			<div Class="container">
				<div class="row">
					<div class="col-lg-12 col-12">	
						<h1>Content Creator Reviews</h1>
					</div>
				</div>
			</div>

			<div Class="container">
						<div class="row">
								<div class="col-lg-4 col-12">	
									<div class="Video1">
										<video controls autoplay muted loop>
											 <source src="video1.mp4" type="video/mp4">
									        <source src="video1.webm" type="video/webm">
									        <source src="video1.ogg" type="video/ogg">
									        Your browser does not support the video tag.
							    
										</video>
										
									</div>
								</div>
								<div class="col-lg-4 col-12">	
									<div class="Video2">
										<video controls autoplay muted loop>
											 <source src="video2.mp4" type="video/mp4">
									        <source src="video2.webm" type="video/webm">
									        <source src="video2.ogg" type="video/ogg">
									        Your browser does not support the video tag.
							    
										</video>
									
									</div>
								</div>
								<div class="col-lg-4 col-12">	
									<div class="Video3">

										<video controls autoplay muted loop>
											 <source src="video3.mp4" type="video/mp4">
									        <source src="video3.webm" type="video/webm">
									        <source src="video3.ogg" type="video/ogg">
									        Your browser does not support the video tag.
							    
										</video>
								
									</div>
								</div>
					</div>
			</div>
			
			</div>




			 <script src="script.js" defer></script>
			
		

		</body>

		<footer>


				<div class="actual-footer">

				<div Class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
											<div class="head-office">
											
						
													<h1>Head Office</h1>
													<ul>
															<li>Location: 123 Tech Avenue, Silicon City, CA 90210</li>
															<li>Function: Company operations hub</li>
															<li>Facilities: Modern tech and amenities</li>
															<li>Team: Experts in sourcing, marketing, and support</li>
															<li>Contact: head.office@gadgistics.com | (555) 987-6543</li>
															<li>Hours: Mon-Fri, 9 AM - 6 PM (PST)</li>
															<li>Mission: Drive tech innovation and excellence</li>
													</ul>

													<div class="location">

														<div>
														<button type="button" id="LocationBtn"> 
																Our Location
														</button>
														</div>

														<iframe id="Location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108839.154561161!2d74.26443078250543!3d31.51801870000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905e5ef1ac92b%3A0x193a919500cbf1f6!2sGADGET%20WORLD!5e0!3m2!1sen!2sus!4v1726734483545!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
														
													</div>	
														
												</div>
						</div>

												<div class="col-lg-4 col-12">
													<div class="feedback" id="feedbackForm">
														
														<h1>Feedback</h1>
														<aside>
															<ul class="group">
															<form action="#">
															<div>
																<label for="thename">Full Name:</label>
															</div>
															<div>
															<input type="text" name="myname" id="thename" size="40" placeholder="John Doe">
															<span id="errorMessageName" style="color:red;"></span>
															</div>
															<br>
															<div>
																<label for="theemail">Email:</label>
															</div>
															<div>
															<input type="text" name="myemail" id="theemail" size="40" placeholder="john.doe@example.com">
															<span id="errorMessageEmail" style="color:red;"></span>
															</div>
															<br>
															<div>
																<label for="subject">Subject:</label>
															</div>
															<div>
															<input type="text" name="mysubject" id="subject" size="40">
															<span id="errorMessageSubject" style="color:red;"></span>
															</div>
															<br>
															<div>
																<label for="comment">Comment:</label>
															</div>
															<div>
															<textarea id="comment" ></textarea>
															<span id="errorMessageComment" style="color:red;"></span>
															</div>
															<br>

															<div class="button">
																<button type="button" id="submitBtn"> 
																Submit
																</button>
																
															</div>
														</form>



														<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "website_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if required fields are set
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['comment'])) {
    // Sanitize input to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = isset($_POST['subject']) ? $conn->real_escape_string($_POST['subject']) : ''; // Subject is optional
    $comment = $conn->real_escape_string($_POST['comment']);

    // Insert the comment into the database
    $sql = "INSERT INTO comments (Com_name, Com_email, Com_subject, Com_describtion) VALUES ('$name', '$email', '$subject', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "Comment submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 

$conn->close();
?>






														</ul>

														<p id="Greeting" ></p>
													</aside>
												
													</div>
												</div>
								</div>
						</div>
				</div>



				<div class="social-icons">	
				<div Class="container">
					<div class="row">
						<div class="col-lg-12 col-12">
							<h1  id="animateBox" style="position:relative; text-align: center;">Join Us on Social Media!</h1>	
						</div>
					</div>
				</div>	

				<div Class="icons">
				<div Class="container">
					<div class="row">
						<div class="col-lg-12 col-12">				
							<a href="#"><img src="whatsapp.png"></a> 
							<a href="#"><img src="facebook.png"></a> 
							<a href="#"><img src="twitter.png"></a>  
							<a href="#"><img src="instagram.png"></a>  
						</div>
					</div>
				</div>
				</div>
				</div>


				<div class="copyright">
					<div Class="container">
						<div class="row">
							<div class="col-lg-6 col-12">	
								<p>&copy;2024-2029 Gadgistics | All rights reserved.</p>
							</div>
							<div class="col-lg-6 col-12">
								<p id="Visits"></p>
							</div>
						</div>
					</div>
				</div>

				<div class="copyright">
					<div Class="container">
						<div class="row">
							<div class="col-lg-12 col-12">	
					
								
								<div>
									<ul id="comments">
										
									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>


	      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	       <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		</footer>

</html>








    <script >



        // JavaScript/jQuery to handle form submission and fetching comments
$(document).ready(function() {
    $('#submitBtn').click(function() {
        // Get form data
        var name = $('#thename').val();
        var email = $('#theemail').val();
        var subject = $('#subject').val();
        var comment = $('#comment').val();
        
        // Send data via POST to send_comment.php
        $.post('Webpage 3.0.php', { name: name, email: email, subject: subject, comment: comment }, function(response) {
            // If message sent successfully, clear the comment box and refresh the comments list
            $('#comment').val('');
            $('#commentsList').load('Webpage 3.0.php');
        });
    });

            // Send AJAX request to fetch comments
            $.ajax({
                url: 'fetch_comments.php', // PHP file that fetches comments
                type: 'GET',
                success: function(response) {
                    // Append the comments to the commentsList div
                    $('#comments').html(response);
                },
                error: function(xhr, status, error) {
                    // Show error in case of failure
                    alert('Error: ' + error + '\nStatus: ' + status + '\nResponse: ' + xhr.responseText);
                }
            });


                // Fetch the latest comments every 2 seconds
		    setInterval(function() {
		        $('#comments').load('fetch_comments.php');
		    }, 2000);






		if (loginSuccess) {
			$('.signup').hide();
			$('.login').hide();
			$('.logout').show();
		}

		if (invalid)
		{
			alert("login failed!");
		}


		if(logoutSuccess)
		{
			alert("logout successful!");
			$('.signup').show();
			$('.login').show();
			$('.logout').hide();
		}




});


			
  
    </script>



    <style>

    	/* Styling for the comment card */
.comment {
  background-color: white; /* Dark background for the card */
  color: black; /* Text color */
  border-radius: 10px; /* Rounded corners for the card */
  padding: 20px; /* Padding inside the card */
  margin: 10px 0; /* Margin between cards */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
  transition: transform 0.3s ease; /* Smooth hover transition */
}

/* Hover effect to elevate the card */
.comment:hover {
  transform: translateY(-5px); /* Card moves up slightly */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
   background-color: grey;
}

/* Styling for the name and email */
.commentname {
  font-size: 18px;
  font-weight: bold;
}

.commentemail {
  font-size: 14px;
  color: #bbb; /* Light grey for email */
}

/* Styling for the subject */
.commentsubject {
  font-size: 16px;
  margin-top: 10px;
}

.commentsubjectheading {
  font-weight: bold;
}

/* Styling for the comment text */
.commenttext {
  font-size: 14px;
  margin-top: 10px;
  line-height: 1.8; /* Improved readability */
}

/* Add a subtle divider between comment parts */
.comment p {
  margin: 5px 0;
}

/* Optional: Add an inner border or border-top to separate different comments */
.comment + .comment {
  border-top: 1px solid #444; /* Light grey line between comments */
}


    </style>






