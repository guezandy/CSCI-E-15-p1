<!doctype html>
<html lang='en'>
<head>
	<title>Andrew Rodriguez</title>
	<meta charset='utf-8'>
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="flex-container">
		<div class="row"> 
			<div>
				<h1>Andrew Rodriguez</h1>
			</div>
			<div class="flex-item">
				<img src="images/drew.jpg" alt="Loading...">
			</div>
			<div>
				<h4>Cuban immigrant raised in Miami, FL - living now in San Francisco, CA. Like writing code to make things move.</h4>
			</div>
			<?php
				$quotes = [
					["Stay Hungry. Stay Foolish.", "Steve Jobs"],
					["Good Artists Copy, Great Artists Steal.", "Pablo Picasso"],
					["Argue with idiots, and you become an idiot.", "Paul Graham"],
					["Be yourself; everyone else is already taken.", "Oscar Wilde"],
					["Simplicity is the ultimate sophistication.", "Leonardo Da Vinci"]
				];
				$random_quote = $quotes[mt_rand(0, count($quotes) - 1)];
			?>
			<div>Quote: <?php echo $random_quote[0]; ?> - <?php echo $random_quote[1]; ?></div>
		</div>
	</div>
</body>
</html>
