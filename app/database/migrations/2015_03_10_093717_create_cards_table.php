<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('vendredi_cards', function(Blueprint $t) {
			$t->increments('id');
			$t->string('name', 64);
			$t->string('name_danger', 64);
			$t->enum('type', array('pirate', 'danger', 'fight', 'oldness'));
			$t->tinyInteger('strength');
			$t->enum('action', array('best=0', 'copy', 'double', 'destroy', 'draw+1', 'draw+2', 'lifepoint+1', 'lifepoints+2', 'lifepoints-1', 'lifepoints-2',
									'phase-1', 'shuffle', 'stop', 'switch+1', 'switch+2', 'under_draw',
									'combat_1pt', 'combat_2pts', 'moitie_combat', 'oldness_2pts', 'danger'));
			$t->tinyInteger('free_cards');
			$t->tinyInteger('lvl_1');
			$t->tinyInteger('lvl_2');
			$t->tinyInteger('lvl_3');
			$t->string('card_image', 64)->default('333x187.gif');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('vendredi_cards');
	}

}
