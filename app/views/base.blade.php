<doctype html>
<html>
<head>
	<title>Vendredi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	{{HTML::style('css/style.css')}}
</head>
<body>
<div id="game-wrapper">
	<div id="game-container">
		<div id="game-content">
			{{HTML::image('img/cards/'.$pirate1['card_url'], 'pirate 1', array('class' => 'card-pirate', 'id' => 'pirate-1'))}}
			{{HTML::image('img/cards/'.$pirate2['card_url'], 'pirate 2', array('class' => 'card-pirate', 'id' => 'pirate-2'))}}
		</div>
	</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>