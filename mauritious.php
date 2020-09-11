
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
										<h2>Welcome To - Mauritius</h2>
									</div>
									<div class="row">

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
                            <div class="room-img" style="background-image: url(ui/frontend/images/mauritious/Trou.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Trou Aux Biches</h2>
															<p>
																Trou-aux-Biches is a small town with a public beach on the northern coast of the island Mauritius in the district of Pamplemousses. According to the World Travel group, the beach is one of the most beautiful on the island. They awarded it the World's Leading Beach Destination at the World Travel Award for 2011.
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
						<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/Plage.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Belle Mare Plage</h2>
															<p>
																Soft white sand, blue sky dotted with white clouds and turquoise lagoon which beckons long soaks…Stylishly renovated Constance Belle Mare Plage offers comfortable accommodations in a lively and cosy atmosphere; choose from one of the 104 Prestige Rooms, 149 Junior Suites, 6 Deluxe Suites, 18 distinctive Villas or the Presidential Villa for a top-notch island holiday. Seize the opportunity to try new things while having fun.  Whether it’s relaxing on the beach or at one of the trendy bars, working out at the gym, pampering at the spa or enjoying water sports, Constance Belle Mare Plage is for an exciting memorable break! 
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/Pereybere.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Pereybere</h2>
															<p>
                                Mauritius is a paradise on earth, with its pristine clear beaches and crisp blue skies. But there is one that stands out from the rest and that is Pereybere Beach in the north of the country. It is just 2 kilometres from Grand Baie and is a very small beach. With breathtaking views and many types of water sports, this beach is very exciting and not a place to miss.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/LaCambuse-2.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>La Cambuse</h2>
															<p>
																La Cambuse Beach is located near the village of Mon Desert, in the southeast part of Mauritius. Although located only a few kilometres from SSR International Airport, La Cambuse Beach is probably one of the least visited beaches in Mauritius – considering its location. Getting there is not particularly difficult, but since it is neither signposted, nor visible on any tourist maps, the majority of visitors to Mauritius never really know that it exists. Though virtually unknown to many, this beautiful beach is actually a public beach with all necessary amenities.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/LeMorne-1.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Le Morne</h2>
															<p>
																Le Morne Brabant is a peninsula at the extreme southwestern tip of Mauritius on the windward side of the island. It is highlighted by an eponymous basaltic monolith with a summit of 556 metres above sea level. The summit covers an area of over 12 hectares. Whether you've only spent a handful of days on the sand in your life or you're a full-blown sunseeker, this breathtaking beach is here on this planet waiting to be discovered by you.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/Beach.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Ilot Gabriel Beach</h2>
															<p>
                                The Ilot Gabriel is among the many gorgeous islands or islets surrounding the main Mauritius mainland, and it’s just as beautiful and worthy of a visit as the main island. Located off the northern coast of Mauritius, an area particularly famous for its catamaran cruises, snorkeling, and scuba diving, this island boasts of the stunning Ilot Gabriel Beach. It is among the most pristine beaches in Mauritius owing to its secluded location. Slowly turning into every honeymooner and adventure seeker’s favorite destination, it makes for a perfect day trip with your loved ones! The beach is a sight for sore eyes with its pretty corals, endless natural beauty, and plenty of snorkeling opportunities. One can also just enjoy a relaxing walk on the beach and simply enjoy that fresh sea breeze and silver sand underneath. 
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/LaCuvette.jpeg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>La Cuvette Beach</h2>
															<p>
																The beauty of La Cuvette is the open space, the many hideaway mini beaches, rocks and cliffs, and above all – the quiet tranquil surroundings. There are plenty of grass to play football on, plenty of benches to while away an afternoon at and plenty of manicured pathways around it all. It has proved itself to be one of the finer beaches that dot the coastline of Mauritius, as it has just about everything and anything one could want, from crystal clear waves to white sandy sores and a refreshing mix of stalls offering the most eccentric and flavorful of local cuisine.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/Black.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Black River Gorges National Park</h2>
															<p>
																Black River Gorges National Park is a national park in the hilly south-western part of Mauritius. It was proclaimed on June 15, 1994 and is managed by the National Parks and Conservation Service. It covers an area of 67.54 km² including humid upland forest, drier lowland forest and marshy heathland. The Black River Gorges is worth visiting for all trekkers, as well as for the pure nature lovers and bird-watchers. Being the largest national park in Mauritius, it is famous for its waterfalls, vistas and hiking, the gorge is in the central highlands, making it cooler than much of the island.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/Casela.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Casela World of Adventures</h2>
															<p>
																The Casela Nature Park, a beautiful garden and bird sanctuary of some 25 acres, is situated in the west part of the island. After seeing the birds, embark your Safari Vehicles for a Safari* in Yemen (on Casela premises), domain found between the mountain of Tamarin and the Trois Mamelles, home to two of the longest rivers of the island: Rempart and Tamarin. Enjoy the beautiful sight of Java deer roaming freely in the grassy savannah. Wild boars, hares, monkeys, mongoose and the famous Mauritian fruit bat can also be seen during the Tour. Indigenous and exotic plants beautify the domain.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/sir.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Sir Seewoosagur Ramgoolam Botanical Garden</h2>
															<p>
																The Sir Seewoosagur Ramgoolam Botanical Garden, commonly known as the Pamplemousses Botanical Garden, is a popular tourist attraction in Pamplemousses, near Port Louis, Mauritius, and the oldest botanical garden in the Southern Hemisphere. The botanical garden was initially opened as a private garden by the French governor of Mauritius nearly 300 years ago, later to become the national botanical garden of Mauritius. The botanical garden stretches over endless acres of land and it may take you more than a week to cover the whole garden. It is populated with more than 650 varieties of plants among which are the famous Baobabs, the Palmier Bouteille, the ineluctable Giant Water Lilies, dozens of medicinal plants, a large spice garden and many more. One of the main attractions of the botanical garden is the 85 different varieties of palm trees brought from different corners of the world. Other indigenous species of plants are also exhibited here.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/Rochester.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Rochester Falls</h2>
															<p>
                                Rochester Falls is set in a rugged, wild and lush green landscape in the Savanne district of Mauritius, just some 2.5 kilometers away from Souillac (South of Mauritius). Since it is a must visit tourist attraction in Mauritius, this Rochester Falls has been in the spotlight for being featured in many Bollywood movies. One of its main features is the unique and dramatic cliff face which has been transformed into jagged rectangular blocks by the force of powerful water over the past hundreds years. The cascading waters tumble from a height of 10 meters through the rocky beds of the Savanne River. Mesmerizing as it may seem, this spectacular sight serves as an ideal spot for a quick refreshing plunge or a small picnic break.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/LaVanille.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>La Vanille Crocodile Park</h2>
															<p>
																'The park was created in 1985, and its name honors the old vine cultivated in the valley where the reserve of 5 hectares is located. Mauritian hospitality, conservation of nature, and welfare of the animals are privileged in this magical setting, where the guides will take you on an unforgettable visit of the reserve. Set in a tropical forest, in the midst of exotic fauna and flora, the park comprises of a large number of crocodiles grouped according to age and species in secured enclosures. La Vanille Crocodile Park also showcases a diverse range of animal species, including giant tortoises in an open enclosure, iguanas, deer, and wild pigs, amongst others.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/Chamarel.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Chamarel Waterfalls</h2>
															<p>
																Formed by the River St. Denis, the waterfalls of Chamarel (Cascade Chamarel) have a height of 83m (272ft). The waterfalls and are surrounded by lush vegetation of Black River Gorges. You can have a vivid view of the waterfalls from both a lower and an upper viewpoint from the Black River National Park. The St. Denis rivers flows through fields, gorges and green spaces seawards and makes for a splendid view. Tourists can choose to see the waterfalls from the upper deck situated at the Chamarel Seven Colored Earth reserve, or, can head down the trail to enjoy shallow water swimming at the bottom of the Chamarel falls. This Chamarel falls are definitely the most famous and recognized waterfalls in Mauritius and as such has always been a main attraction for tourists and if you are one, you simply cannot afford to miss the magnificent and “best waterfalls in Mauritius”!
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
														<div class="room-img" style="background-image: url(ui/frontend/images/mauritious/Blue.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Blue Bay Marine Park</h2>
															<p>
																Located in the south-east of the island, Blue Bay was declared a national park in 1997 before being designated as a wetland site under the Ramsar Convention on Wetlands of International Importance in 2008. The marine park is renowned for its remarkable coral garden, which harbours hundreds of varieties of corals and its abundant fauna. Close to the coastline, the site offers ideal conditions for snorkeling with a rich biodiversity as well as calm and shallow sea-water.
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
