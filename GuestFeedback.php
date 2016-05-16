
<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Guest Feedback</title>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
	<style>
		body {
			font-family: verdana;
			color: #fff;
		}
		.container-fluid{
			padding: 100px 120px;
		}
		h1{
			font-size: 2em;
			margin: 0.67em 0;
			color: gray;
		}
		h6 {
			font-size: 1em;
			margin: 0.67em 0;
		}
		.btn-primary{
			border-radius: 50%
		}
		.well{
			border-radius: 50%;
			margin-top: 30px;
			margin-bottom: 30px;			
		}
		<!--.rating {
			overflow: hidden;
			display: inline-block;
			font-size: 0;
			position: relative;
		}
		.rating-input {
			float: right;
			width: 16px;
			height: 16px;
			padding: 0;
			margin: 0 0 0 -16px;
			opacity: 0;
		}
		.rating:hover .rating-star:hover,
		.rating:hover .rating-star:hover ~ .rating-star,
		.rating-input:checked ~ .rating-star {
			background-position: 0 0;
		}
		.rating-star,
		.rating:hover .rating-star {
			position: relative;
			float: right;
			display: block;
			width: 16px;
			height: 16px;
			background: url('http://kubyshkin.ru/samples/star-rating/star.png') 0 -16px;
		}

		/* Just for the demo */
		body {
			margin: 20px;
		}-->
	</style>
