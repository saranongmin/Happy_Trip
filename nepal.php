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
										<h2>Welcome To - Nepal</h2>
									</div>

									<div class="row">
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
<div class="room-img" style="background-image: url(ui/frontend/images/nepal/lambini.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Lumbini</h2>
															<p>The birthplace of Siddhartha Gautama, the historic Buddha and a most famous place among the tourist and consider as a holy place and people come here for pilgrimage. According to UNESCO world heritage site is the most tranquility place in the world.

It is about 258.7 km from the capital Kathmandu.
The largest temple complex in Nepal, it stretches on both sides of the Bagmati River which is considered holy by Hindus. The main pagoda style temple has a gilded roof, four sides covered in silver, and exquisite wood carvings. Temples dedicated to several other Hindu and Buddhist deities surround the the temple of Pashupatinath.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
						<div class="room-img" style="background-image: url(ui/frontend/images/nepal/basecamp.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Everest and the Trek to Base Camp</h2>
															<p>The Everest Base Camp Trek is rated as one of the best adventures in the world by Mt Everest Hikers and adventurers. Full of Himalayan peaks, glaciers and along a scenic road with spectacular views of the Sherpa village, you can walk to the base camp of highest peak in the world that is Mount Everest Base Camp. The trails pass through winding paths through green farmlands, the Sherpa market and villages, Buddhist monasteries and white rivers. Panoramic views of the Himalayas and Sagarmatha National Park, take a moment to appreciate the beauty of rare plants, animals, and birds. This hard trip brings you the stimulation and memories of your life.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/monkey.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Swayambhunath (Monkey Temple)</h2>
															<p>Find peace and prayers on the little hillock of Swaymbhunath in the northwest of Kathmandu Valley. Visitors for whom the name was a tongue twister have called it "Monkey Temple" from the 1970s. Swayambhu, overlooks most parts of the valley giving visitors a panoramic view of the city. The stupa has stood as a hallmark of faith and harmony for centuries with Hindu temples and deities incorporated in this Buddhist site. The glory of Kathmandu Valley is said to have started from this point.

Resting on a hillock 3 km west of Kathmandu, Swayambhu is one of the holiest Buddhist stupas in Nepal. It is said to have evolved spontaneously when the valley was created out of a primordial lake more than 2,000 years ago. This stupa is the oldest of its kind in Nepal and has numerous shrines and monasteries on its premises.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/phewa.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Phewa Lake, Pokhara</h2>
															<p>Feiwa Lake, the water is green, there are egrets near the mountains, Lake boating, you can use the afternoon for leisure! Stop the boat at the edge of the island and walk on foot to experience the mood of the hikers. Overlooking the Himalayas, the setting sun is beautiful! The river is very quiet, boating on the lake, you can see Annapurna Snow Mountain peaks, the lake from time to time boating, which is far away from the noise of the city, like a fairy tale scene, beautiful. There is also a Hindu goddess temple on the lake island. You can see the local customs. </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/annapurna.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Trekking in the Annapurna Region</h2>
															<p>The Annapurna Base Camp trek is one of the most popular treks in the Annapurna region. The trail goes alongside terraced rice paddies, lush rhododendron forests and high altitude landscapes with the Annapurna Range in view most of the times.

Distance of Annapurna Region is about 117km from Kathmandu.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/nagarkot.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Nagarkot</h2>
															<p>Nagarkot is a former Village Development Commeti located 32 km east of Kathmandu, Nepal in Bhaktapur district in the Bagmati Zone. Perfect for travelers who want to experience the beauty and majesty of the Himalayas without arduous physical activity, Nagarkot is best known for the views it offers of the mountains and the Kathmandu Valley. Perched on a high ridge to the northeast of Bhaktapur, the village of around 4,500 inhabitants commands views of eight Himalayan ranges. There’s a variety of appealing hotels in every price range in Nagarkot, many of which are located within walking distance of the Nagarkot view tower, known as the best place to visit in Nepal to view the sun rising over the Himalayas.

Nagarkot is about 27.4 km from Kathmandu.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/langthang.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Trekking in the Langtang Region</h2>
															<p>Langtang valley is one of the closest trekking destinations to Kathmandu, allowing easy access to visit one of the most beautiful trekking destinations in Nepal. Langtang valley combines magnificent cultural villages, Tamang Heritage trek, and Scenic Langtang valley with the holy lakes at Gosainkunda and the spectacular Helambu valley. The most popular trekking routes in Langtang reagion are Langtang trek (7 days), Tamang heritage trek (6 days), Gosaikunda Lake trek (5 days), Helambu valley trek (8 days), Ganjala pass Trek (14 days), and Tilman pass trek (18 days).

