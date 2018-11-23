<?php
	header("Access-Control-Allow-Origin: *");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>Tweeagle</title>
    <style type="text/css">
    	@import url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext');

    	html, body, .container {
    		height: 100%;
    		font-family: 'Raleway', sans-serif;
    		color: #14171a;
		}
		.container {
		    display: table;
		    vertical-align: middle;
		}
		.vertical-center-row {
		    display: table-cell;
		    vertical-align: middle;
		}

		.twg-btn{
			border-radius: 30px;
		}

		.twg-btn:hover{
			background-color: #1b95e0;
			border-color: #1b95e0;
		}

		.twg-btn:active{
			background-color: #1da1f2 !important;
			border-color: #1da1f2 !important;
		}

		.twg-input-field{
			border-radius: 30px;
		}

		.twg-header{
			position: absolute;
			width: 100%;
			background-color: #fff;
		}

		.twg-footer{
			width: 100%;
			background-color: #fff;
		}

		.twg-footer a{
			font-size: 12px;
			color: #14171a;
			font-weight: 200;
			margin: 0px 10px;
		}

		.twg-header .navbar{
			background: transparent !important;
			font-weight: 300;
		}

		.twg-footer .navbar{
			background: transparent !important;
			font-weight: 200;
		}

		.twg-btn-menu{
			cursor: pointer;
		}

		.twg-btn-sub{
			color: #1b95e0;
		}

		.twg-btn-sub:hover{
			text-decoration: none;
			color: #1da1f2;
		}

    </style>
  </head>
  <body>
  	<header class="twg-header">
	  	<nav class="navbar sticky-top navbar-light bg-light">
		  <a class="navbar-brand" href="index.html">Tweeagle</a>
		  <i class="fas fa-ellipsis-h twg-btn-menu"></i>
		</nav>
	</header>

	<div id="main" class="container">
		<div class="vertical-center-row">
			<div class="row" align="center">
		    	<div class="col">
		      		
		    	</div>
		    	<div class="col-6">
		      		<div class="text-center">
					  <img src="imgs/tweeagle_logo.png" class="rounded mx-auto" alt="Tweeagle Logo" style="width: 200px; margin-bottom: 35px;">
					</div>
		    	</div>
		    	<div class="col">
		      		
		    	</div>
		  	</div>

		  	<div class="row">
		    	<div class="col">
		      		
		    	</div>
		    	<div class="col-lg-5 col-10">
		      		<div class="input-group mb-3">
						<input id="query" type="text" class="form-control twg-input-field" placeholder="Search Tweets" aria-label="Search Query" aria-describedby="button-addon2">
					  	<div class="input-group-append">
					    	<button id="textsearch" class="btn btn-outline-secondary twg-btn" type="button" id="button-addon2" onclick="textSearch()">Search</button>
						</div>
					</div>
		    	</div>
		    	<div class="col">
		      		
		    	</div>
		  	</div>

		  	<div class="row">
		    	<div class="col">
		      		
		    	</div>
		    	<div class="col-5" class="text-center" align="center">
			    	<a id="phrasesearch" class="twg-btn-sub" href="#" onclick="phraseSearch()">Search as a Phrase</a>
		    	</div>
		    	<div class="col">
		      		
		    	</div>
		  	</div>
		</div>
	</div>

	<!-- Results -->
	<div id="results" class="container">
		<p>lol</p>
	</div>

	<!-- Footer -->
	<footer class="twg-footer">
		<nav class="navbar fixed-bottom navbar-light bg-light">
		  <!-- <a class="navbar-brand" href="#">Fixed bottom</a> -->
		  <div class="col text-center" align="center">
		  	<a href="#">About</a>
		  	<a href="#">Learn More</a>
		  	<a href="#">Terms and Conditions</a>
		  </div>
		</nav>
	</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://localhost/tweeagle/js/spellchecker-autocorrect/index.js"></script>
    <script type="text/javascript" src="http://localhost/tweeagle/js/tweeagle.js"></script>
    <script type="text/javascript">
    	window.onload = function(){
    		$("#results").css("display", "none");
    	};

    	function textSearch(){
    		$("#results").css("display", "block");
    		$("#main").css("display", "none");

			var query = $("#query").val();

			$.ajax({
				type: "POST",
				url: "http://localhost:8080/TweeagleAPI/rest/search/text",
				crossDomain: true,
				data: {
					q: query,
					r: 0
				},
				success: function(res) {
					$("results").html(res);
				},
				error: function(res){
					console.log(res);
					console.log("res = " + res.responseText);
				}
			});

    	}

    	function phraseSearch(){
    		$("#results").css("display", "block");
    		$("#main").css("display", "none");
    	}


    	function sendMentoringRequestWithMessage(menteeid, mentorid){
		//alert("hi");
			var msg = jQuery('#mentee_message').val();
			
			jQuery.ajax({
				type: "POST",
				url: "/wp-content/themes/responsive-brix-child/page-templates/difensREST.php",
				crossDomain: false,
				data: {
					command: "requestMentor",
					mentor_id: mentorid,
					mentee_id: menteeid,
					message_con: msg
				},
				success: function(res) {
					if(res==0){
						//request successfully sent
						jQuery('#mentee_message').val("");
						jQuery('#responseLabel').text("Request was sent successfully!");
					}else if (res==1){
						//request already exists
						jQuery('#mentee_message').val("");
						jQuery('#responseLabel').text("Request was already been sent!");
					}else if (res==-1){
						//unexpected error appeared
						jQuery('#responseLabel').text("Something went wrong! Please try again in a while.");
					}
				},
				error: function(res){
					jQuery('#responseLabel').text("Something went wrong! Please try again in a while. Error Code: " + res);
					console.log(res);
					console.log("res = " + res.responseText);
				}
			}).done(function(res) {
				//alert("Response" + res);
			});
		}

    </script>
  </body>
</html>