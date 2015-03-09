<?php

class VendrediController extends BaseController {

	var $carte = 'As de coeur';
	
	public function getIndex()
	{
		return View::make('base')->with('carte', $this->carte);
	}

	public function getSecond()
	{
		$this->carte = '2 de trefle';
		return View::make('base')->with('carte', $this->carte);
	}
}