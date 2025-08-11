<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Styles1.css">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="script.js" defer></script>
</head>
<body>
    <div class="container" style="border: 3px;">
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
        

            
    <div class="About">
		
        <div Class="container">
            <div class="row">
                <div class="col-lg-12 col-12">	


                    <h1 class="title">About Us</h1>
                </div>
            </div>
        </div>


                
                    <div class="first-block">
                        <div Class="container">
                    
                        <div class="row">
                            <div class="col-lg-12 col-12">

                                <div class="para1" id="hoverBoxPara1">
                                    <h1>Welcome to Gadgistics!</h1>
                                    <p>At Gadgistics, we are passionate about bringing you the latest and most innovative gadgets on the market. Established on September 15, 2024, our mission is to provide tech enthusiasts with a seamless shopping experience and a curated selection of cutting-edge devices.</p>
                                    <p>We take pride in offering a diverse range of products, from smart home devices to wearable technology, ensuring that you have access to the best tools to enhance your lifestyle. Our team of experts carefully handpicks each gadget to ensure quality, functionality, and value for money.</p>
                                    <p>Why choose Gadgistics?</p>
                                    <ul>
                                        <li>Wide variety of gadgets tailored for every need and interest.</li>
                                        <li>Competitive prices and exclusive deals.</li>
                                        <li>Exceptional customer support to guide you through your shopping journey.</li>
                                        <li>Fast and reliable shipping to ensure your products reach you on time.</li>
                                    </ul>
                                    <p>Join our community of tech enthusiasts today and stay ahead in the world of technology. Sign up for our newsletter to receive updates on the latest arrivals and special offers!</p>
                                
                            </div>

                            <div class="col-lg-12 col-12">

                                <div class="para2" id="hoverBoxPara2">
                                    <div>
                                        <h1>Our Story</h1>
                                        <p>
                                            Founded by Mursal Bajwa, a tech aficionado with over a decade of experience in the electronics industry, Gadgistics was born out of a desire to create a one-stop shop for all things gadget-related. With a passion for innovation and a vision to bridge the gap between cutting-edge technology and everyday users, Mursal built Gadgistics from the ground up.
                                        </p>
                                        <p>
                                            Our journey began with a simple idea: to make the latest technological advancements accessible to everyone, regardless of their level of expertise. From the very beginning, we have been committed to sourcing only the best gadgets, ensuring that every product we offer is reliable, functional, and designed to enhance your lifestyle.
                                        </p>
                                        <p>
                                            Over the years, Gadgistics has grown into a thriving community of tech enthusiasts who share our love for innovation. Our team of dedicated professionals works tirelessly to stay ahead of industry trends, ensuring that we bring you the newest gadgets as soon as they hit the market.
                                        </p>
                                        <p>
                                            At Gadgistics, we believe in more than just selling gadgets; we aim to build lasting relationships with our customers by offering personalized support, expert guidance, and a shopping experience that exceeds expectations. Whether you're a seasoned tech enthusiast or a curious beginner, we're here to help you find the perfect gadget to suit your needs.
                                        </p>
                                        <p>
                                            Join us on our mission to explore the limitless possibilities of technology and discover how it can make your life more convenient, enjoyable, and exciting. Together, we’re shaping the future of the tech world, one gadget at a time.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="Second-block">
                    <div Class="container">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="para3" id="hoverBoxPara3">
                                    <div>
                                        <h1>
                                            What We Offer
                                        </h1>
                                        <p>
                                            From smart home devices and wearable technology to the newest smartphones and accessories, Gadgistics is committed to offering only the best. We handpick each product to ensure it meets our high standards of quality and performance.
                                        </p>
                                        <p>
                                            Our curated collection includes cutting-edge innovations designed to make your life easier, more efficient, and more enjoyable. Whether you're looking for the latest fitness trackers to keep you motivated, advanced smart home gadgets to automate your living space, or high-performance laptops and tablets for work and play, we've got you covered.
                                        </p>
                                        <p>
                                            We also offer an extensive range of accessories, from sleek and durable phone cases to high-speed charging solutions and audio devices that deliver crystal-clear sound. At Gadgistics, we understand that the right accessory can elevate your tech experience, and that's why we focus on quality, style, and functionality in everything we offer.
                                        </p>
                                        <p>
                                            What sets us apart is our commitment to staying ahead of the curve. Our team of experts is constantly researching and sourcing the newest releases, ensuring that you're always among the first to explore the latest advancements in technology. Whether you're a tech enthusiast, a busy professional, or someone looking for the perfect gift, our diverse selection has something for everyone.
                                        </p>
                                        <p>
                                            Explore our store today and discover the gadgets that will transform the way you live, work, and play. With Gadgistics, you're not just buying a product—you're investing in innovation and quality you can trust.
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="para4" id="hoverBoxPara4">
                                <h1>
                                    Our Promise
                                </h1>
                                <p>
                                    At Gadgistics, customer satisfaction is our top priority. We strive to provide a hassle-free shopping experience with fast shipping, easy returns, and knowledgeable support. Whether you’re looking for the latest tech trends or reliable everyday gadgets, we’ve got you covered. Thank you for choosing Gadgistics. We look forward to serving you!
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


        </div>

        
	      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
           <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>