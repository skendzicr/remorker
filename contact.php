<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main-p.css">
		<link rel="stylesheet" href="css/sidebar-p.css">
		
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    

    <!-- Heading pozicija logotipa -->
    <div id="page-header" class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
			<div class="row">
			<a href="#">
			<img class="col-md-3 col-md-offset-2 visible-lg visible-md" src="./img/header-logo.jpg" alt="Remorker Architects"></img>
			<img class="visible-xs visible-sm col-xs-12" src="./img/header-logo.jpg" alt="Remorker Architects"></img>
			</a>
			</div>
			</div>
		<nav role="navigation">
			<div class="container-fluid">  
	        <div class="navbar-header">			
			<button type="button" class="navbar-toggle	" data-toggle="collapse" data-target="#hidden-navbar">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			</div>
			</div>  
			<div class="collapse navbar-collapse" id="hidden-navbar">		
              
              	<ul class="nav nav-stacked visible-xs visible-sm">
                  <li><a href="index.html">01 News</a></li>
                  <li><a href="projects.html">02 Projects</a></li>
				  <li><a href="publications.html">03 Publications</a></li>
                  <li><a href="team.html">04 Team</a></li>
                  <li class="active"><a href="contact.php">05 Contact</a></li>
              	</ul>
                  
			</div>
			
	    </nav>
			
			 
		<div class="container"> 
			<div class="row">
	  			<div class="topborder"> </div>
			</div>
		</div>
	</div>
	</div>
	
    <div class="container">
		<div class="row">
			<div class="col-md-2" id="leftCol">
                 <ul class="nav nav-stacked visible-md visible-lg" id="sidebar">
                  <li><a href="index.html">01 News</a></li>
                  <li><a href="projects.html">02 Projects</a></li>
				  
			  	  <li><a href="publications.html">03 Publications</a></li>
                  <li><a href="team.html">04 Team</a></li>
                  <li><a href="contact.php">05 Contact</a></li>
              	</ul>
            </div>  
      		<div class="col-md-10" id="mainCol">
				<div class="row">
				<!-- Map -->
					<div id="map-canvas"></div>
				</div>
				<hr>
				<div class="col-md-10">
				<div class="row">
				
				<form action = "" method = "POST">

	
						<div class="row">
							<div class="col-sm-8 col-md-8">
								<input class="form-control" type="text" placeholder="Name.." name = "first_name"><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-md-8">
								<input class="form-control" type="text" placeholder="eMail" name = "email"><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-8 col-md-8">
								<input class="form-control" type="text" placeholder="Telephone" name = "telephone"><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-sm-8 col-md-8">
								<textarea placeholder="Message..." class="form-control" rows="5" name = "comments"></textarea>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4">
								<input class="btn btn-action" type="submit" value="Send" name = "btnSubmit">
							</div>
						</div>
						<br>
						
						<?php
						if (isset($_POST['btnSubmit'])) {
						$to = 'dusica@remorker.rs'; // Use your own email address
						$subject = 'Upit sa sajta Remorker';
						$message = 'Name: ' . $_POST['first_name'] . "\r\n\r\n";
						$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
						$message .= 'Telephone: ' . $_POST['telephone'] . "\r\n\r\n";
						$message .= 'Comments: ' . $_POST['comments'];
						$success = mail($to, $subject, $message);
														}
						?>
				</form>
				</div>
				</div>
			</div>	
      	</div> 
  	</div>
</div>
	
	 <footer class="navbar-fixed-bottom">
	 <div class="container">
	 <div class="row">
	
	  <div class="donja-linija"> </div>
	
	  </div>
	 <div class="row">
	 
	 <div class="col-md-offset-2 col-md-10">
				<ul>
					<li><a target="_blank" href="http://www.facebook.com"><img src="./img/facebook-32.png" /></a></li>
					<li><a target="_blank" href="http://www.twitter.com"><img src="./img/twitter-32.png" /></a></li>					
					<li><a target="_blank" href="http://www.facebook.com"><img src="./img/instagram-32.png" /></a></li>
					<li><a target="_blank" href="http://www.twitter.com"><img src="./img/pinterest-32.png" /></a></li>
				</ul>
		</div>
		
		</div>		
		
		</div>
		</footer>
		     

     
  
	

	    
    </body><!-- /container -->  
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	    <script src="js/vendor/bootstrap.min.js"></script>
	    <script src="js/main.js"></script> 
		<script src="js/affix.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
		
	<!-- Custom JavaScript for Google map -->
	<script>
	function initMap() {
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    zoom: 15,
    center: {lat: 44.818886, lng: 20.449701}
  });
  
    var infowindow = new google.maps.InfoWindow({
  maxWidth: 200
	});

  var image = 'img/map-marker.png';
  var marker = new google.maps.Marker({
    position: {lat: 44.818886 , lng: 20.449701},
    map: map,
    icon: image
  });
  
  google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent('<h4>Remorker architects</h4><p>Karađorđeva 11, 11000, Beograd </p> <p><a href="http://www.remorker.rs">www.remorker.rs</a></p><p>Radno vreme: 7:00 – 15:00');
        infowindow.open(map, this);	
      });
  
}
	</script>
</html>

