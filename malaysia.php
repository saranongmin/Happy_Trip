<?php

if(isset($_POST['submit']))  
 { 
    $trip_type =$_POST['trip_type'];
    $place =$_POST['place'];
    $start_date =$_POST['start_date'];
    $end_date =$_POST['end_date'];
    $hotel_type =$_POST['hotel_type'];
    $transport=$_POST['transport'];
    $visa =$_POST['visa'];
    $guest=$_POST['guest'];
    $note =$_POST['note'];
    $phone=$_POST['phone'];
    $name =$_POST['name'];
$email =$_POST['email'];
$to ='sara.nongmin@gmail.com';
$subject ="New Booking Info";
$from ="Happy Trip";
	$mailHeaders = "From: " .$from . "<". $email .">\r\n";
	$msg =
		"Name of Booking Holder:$name\n".
	"Phone No of Booking Holder:$phone\n".
	"Email Address:$email\n".
	"Trip Type:$trip_type\n".
	"Destination Name:$place\n".
	"Start Date:$start_date\n".
	"End Date:$end_date\n".
	"Hotel Type:$hotel_type\n".
	"Transportation Type:$transport\n".
	"Visa Support:$visa\n".
	"No of Guest:$guest\n".
	"Additional Note:$note\n"
	;
	if(mail($to,$subject,$msg,$mailHeaders)){
echo "Thank you for your Booking";
header("refresh:2;url=thank.php");

}
else{

echo "Please Try again later.";
}
 
     
 }

?>

<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Happy Trip</title>
    <link rel = "icon" type = "image/jpg" href = "ui/frontend/images/logo.webp">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
<meta name="agd-partner-manual-verification" />
  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- PAyment.css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   

    
      <!-- Animate.css -->
    <link rel='preload' href='ui/frontend/css/animate.css' as='style' onload="this.onload=null;this.rel='stylesheet'">

    <noscript><link rel="stylesheet" href="ui/frontend/css/animate.css"></noscript>
    <!-- Icomoon Icon Fonts-->
        <link rel='preload' href='ui/frontend/css/icomoon.css' as='style' onload="this.onload=null;this.rel='stylesheet'">

    <noscript><link rel="stylesheet" href="ui/frontend/css/icomoon.css"></noscript>
    <!-- Bootstrap  -->
     <link rel='preload' href='ui/frontend/css/bootstrap.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="ui/frontend/css/bootstrap.css"></noscript>

    <!-- Magnific Popup -->
    <link rel='preload' href='ui/frontend/css/magnific-popup.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="ui/frontend/css/magnific-popup.css"></noscript>

    <!-- Flexslider  -->
    <link rel='preload' href='ui/frontend/css/flexslider.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="ui/frontend/css/flexslider.css"></noscript>

    <!-- Owl Carousel -->
    <link rel='preload' href='ui/frontend/css/owl.carousel.min.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="ui/frontend/css/owl.carousel.min.css"></noscript>
    <link rel='preload' href='ui/frontend/css/owl.theme.default.min.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="ui/frontend/css/owl.theme.default.min.css"></noscript>
    
    <!-- Date Picker -->
    <link rel='preload' href='ui/frontend/css/bootstrap-datepicker.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="ui/frontend/css/bootstrap-datepicker.css"></noscript>
    <!-- Flaticons  -->
    <link rel='preload' href='ui/frontend/fonts/flaticon/font/flaticon.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="ui/frontend/fonts/flaticon/font/flaticon.css"></noscript>

    <!-- Theme style  -->
    <link rel='preload' href='ui/frontend/css/style.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="ui/frontend/css/style.css"></noscript>

    <!-- Modernizr JS -->
    <script src="ui/frontend/js/modernizr-2.6.2.min.js"></script>
    

    </head>
