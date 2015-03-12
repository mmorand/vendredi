<?php

class VendrediController extends BaseController {

	// Variables de jeu
	var $board_game = array();
		// Niveau de jeu
		var $phase 			= 0;

		// Decks de cartes
		var $deck_oldness 	= '';
		var $deck_fighting 	= '';
		var $deck_dangers	= '';
		var $pirate1 		= 0;
		var $pirate2 		= 0;

		var $all_cards 		= array();

		//Points de santé
		var $lifepoints = 0;
	// .Variables de jeu

	// Creating a game with every args
	var $test		= 'démarrage';

	// Cards pool
	var $pirates 	= array();

	public function __construct()
	{
		// Avant de charger une méthode, contrôler si un jeu est en cours
		$this->beforeFilter(function(){

			// get all games with status 1 (in progress)
			$games = DB::table('vendredi_games')->where('status', 1)->first();

			// Si aucun jeu n'existe en base de données, rediriger vers l'index
			// pour choisir le niveau de difficulté et lancer une nouvelle partie
			if( ($games->status == 0) && (Route::currentRouteAction() != ('VendrediController@getIndex' || 'VendrediController@getCreate') ) ) {
				return Redirect::action('VendrediController@getIndex');
			} else {
				//return Redirect::action('VendrediController@getGame');
			}
		});

		$game_in_progress = DB::table('vendredi_games')->where('status', 1)->first();
		$every_cards = DB::table('vendredi_cards')->get();
		array_unshift($every_cards, 'phoney');
		unset($every_cards[0]);

		$this->phase 			= $game_in_progress->status;
		$this->lifepoints 		= $game_in_progress->lifepoints;
		$this->pirate1 			= $game_in_progress->pirate_1;
		$this->pirate2 			= $game_in_progress->pirate_2;
		$this->deck_oldness  	= $game_in_progress->oldness;
		$this->deck_dangers 	= $game_in_progress->dangers;
		$this->deck_fighting 	= $game_in_progress->fighting;
		$this->all_cards		= $every_cards;
	}

	public function getIndex($lvl = 0)
	{
		// Create the game in the correct configuration level
		return View::make('hello')->with(array('test' => $this->board_game['test']));
	}

	public function getCreate($lvl = 0)
	{
		// Si le jeu est créé depuis l'url sans le bon niveau
		if( $lvl < 1 || $lvl > 4 ) {
			return Redirect::action('VendrediController@getIndex');
		} else {
			// Le jeu peut-être créé dans la base de données

			// Le jeu commence à l'étape 1
			$this->phase = 1;

			// Mélanger les cartes vieillissement
			$oldness_cards_hard = DB::table('vendredi_cards')->where(array('type' => 'oldness', 'lvl_2' => 1))->get();
			$oldness_cards_soft = DB::table('vendredi_cards')->where(array('type' => 'oldness', 'lvl_2' => 0))->get();

			$deck_och = array();
			$deck_ocs = array();
			foreach ($oldness_cards_hard as $och) { array_push($deck_och, $och->id); }
			foreach ($oldness_cards_soft as $ocs) { array_push($deck_ocs, $ocs->id); }
			shuffle($deck_och);
			shuffle($deck_ocs);

			$deck_och = implode(', ', $deck_och);
			$deck_ocs = implode(', ', $deck_ocs);
			$this->deck_oldness = $deck_ocs . ', ' . $deck_och;

			// Mélanger les cartes combat
			$fighting_cards = DB::table('vendredi_cards')->where('type', 'fight')->get();
			$deck_fight = array();
			foreach ($fighting_cards as $fight) { array_push($deck_fight, $fight->id); }
			shuffle($deck_fight);

			$this->deck_fighting = implode(', ', $deck_fight);

			// Mélanger les cartes danger
			$danger_cards = DB::table('vendredi_cards')->where('type', 'danger')->get();
			$deck_danger = array();
			foreach ($danger_cards as $danger) { array_push($deck_danger, $danger->id); }
			shuffle($deck_danger);

			$this->deck_dangers = implode(', ', $deck_danger);

			// Mélanger et récupèrer deux pirates
			$pirates_cards = DB::table('vendredi_cards')->where('type', 'pirate')->get();
			$deck_pirates = array();
			foreach ($pirates_cards as $pirate) { array_push($deck_pirates, $pirate->id); }
			shuffle($deck_pirates);

			$this->pirate1 = $deck_pirates[0];
			$this->pirate2 = $deck_pirates[1];

			// Le joueur commence avec 20pts de vie
			$this->lifepoints = 20;

			// Injection de la partie dans la Base de données
			DB::table('vendredi_games')->insert(array(
				'status' 		=> 1,
				'phase' 		=> $this->phase,
				'lifepoints' 	=> $this->lifepoints,
				'pirate_1' 		=> $this->pirate1,
				'pirate_2' 		=> $this->pirate2,
				'oldness' 		=> $this->deck_oldness,
				'dangers' 		=> $this->deck_dangers,
				'fighting' 		=> $this->deck_fighting,
				'endgame' 		=> 0,
				'points' 		=> 0
			));

			// Renvoie sur la page de jeu
			return Redirect::action('VendrediController@getGame');
		}
		$this->board_game['test'] = $lvl;
		// Create the game in the correct configuration level
		return View::make('hello')->with(array('test' => $this->board_game['test']));
	}

	/**
	 * Display the game with every cards
	 */

	public function getGame()
	{
		return View::make('base')->with(array(
			'phase' 		=> $this->phase,
			'lifepoints' 	=> $this->lifepoints,
			'pirate_1' 		=> $this->pirate1,
			'pirate_2' 		=> $this->pirate2,
			'oldness' 		=> $this->deck_oldness,
			'dangers' 		=> $this->deck_dangers,
			'fighting' 		=> $this->deck_fighting,
			'all_cards'		=> $this->all_cards,
		));
	}
}