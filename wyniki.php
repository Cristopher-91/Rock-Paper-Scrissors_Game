<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8"/>
	<title>Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="container">
<?php
	
	$games = array(0=>"Rock", 1=>"Paper", 2=>"Scrissors");
	
		$size = sizeof($games) - 1 ;
		$choice = (rand(0,$size));		
		
		$me = $_GET['me'];
		
		switch ($choice){
		
			case 0://Kamień
				echo "Wylosowano " . $games[$choice];
				echo "<br>\nTy wybrałeś " . $me; 
				echo "<br>\n";
					switch($me){
						case "Rock":
							echo "Remis";
							break;
						case "Scrissors":
							echo "Przegrywasz";
							break;
						case "Paper":
							echo"Wygrywasz";
							break;
					}
				break;
				
			case 1://Papier
				echo "Wylosowano " . $games[$choice];
				echo "<br>\nTy wybrałeś " . $me;
				echo "<br>\n";
					switch($me){
						case "Rock":
							echo "Przegrywasz";
							break;
						case "Scrissors":
							echo "Wygrywasz";
							break;
						case "Paper":
							echo"Remis";
							break;
					}
				break;
				
			case 2://Nożyce
				echo "Wylosowano " . $games[$choice];
				echo "<br>\nTy wybrałeś " . $me;
				echo "<br>\n";
					switch($me){
						case "Rock":
							echo "Wygrywasz";
							break;
						case "Scrissors":
							echo "Remis";
							break;
						case "Paper":
							echo"Przegrywasz";
							break;
					}
				break;	
		}
		
?>
<br><br>
<a href="index.php">Zagraj jeszcze raz</a>;
</div>
</body>
</html>