<body>
  <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="colorlib-logo"><a href="index.php"><img src="ui/frontend/images/logo.webp" alt="" width="100px" height="100px"></a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                 <li class="active"><a href="index.php">Home</a></li>
              <li class="active"><a href="about.html">About Us</a></li>

               <li class="has-dropdown">
                                    <a href="#">Services</a>
                                    <ul class="dropdown">
                                        
                                        <li><a href="airport.html">Airport Pick & Drop</a></li>
                                        <li><a href="flight-booking.html">Flight Booking</a></li>

                                        <li><a href="hotel-booking.html">Hotel Booking</a></li>
                                  <li><a href="visa-assistance.html">Visa Assistance</a></li>

                                    </ul>
                                </li>

                                 <li class="has-dropdown">
                                    <a href="#">Packages</a>
                                    <ul class="dropdown">
                                        
                                   <li><a href="tours.html">International Package</a></li>
                                      <li><a href="domestic-package.html">Domestic Package </a></li>

                                    </ul>
                                </li>
                                
                                <li class="has-dropdown">
                                    <a href="#">Destination</a>
                                    <ul class="dropdown">
                                        
                                        <li><a href="australia.php">Australia</a></li>
                                         <li><a href="bali.php">Bali</a></li>
                                               <li><a href="bandarban.php">Bandarban</a></li>

                                        <li><a href="bhutan.php">Bhutan</a></li>
                                        <li><a href="cambodia.php">Cambodia</a></li>
                                      <li><a href="cox-bazar.php">Cox's Bazar</a></li>

                                        
                                        <li><a href="malaysia.php">Malaysia</a></li>
                                        <li><a href="maldives.php">Maldives</a></li>
                                        <li><a href="myanmar.php">Myanmar</a></li>
                                        <li><a href="mauritious.php">Mauritious</a></li>
                                            <li><a href="nepal.php">Nepal</a></li>
                                        <li><a href="srilanka.php">Srilanka</a></li>
                                        <li><a href="singapore.php">Singapore</a></li>
                                         <li><a href="india.php">Shillong</a></li>
                                        <li><a href="sylhet.php">Sylhet</a></li>
                                        <li><a href="sreemangal.php">Sreemangal</a></li> 
                                          <li><a href="thailand.php">Thailand</a></li>

                                        <li><a href="vietnam.php">Vietnam</a></li>
                                        

                                            
                                 </ul>
                             </li>
                                <li><a href="contact.php">Lets Talk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(ui/frontend/images/headers/header3.webp);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
<h2>Discover beautiful places near you</h2>
                                    <h1>We are the best guide for your happy trip</h1>

				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap-division">
									<div class="col-md-12 col-md-offset-0 heading2 animate-box">
										<h2>Welcome To - Malaysia</h2>
									</div>
									<div class="row">

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
                            <div class="room-img" style="background-image: url(ui/frontend/images/malaysia/batu.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Batu Caves</h2>
															<p>
                                Cathedral Cave – the largest and most popular cavern in Batu Caves – houses several Hindu shrines beneath its 100-metre-high arched ceiling. At the foot of Batu Hill are two other cave temples – the Art Gallery Cave and Museum Cave – which houses numerous Hindu statues and paintings.
                              </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
						<div class="room-img" style="background-image: url(ui/frontend/images/malaysia/johor.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Johor Bahru</h2>
															<p>
                                Johor Bahru is a Malaysian town that sits just across from the border with Singapore. As is the case with many border towns, it had a rather seedy reputation for years before cleaning up its act and developing a great range of new family friendly attractions that have helped its popularity to soar.
                              </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/malaysia/firefly.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Firefly Valley Leisure Park, Johor</h2>
															<p>
                                Fireflies are not a common sight in the cities but these beauties can be admired in all its glory in Kota Tinggi, just two hours from Singapore or four hours from Kuala Lumpur by car. The Firefly Valley Leisure Park is one of two parks in Kota Tinggi that promotes itself as an exclusive spot for visitors to catch the dazzling bugs in action.
                              </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/malaysia/tarengu.webp);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>The Perhentians, Terengganu</h2>
															<p>
                                Pulau Perhentian, meaning 'stopover island', is not to be missed. Situated 21km off the coast of Terengganu, it consists of the islands of Pulau Perhentian Besar and Pulau Perhentian Kecil. Covered by unspoilt jungle, windswept palms, powdery white beaches and surrounded by sapphire blue waters, Pulau Perhentian is a sanctuary for fishermen, migratory birds and of course, discerning holiday- makers.

                               </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/malaysia/malaca.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Malacca City</h2>
															<p>
                                Melaka City preens with its wealth of colourful trishaws, home-grown galleries and crimson colonial buildings. The vibrant Jonker Walk Night Market provides music, shopping and street-food galore there on weekends
                              </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/malaysia/danum.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Danum Valley</h2>
															<p>
                                The area holds unique status in the sense that before it became a conservation area there were no human settlements within the area, meaning that hunting, logging and other human interference was non-existent, making the area almost unique.
                              </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/malaysia/cameron.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>The Cameron Highlands, Pahang</h2>
															<p>
                                Most of the vegetables and fruits supply come from Cameron Highlands in Malaysia, you will be able to buy the freshest vegetables and fruits straight from the vegetable farms. There are also sold in markets in the towns. There are also Strawberry Farms where you can 'pick-your-own-strawberry' and get many innovative strawberry products like strawberry chocolate, smoothies and even dried strawberry.

                               </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/malaysia/pulau.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Pulau Tioman, Pahang</h2>
															<p>
                                Pulau Tioman, Pahang, Malaysia is about 56 kilometres Southeast of the state. Tioman is the largest island that forms part of the volcanic group of islands known as the Seri Buat Archipelago.

                              </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/malaysia/perak.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Ipoh, Perak</h2>
															<p>
                                Ipoh makes an ideal city to split the long journey. One of the top reasons to visit Ipoh is to experience the region’s cave temples. Chinese Buddhists found the cavernous space inside Ipoh’s limestone cliffs to be the ideal environment for a temple.
                              </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/malaysia/perak1.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Pangkhor Island, Perak</h2>
															<p>
                                Pangkor is just 8 square kilometres, but you’ll be surprised how much you can do, and what you can see. Of course, sun baking on the beach is the most popular pastime for visitors, with Nipah and Coral beach often dotted with holiday makers. There are also two small islands nearby — Giam and Mentagor — that are perfect for snorkelling with an array of coral, sea cucumbers and other sea life to be found. If you’re more adventurous, grab a kayak and circumnavigate the islands.
                              </p>
														</div>
													</div>
												</div>
											</div>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">


