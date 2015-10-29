<!doctype html>
<html>
<head>
    <title>Weather Predictor</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="js/script.js"></script>
</head>

<body>
	<div class="container topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
			<h1 class="center white">Weather Predictor</h1>
				<p class="lead center white">Enter your city below to get a forecast for the weather.</p>
				<form>
					<div class="form-group">
						<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, Saint-Petersburg..." />
					</div>
					<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
				</form>
				<div id="success" class="alert alert-success"></div>
				<div id="fail" class="alert alert-danger">Could not find weather data for that city. Please try again</div>
				<div id="noCity" class="alert alert-danger">Please enter a city</div>
			</div>
			
		</div>
	</div>

</body>
</html>