Distance from Kathmandu to Langtang Valley is about 61.8 km.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/puspinath.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Pashupatinath Temple</h2>
															<p>Dedicated to Lord Shiva, Pashupatinath is one of the four most important religious sites in Asia for devotees of Shiva. Built in the 5th century and later renovated by Malla kings, the site itself is said to have existed from the beginning of the millennium when a </p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/phoksundo.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Phoksundo Lake</h2>
															<p>Phoksundo Lake is a freshwater lake located at Shey-Phoksundo National Park in Nepal. The lake is popular for its majestic blue-green watercolor. The lake lies at an altitude of 3612 meters above sea level in Dolpa district. Phoksundo lake has an area of 1.91 sq. Miles. The lake was formed after a landslide created a dam near the southern end. Phoksundo is considered one of the most beautiful natural lakes in the world. Phoksundo Lake is another beautiful places of Nepal that you must visit.

Distance from Thimpu to Phoksundo Lake is about 284km.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/poonhill.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Poon Hill</h2>
															<p>The views from Poon Hill are some of the best we’ve ever experienced - uninterrupted, panoramic views of some of the largest and most photogenic Himalayan mountains, including Dhaulagiri, Nilgiri, Machhapuchhare, Annapurna II and Lamjung. It also happens to be the spot where the two of us got engaged - so we can definitely vouch for how epic a place it is!

Distance from Kathmandu to Poon Hill is 117km.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/durbar.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Bhaktapur Durbar Square</h2>
															<p>Bhaktapur Durbar Square The ancient city Bhaktapur lies on the Eastern part of Kathmandu valley which is also known as Bhadgaon or Khwopa, Bhaktapur. It is regarded as the abode of traditional Nepali culture, custom and unique arts of wooden and potteries. The historical monument on around signifies medieval age culture and tradition of Nepal and this old city is inhabited by indigenous Newari people in large group. The main attractive monuments are Nyatapola Temple, statue of King Bhupatindra Malla, Peacock Window, Golden Gate and fifty-five windowed palace of Bhaktapur Durbar Square.

This beautiful Place is about 15.7 km from Kathmandu.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/chitwan.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Chitwan National Park</h2>
															<p>The Chitwan National Park (CNP) is a world heritage property, and it also contains a Ramsar Site – Beeshazari Tal in its buffer zone. The CNP has a history of over 3 decades in park management and a rich experience in resolving conflicts between the park and the people.

It is a rich natural area in the Terai, the subtropical southern part of Nepal. A total of 68 species of mammals, 544 species of birds, 56 species of herpetofauna and 126 species of fish have been recorded in the park. The park is especially renowned for its protection of One Horned Rhinoceros, Royal Bengal Tiger and Gharial Crocodile.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/helambu.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Helambu</h2>
															<p>Helambu short trek is the most popular trekking itinerary for trekkers in Langtang region. Nepal Trek Adventure offers 5 to 7 days of this circuit at best cost (price) and itinerary. You can start this trekking from both ways either Melamchi Bazar about 60 Km or by Sundarijal 26 Km from Kathmandu. Located northeast of Kathmandu, it extends from north of Taramarang to the tree limit of the Gosainkunda Lake and lower slopes of Jugal Himal. There we meet several highland Tamang and Sherpa villages, scattered on both sides of the Melamchi Khola.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/pokhara.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Pokhara</h2>
															<p>Pokhara is Nepal's number 1 adventure and leisure destination, a gateway to treks in the Annapurna region with plenty of entertainment for individual travellers and their families.

In Pokhara you can experience the excitement of adventure: boating, hiking, pony rides, paragliding, bungee, zipline or simply relaxing at one of the several lakes in the valley.

Pokhara will overwhelm you with its natural beauty and great photo ops. Walk along the shores of the Fewa Lake, enjoy the greenery surrounding you and gaze at the spectacular panoramic view of the Himalayan peaks of the Annapurna Massif. Brightly painted wooden boats add vibrant colors to the greenery, while paragliders float down slowly from above. Flying over the lake is probably going to be one of the highlights of your travel experience in Nepal.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

                    <div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/dreams.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Garden of Dreams</h2>
															<p>The beautifully restored Swapna Bagaicha (Garden of Dreams) remains one of the most serene and beautiful enclaves in Kathmandu. Its two minutes' walk and a million miles from central Thamel.

There are dozens of gorgeous details in the small garden, including the original gate, a marble inscription from Omar Khayam’s Rubaiyat, the new fountains and ponds, and a quirky ‘hidden garden’ to the south. Of the original 1.6 hectares and six pavilions (named after the six Nepali seasons), only half a hectare and three pavilions remain.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

                    <div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/nepal/rara.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Rara Lake</h2>
															<p>Rara lake trekking is a still generally unexplored trekking trail in Nepal. Rara is Nepal’s biggest lake lies at an elevation of 3050 meters inside the limit of Rara National Park. The surface of this lake is around 8 square kilometer and the edge 9 kilometer. The length of the lake is 5 kilometers, width is 2 and profundity is 167 meter. The lake Rara resembles a blue sprite, enjoyed sentiment with mountains. In the each evening the exceptional snowcapped display of Dolpo and Tibetan mountains eclipses the scene over the profound clear waters of the lake. Trekking to this shocking lake gives an essence of regular wild and quietness.</p>
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
