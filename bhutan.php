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
										<h2>Welcome To - Bhutan</h2>
									</div>
									<div class="row">
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/statue.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Buddha Dordenma Statue</h2>
															<p>Inside of Thimphu’s 169 foot Buddha Dordenma statue, there are 125,000 miniature Buddhas encapsulated inside of its enlightened bronze chest, ranging from 8 to 12 inches tall. This means that in Thimphu, which has a population of around 100,000, there are more Buddhas than there are human beings.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
						<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/dochula.png);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Dochula Pass</h2>
															<p>Punakha Dzong is an excellent piece of architectural beauty and the rare Dzongs of Bhutan owning three docheys (means courtyards), others usually has two only. As the second largest Dzong of Bhutan, it is 180m long and 72m wide with lots of artistic buildings in separate functional areas.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/Punakha.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Punakha Dzong</h2>
															<p>Punakha Dzong is an excellent piece of architectural beauty and the rare Dzongs of Bhutan owning three docheys (means courtyards), others usually has two only. As the second largest Dzong of Bhutan, it is 180m long and 72m wide with lots of artistic buildings in separate functional areas.

The visit of Punakha Dzong starts from a red wooden cantilever bridge on Mochhu River, an ingenious aisle linking the Dzong to the main road. At the main entrance, there is a specialized 7 meters high wooden ladder standing cliffy into the interior. There are few golden pray wheels and fascinating Buddhist murals about the 12 Chinese zodiac at the doorway.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/nest.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Tiger’s Nest</h2>
															<p>The Tiger’s Nest Monastery is a sacred Buddhist site located near Paro, Bhutan. It was constructed in 1692, around the cave where Guru Rinpoche first meditated, the event that introduced Buddhism into Bhutan. There is a legend that Guru Rinpoche was carried from Tibet to this location on the back of a tigress, thus giving it the name “Tiger’s Nest.”

Now, this monastery consists of four temples with residential accommodations for the monks. Despite the daily visits by tourists, Paro Takstang still functions as a monastery today.</p>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/phobia.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Phobjikha Valley</h2>
															<p>Against the backdrop of western slopes of the Black Mountains in Wangdue Phodrang, lies the bowl-shaped Phobjikha valley that offers breathtaking views of vast expanses of green fields. It is home to the endangered black-necked crane that migrates to this area during winters. Phobjikha valley also called Gangtey, is one of the few glacial valleys in the Kingdom of Bhutan.

Bordering the Jigme Singye Wangchuck National Park, the valley is located at an altitude of 3000m above sea level, and hence comparatively cooler. It boasts being the winter home to black-necked cranes that fly from Tibet to escape the harsh winter and also one of the most prominent conservative sites of Bhutan. Relatively untouched by outsiders, the use of electricity in the valley began only a few years ago.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/chomolhari.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Chomolhari</h2>
															<p>The Chomolari trek is fantastic for trekkers looking for an off-the-beaten path, high altitude experience that isn't too long. Here at Kandoo, we make sure to build in enough time to soak in the cultural gems of the Tiger's Nest Monastery, as well as the sites of Paro and the capital, Thimphu.

Sadly, modern life has encroached on this route to some degree, with an electricity supply following the trail up the Paro Valley. However, look beyond the wires and you will be treated to amazing scenery that ranges from the picturesque valleys of Paro and Thimphu, to the incredible mountain vistas of Chomolhari (7314m), Jichu Drake (6794m) and Tshrim Khang. Throughout the trek you will weave your way through rhododendron forests and over glacial streams.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/norzin.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Norzin Lam Street</h2>
															<p>It is Thimphu city's main trail, one lined with all manner of local craft shops and stalls, along with larger shopping centers. One can expect to find anything from art work and handicrafts to clothing, carpets, books, woven and wood items.

In Norzin Lam Street one has to devote time and energy visiting various shops to extract the best fit and price. The clothes that are mostly handpicked here are woolen sweaters, warm mink, long over coats, etc. Gold Ornaments and Thangka Paintings are among other important items that are available for purchase here.

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
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/tashicho.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Tashichho Dzong</h2>
															<p>It has been the seat of the government since 1952 and presently houses the throne room and offices of the king, the secretariat and the ministries of home affairs and finance. Other government departments are housed in buildings nearby.

It was first constructed in 1216 A.D. by Lama Gyalwa Lhanangpa where Dechen Phodrang now stands above Thimphu. In 1641, Zhabdrung Ngawang Namgyal acquired it but finding it too small, he built another one, known as the lower Dzong. The original dzong was destroyed by fire in 1771 and everything was moved to the lower dzong. The new building was later expanded several times over the years. 

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
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/drukgel.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Drukgyel Dzong</h2>
															<p>The Dzong consists of Utse, the central tower building, which housed a shrine of guardian deities, and Shabkhor, rectangular buildings surrounding the courtyards. It was built adapting to the geographical condition of the hill and formed a distinct design. The high and massive stone masonry walls of Shabkhor buildings stood on the steep slope of the hill entirely enclosing the inner space of the Dzong, making approach to Dzong possible only from the single      entrance, which is heavily guarded by several ta-dzongs (watching forts) cylindrical in shape situated between the entrance and foot of the hill.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/motithang.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Motithang Takin Preserve</h2>
															<p>The Takin is a rare type of goat-antelope living in the Eastern Himalayas. The four subspecies of the takin live in high altitudes throughout Bhutan, Northeast India, Northwest Myanmar, and the Chinese section of the Himalaya.

                                The odd-looking animals are the national animal of Bhutan. According to local legend, a 15th-century saint concocted the curious creature after he agreed to conjure up a miracle in exchange for lunch. He then slapped the head of a goat atop a cow’s skeleton and brought this new animal to life.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/mesuem.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>National Musemum of Bhutan</h2>
															<p>The National Museum of Bhutan was constructed to exhibit the famous Bhutanese art from contemporary painting to ancient’s statues and this museum exhibits more than 1,500 years of cultural heritage of Bhutan.

National Museum of Bhutan is about 53.4 km from Thimphu.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/Punakha1.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Punakha Suspension Bridge</h2>
															<p>Punakha, the former capital of the country, Bhutan is a quaint town in the heart of Punakha-Wangdue Valley. Amidst all the elegance of this little town, this place is also home to the marvelous Punakha suspension bridge which is the second longest suspension bridge in Bhutan and connects the old administrative centre of Punakha Dzongkhag to the rest of the valley. It is perched high above the swift river Po Chu and spans about 160-180 meters in length. This iron chain bridge has been a precursor for modern suspension bridges in the world. For all the adrenaline junkies, here is a handy guide to the beautiful yet scary suspension bridge in Bhutan.
Punakha Suspension Bridge is about 82.6 km from Thimphu.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box">
											<div class="room-wrap">
												<div class="row">
													<div class="col-md-6 col-sm-6">
														<div class="room-img" style="background-image: url(ui/frontend/images/bhutan/simply-bhutan.jpg);"></div>
													</div>
													<div class="col-md-6 col-sm-6">
														<div class="desc">
															<h2>Simply Bhutan</h2>
															<p>Simply Bhutan is a “live” Museum with an interactive environment where the tourists can presume to live a life of a traditional Bhutanese lifestyle in just one visit. A mud rammed house with wooden shingles used as roof showcases a medieval traditional Bhutanese house. The interior is filled with restored and preserved ancient household items to highlight and exhibit the traditional way of life. The living museum aims to preserve and promote the ancient tradition and culture</p>
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
