<?php

class VendrediController extends BaseController {

	var $cartes 	= array();
	var $dangers	= array();
	var $pirates 	= array();
	var $p_sante	= 18;

	public function __construct()
	{
		// game loading
	}
	
	public function getIndex()
	{
		// first step of the game, asking for the level
		return View::make('base');
	}
}