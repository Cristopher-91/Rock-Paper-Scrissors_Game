<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8"/>
	<title>Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">
	<form method="GET" action="wyniki.php">
		<p>Proszę wybrać</p>
			<div class="cc-selector">
			  <input id="Rock" type="radio" name="me" value="Rock" /> 
				<label class="choice-cc Rock" for="Rock"></label>
			  <input id="Paper" type="radio" name="me" value="Paper" /> 
				<label class="choice-cc Paper" for="Paper"></label>
			  <input id="Scrissors" type="radio" name="me" value="Scrissors" /> 
				<label class="choice-cc Scrissors" for="Scrissors"></label></br></br>
			  <input type="submit" name="button" value="Submit">
			 </div>
	</form>
	</div>
</body>
</html>
