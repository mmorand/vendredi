<?php

class VendrediController extends BaseController {

	// Creating a game with every args
	var $test		= 'démarrage';
	var $board_game	= array();

	// Cards pool
	var $pirates 	= array();

	// Pirates
	var $pirate1 	= array();
	var $pirate2 	= array();

	public function __construct()
	{
		$this->board_game['status'] = $this->test;
		// game loading
		array_push($this->pirates, $this->addCard('', 'pirate', 20, '', 6, 0, 0, 20, 'pirate-01.png'));
		array_push($this->pirates, $this->addCard('', 'pirate', 25, '', 7, 0, 0, 25, 'pirate-02.png'));
		array_push($this->pirates, $this->addCard('', 'pirate', 30, '', 8, 0, 0, 30, 'pirate-03.png'));
		array_push($this->pirates, $this->addCard('', 'pirate', 35, '', 9, 0, 0, 35, 'pirate-04.png'));
		array_push($this->pirates, $this->addCard('', 'pirate', 40, '', 10, 0, 0, 40, 'pirate-05.png'));
		array_push($this->pirates, $this->addCard('', 'pirate', 16, 'combat_2pts', 7, 0, 0, 16, 'pirate-06.png'));
		array_push($this->pirates, $this->addCard('', 'pirate', 22, 'moitie_combat', 9, 0, 0, 22, 'pirate-07.png'));
		array_push($this->pirates, $this->addCard('', 'pirate', '*', 'oldness_2pts', 5, 0, 0, '*', 'pirate-08.png'));
		array_push($this->pirates, $this->addCard('', 'pirate', '*', 'combat_1pt', '*', 0, 0, '*', 'pirate-09.png'));
		array_push($this->pirates, $this->addCard('', 'pirate', 52, 'combat_1pt', 10, 0, 0, 52, 'pirate-10.png'));
		// Shuffle the pirates card deck
		shuffle($this->pirates);

		// Set the two pirates for this game
		$this->pirate1 = $this->pirates[0];
		$this->pirate2 = $this->pirates[1];

		$this->board_game['pirate1'] = $this->pirate1;
		$this->board_game['pirate2'] = $this->pirate2;
	}

	private function addCard( $name = '', $type = 0, $strengh = 0, $power = '', $free_cards = 0, $strengh_lvl1 = 0, $strengh_lvl2 = 0, $strengh_lvl3 = 0, $card_url = '333x187.gif' )
	{
		// Generate cards
		$card = array(
			'name'		 	=> $name,
			'type'			=> $type,
			'strengh'		=> $strengh,
			'power'			=> $power,
			'free_cards'	=> $free_cards,
			'strengh_lvl1'	=> $strengh_lvl1,
			'strengh_lvl2'	=> $strengh_lvl2,
			'strengh_lvl3'	=> $strengh_lvl3,
			'card_url'		=> $card_url
		);
		return $card;
	}
	
	public function getIndex($lvl = 0)
	{
		if( $lvl != 0 ) {

			$this->board_game['status'] = $lvl;
			return View::make('base')->with(array(
				'board_game' => $this->board_game
			));
		}
	}
}