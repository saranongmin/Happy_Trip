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

echo "Try again please";
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
			   	<li style="background-image: url(ui/frontend/images/headers/header2.jpg);">
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
			  	</ul><br><br><br>
			  	
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
										<h2>Welcome To - Australia</h2>
										</div>
										
									

									<div class="row">

												<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
                            <div class="room-img" style="background-image: url(ui/frontend/images/australia/sydney.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Sydney Opera House</h2>
															<p>
                                A masterpiece of architecture, the Sydney Opera House is one of the world’s most famous buildings. You can take a photo on the steps of the Opera House, explore its majestic exterior and splendid interior on daily tours, and enjoy performances held under its iconic white sails. On the edge of Sydney Harbour, one of the world’s great natural harbours, the Sydney Opera House is a UNESCO World Heritage site. It was evaluated as “one of the indisputable masterpieces of human creativity, not only in the 20th century but in the history of humankind”.
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
						<div class="room-img" style="background-image: url(ui/frontend/images/australia/reef.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Great Barrier Reef</h2>
															<p>
                                The largest coral reef system on the face of the earth, the Great Barrier Reef is simply colossal. Stretching for over 2,300 kilometers, it is remarkably visible from space, and nine hundred islands dot this enormous ecosystem, which is actually comprised of 2,900 individual reefs. Visiting the Great Barrier Reef is a humbling experience; every year around two million visitors enjoy all that this natural wonder has to offer. Snorkeling and scuba diving are the best ways to experience the joys of the rich underwater world, while boat trips, kayaking, and even helicopter rides offer another view of the reef’s gargantuan proportions. Gently sailing through the perfect turquoise waters, dolphins, sea turtles and the reef itself are visible below the waves – an unforgettable experience.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/uluru.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Uluru-Kata Tjuta National Park</h2>
															<p>
                                World famous, spectacular Uluru is instantly recognizable due to its ruddy red hue; it is one of Australia’s most prominent landmarks. The immense rock is incredible to visit and the main reason the national park is such a popular destination. Its grandeur and uniqueness live long in the memory of those who gaze upon it. While Uluru is the main draw, the equally mesmerizing rock formations of Kata Tijuta are fantastic to wander around, and there are lots of activities for visitors to enjoy. Owned by the Anangu Aboriginal people, the site is of great cultural and spiritual significance to them; you can learn more about their way of life at the brilliant cultural center. With lots of great walks, bike rides and tours for you to enjoy, the astounding beauty of this national park really is awe-inspiring.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/harbour.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Sydney Harbour Bridge</h2>
															<p>
                                The much loved Sydney Harbour Bridge is a major focal point of the city of Sydney, connecting the city's CBD to Sydney's north. The bridge is showered in colour on New Year's Eve showcasing spectacular fireworks as the city celebrates and welcomes in the New Year. The iconic bridge took eight years to build using 53,000 tonnes of steel and six-million hand-driven rivets
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/blue.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Blue Mountains National Park</h2>
															<p>
                                The Blue Mountains is a rugged region west of Sydney in Australia’s New South Wales. Known for dramatic scenery, it encompasses steep cliffs, eucalyptus forests, waterfalls and villages dotted with guesthouses, galleries and gardens. Katoomba, a major town in the area, borders Blue Mountains National Park and its bushwalking trails. Echo Point affords views of the storied Three Sisters sandstone rock formation.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/bondi.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Bondi Beach</h2>
															<p>
                                The sweeping white-sand crescent of Bondi is one of Australia’s most iconic beaches. Reliable waves draw surfers while, nearby, hardy locals swim in the Icebergs ocean pool year-round. Trendy, health-conscious Sydney siders head to laid-back cafes around Hall Street, while hip backpackers frequent the area's casual pubs. Walkers and joggers use the clifftop Bondi to Coogee Coastal Walk, with its dramatic scenery.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/daintree.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Daintree National Park</h2>
															<p>
                                The Daintree National Park is a tourist's dream. Walking and climbing trails are a popular choice for those wanting to experience the beauty of nature first hand, however if you prefer to go faster there are plenty of off road four wheel drive tours available, or you can take the scenic route, hire a car and drive through the winding roads abound with lush forest. There are also great facilities to get a birds eye view - walk through the canopy tower or aerial walkway at the Daintree Discovery Centre, a great tourist destination for those wanting to learn about the magnificent eco system of the rainforest whilst having fun and seeing the sights.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/ocean.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Great Ocean Road</h2>
															<p>
                                See the towering 12 Apostles, get up close to native wildlife, and take in iconic surf breaks, pristine rainforest and misty waterfalls along the spectacular Great Ocean Road. Get outdoors on bushwalking, surfing and mountain biking expeditions or take the cultural route through galleries, museums and heritage attractions. Feast on spectacular views and local produce along the way.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/fraser.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Fraser Island</h2>
															<p>
                                Fraser Island, off Australia’s eastern Queensland coast, is the world's largest sand island, stretching over 120km. Panoramic viewpoints include Indian Head, a rocky outcrop on the island's easternmost tip, and the Cathedrals, a cliff famous for sculpted ribbons of coloured sand. It's a camping and ecotourism destination, with beaches and swimming sites at Lake McKenzie, Lake Wabby and other freshwater pools. Fraser is the largest sand island in the world and is a World Heritage listed natural beauty. Fraser Island also has an abundance of experiences to offer, from whale watching in Hervey Bay to exploring the waters of the Great Barrier Reef. Hervey Bay is known as the gateway to Fraser Island and, together with major regional tourist attractions, is a world renowned holiday destination for couples, families and backpackers.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/dinosaur.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Broome and the Kimberley region</h2>
															<p>
                                Broome is a beach resort town in western Australia’s Kimberley region. Along its Indian Ocean coastline, the white sands of 22km-long Cable Beach offer a dramatic backdrop for sunset camel rides. At Gantheaume Point nearby, dinosaur tracks are revealed in the beach’s red rocks during low tide. Broome’s historic Chinatown overlooks Roebuck Bay, a jumping off point for cruises to local pearl farms. Enjoy an all camping and hiking off-road adventure trip through the heart of the Kimberley outback, departing Darwin heading west towards Kununurra and the Gibb River Road, venturing into Lake Argyle, the Bungle Bungles, El Questro and many more unforgettable locations.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/kangaro.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Kangaroo Island</h2>
															<p>
                                There’s an unmistakable sanctity about Kangaroo Island. With its raw and rugged coastline, natural wonders and wildlife, follow the road less travelled and discover it all. Kangaroo Island has a thriving food and wine scene, stunning accommodation and a laid-back island lifestyle. You can get to Kangaroo Island via ferry with Sealink.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/cradle.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Cradle Mountain-Lake St. Clair National Park</h2>
															<p>
                                Cradle Mountain-Lake St Clair National Park is in Tasmania, Australia. It's made up of protected rainforests, alpine heathland and rugged peaks. Cradle Mountain offers views over Crater and Dove lakes from its jagged spires. The Overland Track runs from Cradle Mountain to the deep Lake St Clair, past ancient pine forests, waterfalls and glacial valleys. Wildlife includes echidnas, wombats and Tasmanian devils.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/coast.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Gold Coast</h2>
															<p>
                                Gold CoastThe Gold Coast is a metropolitan region south of Brisbane on Australia’s east coast. It's famed for its long sandy beaches, surfing spots and elaborate system of inland canals and waterways. It’s also home to theme parks such as Dreamworld, Sea World and Wet’n’Wild. Inland, hiking trails crisscross Lamington National Park’s mountain ridges and valleys, home to rare birds and rainforest.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/apostles.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Twelve Apostles</h2>
															<p>
                                The Twelve Apostles is a collection of limestone stacks off the shore of Port Campbell National Park, by the Great Ocean Road in Victoria, Australia. Their proximity to one another has made the site a popular tourist attraction. Glorious at both dusk and dawn the Twelve Apostles, by the forces of nature has gradually eroded the softer limestone, forming caves in the cliffs which became arches and when they collapsed, rock islands as high as 45 metres were left isolated from the shore.<br><br>
                                Stop and visit the Twelve Apostles Centre before taking the walk to view the amazing Twelve Apostles coastline. The Centre offers insightful cultural heritage stories, shelter and toilets. Walk the short distance (500m) through the tunnel, under the Great Ocean Road to various lookouts offering expansive, breathtaking views.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/wilpena.jpeg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Wilpena Pound</h2>
															<p>
                                Wilpena Pound is a natural amphitheatre of mountains located 429 kilometres north of Adelaide, South Australia, Australia in the heart of the Flinders Ranges National Park. The Pound is accessed via a sealed road which continues on to the northern Flinders Ranges town of Blinman and to the south, Hawker. If you really want to get a feeling for the Pound and let it talk to you, then you’re going to climb in it, over it or on it. It’s simply too big to just brush up against and leave on a coach trip you really have to get out there.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/gairdner.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Lake Gairdner</h2>
															<p>
                                Lake Gairdner, largest of a group of shallow depressions west of Lake Torrens in central South Australia, 240 miles (386 km) northwest of Adelaide. It measures 100 miles (160 km) long by 30 miles (48 km) wide. Lying at the base of the Eyre Peninsula, the lake is a dry salt pan (playa) intermittently filled with water. The lake is surrounded by large sheep stations set amid sand hills and saltbush vegetation. It has been used for attempts at the world land-speed record.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/port.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Port Douglas</h2>
															<p>
                                Port Douglas is a town on the Coral Sea in the tropical far north of Queensland, Australia. It's known for its beach resorts and as a base for visits to both the Great Barrier Reef, the world's largest reef system, and Daintree National Park, home to biodiverse rainforest. In town, Macrossan Street is lined with boutique shops and restaurants. Curving south is popular Four Mile Beach. Port Douglas is a chic, yet relaxed sea-side village, perfect for couples, families and solo travelers alike, with a range of accommodation options to suit all budgets, a plethora of restaurants and bars, not to mention fantastic boutique shopping. The village is also the ideal base to explore the World Heritage-Listed Great Barrier Reef and the Daintree Rainforest (including Cape Tribulation) with an abundance of tours and day trips available. Alternatively, disconnect from the digital world entirely and spend a few nights in the World’s oldest living rainforest, the Daintree, and immerse yourself in the sights and sounds of nature.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/white.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Whitsundays</h2>
															<p>
                                The Whitsundays are made up of 74 Island Wonders, on the beautiful tropical coast of Queensland, Australia. Right in the Heart of the Great Barrier Reef, a visit to the Whitsundays is a feast for the senses. The stunning natural landscapes of coast and islands are dotted with secluded beaches and friendly towns. Whether you choose to base yourself on the coast or on the islands, there's so much to do, you'll have to work out how to fit it all in!
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/pinacles.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Pinnacles of Nambung National Park</h2>
															<p>
                                Nambung National Park is a national park in the Wheatbelt region of Western Australia, 200 km northwest of Perth, Australia and 17 km south of the small coastal town of Cervantes. The park contains the Pinnacles Desert which is an area with thousands of limestone formations called pinnacles. Apart from the amazing Pinnacles Desert, Nambung National Park is also known for its beautiful beaches at Kangaroo Point and Hangover Bay, coastal dune systems and low heathland rich in flowering plants. At the park’s northern end near the town of Cervantes, there is a loop trail and boardwalk at Lake Thetis where you can see some fascinating thrombolites (rock-like structures similar to stromatolites built by micro-organisms too small for the human eye to see).
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/hamelin.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Hamelin Bay Stingrays</h2>
															<p>
                                The Hamelin Bay stingrays are a major drawcard to this sleepy town south of the Margaret River region in Western Australia. Their size, speed, grace and beauty is remarkable – they truly are majestic, magnificent creatures, and a road trip to visit them in the wild is an absolute must for anyone visiting this part of the country. Stingrays are actually incredibly docile creatures and can be friendly and curious, as I found when I met the gentle wild rays of Hamelin Bay.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/wine.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Wine Glass Bay</h2>
															<p>
                                Mention Coles Bay, Wineglass Bay, and Freycinet National Park to a Tasmanian and you’ll see eyes light up with thoughts of fishing and boating, bushwalking, sea kayaking, rock climbing, sun and sand, and spectacular coastal scenery. Coles Bay sits at the foot of the granite mountains known as the Hazards and on the edge of the world-renowned Freycinet National Park and Wineglass Bay, about two and 1/2 hours’ drive from Hobart and Launceston.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/maria.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Maria Island</h2>
															<p>
                                Maria Island is a natural wildlife sanctuary and off-shore retreat with historic ruins, sweeping bays, dramatic cliffs and plenty of stories to tell.<br><br>

                                Located off Tasmania's east coast and accessible only by ferry, Maria Island contains the most intact example of a convict probation station in Australia. The stone Commissariat Store, 150 meters from the jetty, is the island's oldest building and is now a visitor center with displays and information about the island.<br><br>

                                The island offers excellent walking and cycling journeys. Short walks explore the buildings and ruins of Darlington – a ghost town with a convict and industrial past. The Reservoir Circuit is sheltered from the coastal winds and provides a glimpse of Maria Island's wildlife and history as you wander through open woodlands into a tall eucalypt forest.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/melborne.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Melbourne</h2>
															<p>
                                With lots of great art galleries, some fantastic museums, and a lively music scene, there is always something to see or do in the country’s second largest city. Due to its high quality of life, citizens from around the world have flocked to the streets. Its multicultural population is reflected in the delicious cuisine on offer and the unique neighborhoods that make it such a fascinating place to explore. With a European feel about it thanks to the architecture on show, wandering around the city’s streets and numerous green spaces will inevitably make you fall in love with Melbourne.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/kakadu.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Kakadu National Park</h2>
															<p>
                                Occupied by Aboriginal people for over 40,000 years, Kakadu National Park has over five thousand ancient rock art sites which are fascinating to visit. It is a place of immense cultural and natural significance. The park is huge and contains some stunning natural sights which make it well worth a visit; the Kakadu Escarpment is particularly breathtaking. With diverse ecosystems contained within the park’s boundaries, you can be hiking through deserted sandstone escarpments one minute and bathing in waterfalls and pools the next, before later on learning about some of the ancient rock paintings. While it can get very popular, Kakadu’s huge area means that you can easily enjoy all the park has to offer in peace and quiet if you step off the beaten path a little.
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
														<div class="room-img" style="background-image: url(ui/frontend/images/australia/brisbone.webp);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Brisbane</h2>
															<p>
                                It is the capital of Queensland, is a large city on the Brisbane River. Clustered in its South Bank cultural precinct are the Queensland Museum and Sciencentre, with noted interactive exhibitions. Another South Bank cultural institution is Queensland Gallery of Modern Art, among Australia's major contemporary art museums. Looming over the city is Mt. Coot-tha, site of Brisbane Botanic Gardens. It is rightly famous for its amazing climate that is near perfect all year round, and its proximity to many of Queensland's major tourist destinations has helped make it into a Mecca for visitors to Australia.
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
                                    <label for="name">Name:</label>
                                    <div class="form-field">
                                      <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                    </div>
                                  </div>
                                </div><div class="col-md-12">
                                  <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <div class="form-field">
                                      <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="email">Email Address:</label>
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
                                    <label for="start_date">Start Date:</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" name="start_date"id="start_date" class="form-control date" placeholder="Start date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="end_date">End Date:</label>
                                    <div class="form-field">
                                      <i class="icon icon-calendar2"></i>
                                      <input type="text" name="end_date" id="end_date" class="form-control date" placeholder="End date">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="hotel_type">Hotel Type:</label>
                                    <div class="form-field">
                                      <input type="text" name="hotel_type" id="hotel_type" class="form-control" placeholder="Hotel Type">
                                    </div>
                                  </div>
                                </div>
				               <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="transport">Transportation Type:</label>
                                    <div class="form-field">
                                      <input type="text" name="transport" id="transport" class="form-control" placeholder="Transportation Type">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="visa">Visa Support:</label>
                                    <div class="form-field">
                                      <input type="text" name="visa" id="visa" class="form-control" placeholder="Visa Support">
                                    </div>
                                  </div>
                                </div>
                  <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="guest">No of Guest:</label>
                                    <div class="form-field">
                                      <input type="text" name="guest" id="guest" class="form-control" placeholder="No of Guest">
                                    </div>
                                  </div>
                                </div>		
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="note">Additional Note:</label>
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

                            <li>House-5/4, 3rd Floor, Lalmatia, <br> Block-A,
                            Dhaka, Bangladesh</li>
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