<div class="side search-wrap animate-box">
							
							<h3 class="sidebar-heading">Customize Your Trip</h3>
<form method="post" class="colorlib-form" action="">
				              	<div class="row">
 <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="name">Name</label>
                                    <div class="form-field">
                                      <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                    </div>
                                  </div>
                                </div><div class="col-md-12">
                                  <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <div class="form-field">
                                      <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <div class="form-field">
                                      <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                                    </div>
                                  </div>
                                </div>
                                   <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="trip_type">Choose Trip</label>
                                    <div class="form-field">
                                      <i class="icon icon-arrow-down3"></i>
                                      <select name="trip_type" id="trip_type" class="form-control">
                                        <option value="Couple Trip">Couple Trip</option>
                                        <option value="Group Trip">Group Trip</option>
                                        <option value="Family Trip">Family Trip</option>
                                        <option value="Corporate Trip">Corporate Trip</option>
                                       
                                      </select>
                                    </div>
                                  </div>
                                </div>

                                 <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="place">Choose Destination</label>
                                    <div class="form-field">
                                      <i class="icon icon-arrow-down3"></i>
                                      <select name="place" id="place" class="form-control">
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Srilanka">Srilanka</option>
                                         <option value="Nepal">Nepal</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Singapore">Singapore</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                 <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" name="start_date"id="start_date" class="form-control date" placeholder="Start date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" name="end_date" id="end_date" class="form-control date" placeholder="End date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="hotel_type">Hotel Type</label>
                                    <div class="form-field">
                                      <input type="text" name="hotel_type" id="hotel_type" class="form-control" placeholder="Hotel Type">
                                    </div>
                                  </div>
                                </div>
				               <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="transport">Transportation Type</label>
                                    <div class="form-field">
                                      <input type="text" name="transport" id="transport" class="form-control" placeholder="Transportation Type">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="visa">Visa Support</label>
                                    <div class="form-field">
                                      <input type="text" name="visa" id="visa" class="form-control" placeholder="Visa Support">
                                    </div>
                                  </div>
                                </div>
                  <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="guest">No of Guest</label>
                                    <div class="form-field">
                                      <input type="text" name="guest" id="guest" class="form-control" placeholder="No of Guest">
                                    </div>
                                  </div>
                                </div>		
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="note">Additional Note</label>
                                    <div class="form-field">
                                      <textarea name="note" id="note" rows ="3" class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                               
                                <div class="col-md-12">
				                  <button type="submit" name="submit" id="submit" value="submit" class="btn btn-primary btn-block">Confirm Trip</button>
				                </div>
				              </div>
				            </form>



							</div>
							
						
							
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Other Destinations</h3>
										<form method="post" class="colorlib-form-2">
										   <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="australia.php">Australia</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="bhutan.php">Bhutan</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="bandarban.php">Bandarban</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="cambodia.php">Cambodia</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="cox-bazar.php">Cox's Bazar</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="india.php">India</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="malaysia.php">Malaysia</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="maldives.php">Maldives</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="myanmar.php">Myanmar</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
										<h4 class="place"><a href="nepal.php">Nepal</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="sylhet.php">Sylhet</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="singapore.php">Singapore</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="sreemangal.php">Sreemangal</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="srilanka.php">Srilanka</a></h4>
												</label>
										   </div>
										   <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
													<h4 class="place"><a href="thailand.php">Thailand</a></h4>
												</label>
										   </div>
										    <div class="form-check">
										      <input type="checkbox" class="form-check-input" id="exampleCheck1">
										      <label class="form-check-label" for="exampleCheck1">
								<h4 class="place"><a href="vietnam.php">Vietnam</a></h4>
												</label>
										   </div>
										</form>
									</div>
								</div>
							</div>
						

						</div>
					</div>
				</div>
			</div>
		</div>


