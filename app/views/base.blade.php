<doctype html>
<html>
<head>
	<title>Vendredi</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	{{HTML::style('css/style.css')}}
	{{HTML::style('css/jquery.fancybox.css')}}
	{{HTML::script('js/jquery-1.10.1.min.js')}}
</head>
<body>
<div id="game-wrapper">
	<div id="game-container">
		<div id="game-content">
			<?php // Pirates ?>
			<a class="fancybox" href="{{asset('img/cards/'.$all_cards[$pirate_1]->card_image)}}">{{HTML::image('img/cards/'.$all_cards[$pirate_1]->card_image, 'pirate 1', array('class' => 'horizontal-card', 'id' => 'pirate-1'))}}</a>
			<a href="#" class="fancybox">{{HTML::image('img/cards/'.$all_cards[$pirate_2]->card_image, 'pirate 2', array('class' => 'horizontal-card', 'id' => 'pirate-2'))}}</a>

			<?php // Game Level ?>
			{{HTML::image('img/cards/game-lvl-'.$phase.'.png', 'game level', array('class' => 'horizontal-card', 'id' => 'game-level'))}}

			<?php // Life Points ?>
			<span class="lifepoints" id="lifepoints-reserve">{{22-$lifepoints}}</span>
			<span class="lifepoints" id="lifepoints-pool">{{$lifepoints}}</span>
		</div>
	</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
{{HTML::script('js/jquery.fancybox.pack.js')}}
{{HTML::script('js/script.js')}}
</body>
</html>