</head>
<body style="background-color: gray">
	<form action="form_processing.php" method="post">
	<br>
	<div id="myCarousel" class="carousel">
	  <!-- Indicators 
	  <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol> -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<header id="top" class="header">
					<div class = "container-fluid">			
						<div class = "row">
							<div class="col-md-12 text-center panel-body well">
								<h1>Quick and easy way to share your feedback with Management</h1>								
							</div>
						</div>
						<!--<div class = "row submit">
							<div class="col-md-12 text-center">
								<br>
									<a class="btn btn-primary btn-lg" href = #about>Start</a>
							</div>
						</div>	-->
						<div class = "row center">
							<div class="col-md-12 text-center">
								<h6>Takes 30 seconds or less only</h6>
							</div>
						</div>
								
					</div>
				</header>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
			<div class="item">
				<section id="about" class="about">
					<div class = "container-fluid">	
						
						<div class = "row">
							<div class="col-md-12 text-center">
								<h4>How was your recent Stay?</h4>
							</div>
						</div>
						<div class = "row">
							<div class="col-md-12 text-center">
								<div class="radio">
									<input type="radio" name="response" value="excellent" checked> Excellent<br>
								</div>
								<div class="radio">
									<input type="radio" name="response" value="good"> Good<br>
								</div>
								<div class="radio">
									<input type="radio" name="response" value="average"> Average <br> 
								</div>
								<div class="radio">
									<input type="radio" name="response" value="poor"> Poor <br> 
								</div>
								<div class="radio">
									<input type="radio" name="response" value="very poor"> Very Poor<br> 
								</div>					
							</div>
						</div>
						
						<!--<div class = "row submit">
							<div class="col-md-12 text-center">
								<br>
									<a class="btn btn-primary btn-lg" href = #thirdpage>Next</a>
							</div> -->
						</div>
				</section>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
			<div class="item">
				<section id = "thirdpage" class = "thirdpage">
					<div class="container-fluid">
						<div class = "row">
							<div class="col-md-12 text-center">
								<!--<label class="text-left"><h4>Service:</h4></label>-->
									<fieldset class="rating">
										<h4>Service:</h4>										
										<input type="radio" class="rating-input" value="Excellent" onclick="postToService();"
												id="rating-input-1-5" name="service"/>
										<label for="rating-input-1-5" class="rating-star" value="Excellent">Excellent</label>
										<input type="radio" class="rating-input" value="Good" onclick="postToService();"
												id="rating-input-1-4" name="service"/>
										<label for="rating-input-1-4" class="rating-star" value="Good">Good</label>
										<input type="radio" class="rating-input" value="Average" onclick="postToService();"
												id="rating-input-1-3" name="service"/>
										<label for="rating-input-1-3" class="rating-star" value="Average">Average</label>
										<input type="radio" class="rating-input" value="Poor" onclick="postToService();"
												id="rating-input-1-2" name="service"/>
										<label for="rating-input-1-2" class="rating-star" value="Poor">Poor</label>
										<input type="radio" class="rating-input" value="Very Poor" onclick="postToService();"
												id="rating-input-1-1" name="service"/>
										<label for="rating-input-1-1" class="rating-star" value="Very poor">Very Poor</label>
									</fieldset>
									<script>
										function postToService(){
											for (i=0; i<document.getElementByName('service').length; i++){
												if(document.getElementByName('service')[i].checked == true){
													var ratingValue = document.getElementByName('service')[i].value
												}
											}
											alert(ratingValue);
										}
									</script>
							</div>
						</div>
						<div class = "row">
							<div class="col-md-12 text-center">
								<!--<label class="text-left"><h4>Room:</h4></label>-->
									<fieldset class="rating">
										<h4>Room:</h4>
										<input type="radio" class="rating-input" value="Excellent" onclick="postToRoom();"
												id="rating-input-2-5" name="room"/>
										<label for="rating-input-2-5" class="rating-star" value="Excellent">Excellent</label>
										<input type="radio" class="rating-input" value="Good" onclick="postToRoom();"
												id="rating-input-2-4" name="room"/>
										<label for="rating-input-2-4" class="rating-star" value="Good">Good</label>
										<input type="radio" class="rating-input" value="Average" onclick="postToRoom();"
												id="rating-input-2-3" name="room"/>
										<label for="rating-input-2-3" class="rating-star" value="Average">Average</label>>
										<input type="radio" class="rating-input" value="Poor" onclick="postToRoom();"
												id="rating-input-2-2" name="room"/>
										<label for="rating-input-2-2" class="rating-star" value="Poor">Poor</label>
										<input type="radio" class="rating-input" value="Very Poor" onclick="postToRoom();"
												id="rating-input-2-1" name="room"/>
										<label for="rating-input-2-1" class="rating-star" value="Very poor">Very Poor</label>
									</fieldset>
									<script>
										function postToRoom(){
											for (i=0; i<document.getElementByName('room').length; i++){
												if(document.getElementByName('room')[i].checked == true){
													var ratingValue = document.getElementByName('room')[i].value
												}
											}
											alert(ratingValue);
										}
									</script>
							</div>
						</div>
						<div class = "row">
							<div class="col-md-12 text-center">
								<!--<label class="text-left"><h4>Value:</h4></label>-->
									<fieldset class="rating">
										<h4>Value:</h4>
										<input type="radio" class="rating-input" value="Excellent" onclick="postToValue();"
												id="rating-input-3-5" name="value"/>
										<label for="rating-input-3-5" class="rating-star" value="Excellent">Excellent></label>
										<input type="radio" class="rating-input" value="Good" onclick="postToValue();"
												id="rating-input-3-4" name="value"/>
										<label for="rating-input-3-4" class="rating-star" value="Good">Good</label>
										<input type="radio" class="rating-input" value="Average" onclick="postToValue();"
												id="rating-input-3-3" name="value"/>
										<label for="rating-input-3-3" class="rating-star" value="Average">Average</label>
										<input type="radio" class="rating-input" value="Poor" onclick="postToValue();"
												id="rating-input-3-2" name="value"/>
										<label for="rating-input-3-2" class="rating-star" value="Poor">Poor</label>
										<input type="radio" class="rating-input" value="Very Poor" onclick="postToValue();"
												id="rating-input-3-1" name="value"/>
										<label for="rating-input-3-1" class="rating-star" value="Very poor">Very Poor</label>
									</fieldset>
									<script>
										function postToValue(){
											for (i=0; i<document.getElementByName('value').length; i++){
												if(document.getElementByName('value')[i].checked == true){
													var ratingValue = document.getElementByName('value')[i].value
												}
											}
											alert(ratingValue);
										}
									</script>
							</div>
						</div>
						<div class = "row">
							<div class="col-md-12 text-center">
								<!--<label class="text-left"><h4>Cleanliness:</h4></label>-->
									<fieldset class="rating">
										<h4>Cleanliness:</h4>
										<input type="radio" class="rating-input" value="Excellent" onclick="postToCleanliness();"
												id="rating-input-4-5" name="cleanliness"/>
										<label for="rating-input-4-5" class="rating-star" value="Excellent">Excellent</label>
										<input type="radio" class="rating-input" value="Good" onclick="postToCleanliness();"
												id="rating-input-4-4" name="cleanliness"/>
										<label for="rating-input-4-4" class="rating-star" value="Good">Good</label>
										<input type="radio" class="rating-input" value="Average" onclick="postToCleanliness();"
												id="rating-input-4-3" name="cleanliness"/>
										<label for="rating-input-4-3" class="rating-star" value="Average">Average</label>
										<input type="radio" class="rating-input" value="Poor" onclick="postToCleanliness();"
												id="rating-input-4-2" name="cleanliness"/>
										<label for="rating-input-4-2" class="rating-star" value="Poor">Poor</label>
										<input type="radio" class="rating-input" value="Very Poor" onclick="postToCleanliness();"
												id="rating-input-4-1" name="cleanliness"/>
										<label for="rating-input-4-1" class="rating-star" value="Very poor">Very Poor</label>
									</fieldset>
									<script>
										function postToCleanliness(){
											for (i=0; i<document.getElementByName('cleanliness').length; i++){
												if(document.getElementByName('cleanliness')[i].checked == true){
													var ratingValue = document.getElementByName('cle')[i].value
												}
											}
											alert(ratingValue);
										}
									</script>
							</div>
						</div>	
						<!--<div class = "row submit">
							<div class="col-md-12 text-center">
								<br>
									<a class="btn btn-primary btn-lg" href = #lastpage>Next</a>
							</div>
						</div>-->
					</div>	
				</section>
				
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
			<div class="item">
				<section id = "lastpage" class = "lastpage">
					<div class="container-fluid">
						
						<div class = "row">
							<div class="col-md-12 text-center">						
									
								  <label>Feedback</label>
								  <textarea class="form-control" rows="5" id="comment" placeholder = "Provide your feedback here" name="feedback"></textarea>
									
												
							</div>
						</div>
						<div class = "row">
							<div class="col-md-12 text-center">
								
									
								  <label>Name</label>
								  <input type="text" class="form-control" id="name" placeholder="Provide your full name here" value="" name="name">
									
												
							</div>
						</div>
						<div class = "row">
							<div class="col-md-12 text-center">
								
									
								  <label>Email</label>
								  <input type="text" class="form-control" id="email" placeholder="Provide your Email here" value="" name="email">
									
												
							</div>
						</div>
						<div class = "row">
							<div class="col-md-12 text-center">
								
									
								  <label>Phone Number</label>
								  <input type="phone" class="form-control" id="phone" placeholder="Provide your Phone number here" value="" name="phonenumber">
									
												
							</div>
						</div>
						
						<div class = "row submit">
							<div class="col-md-12 text-center">
								<br>
									<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit">
							</div>
						</div>
						
					</div>
				</section>
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				
			</div>
		</div>
		
		<!-- Left and right controls 
	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	  </a> 
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	  </a>-->
</div>
	
	
</form>	
					
</body>
</html>