<div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>
        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
<div class ="col-md-12 colorlib-widget">
    <center><h4>Our Offices</h4></center>
    <hr>
</div>
                    <div class="col-md-4 colorlib-widget">
                        <h4>Bhutan</h4>
                        <ul class="colorlib-footer-links">
                            <li>Jattu Complex, Chang Lam,<br> 
1st Floor, 
Post Box # 1360,<br> 
Thimphu, Bhutan 11001</li>
<li>Mobile No : +975 77205558</li>
</ul>
                            </div>
                            <div class="col-md-4 colorlib-widget">
                            <h4>Thailand</h4>
                        <ul class="colorlib-footer-links">

                            <li>252/61, SV Place
Room 315, <br> Soi Vibhavadi 70,
Vibhavadi Rangsit Road,<br>
Bangkhen Laksi, 
Bangkok 10210</li>
<li>Cell : +66909547404</li>
</ul>
</div>
                            <div class="col-md-4 colorlib-widget">

<h4>Bangladesh</h4>
                        <ul class="colorlib-footer-links">

                            <li>House-5/4, 3rd Floor, Lalmatia,<br> Block-A, Dhaka, Bangladesh</li>
                            <li>WhatsApp on : +88 01730722842</li>
                            <li>Email: booking@happytrip.org</li>
                            
                        </ul>
                    </div>
                    

                    <div class="col-md-4 colorlib-widget">
                      <hr>  <h4>Payment Method</h4>
                        <p style="color:#fff">
                           
                               <i class="fa fa-cc-mastercard fa-3x"></i>
                               <i class="fa fa-cc-visa fa-3x"></i>
                                <i class="fa fa-cc-paypal fa-3x"></i>
                                
                                
                        </p>
                    </div>
                    <div class="col-md-4 colorlib-widget">
                        <hr><h4>Follow Us on</h4>
                        
                        <p>
                            <ul class="colorlib-social-icons">
                               
                                <li><a href="https://www.facebook.com/officialhappytrip/"><i class="icon-facebook" style="color:#fff
;"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/trip-planner-international/?viewAsMember=true"><i class="icon-linkedin"  style="color: #fff
;"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCWgLLhVxUb2Agxus2Y7m7fw?view_as=subscriber"><i class="icon-youtube"
                                 style="color:red"></i></a></li>
                            </ul>
                        </p>
                    </div>
                    
                    <div class="col-md-4 colorlib-widget">
                       <hr> <h4>Our Partners</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="http://affinitybhutantravel.com/">Affinity Bhutan Travel</a></li>
                                <li><a href="https://www.agoda.com/deals?cid=1842907&pcs=8">Agoda</a></li>
                                
                            </ul>
                        </p>
                    </div>
                   

                </div>
                
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
<!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101836351253096"
  theme_color="#0084ff"
  logged_in_greeting="Hi! Welcome to Happy Trip ! How can we help you?"
  logged_out_greeting="Hi! Welcome to Happy Trip ! How can we help you?">
      </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Happy Trip. All Rights Reserved.
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>



      
    <!-- jQuery -->
    <script src="ui/frontend/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="ui/frontend/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="ui/frontend/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="ui/frontend/js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="ui/frontend/js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="ui/frontend/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="ui/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="ui/frontend/js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="ui/frontend/js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="ui/frontend/js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="ui/frontend/js/main.js"></script>





</body>

</html>
