<?php
class CardsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('vendredi_cards')->delete();

		DB::table('vendredi_cards')->insert(array(
			// Fighting cards
			array('name'=>'Distrait','name_danger'=>'','type'=>'fight','strength'=>'-1','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-01.png'),
			array('name'=>'Distrait','name_danger'=>'','type'=>'fight','strength'=>'-1','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-01.png'),
			array('name'=>'Distrait','name_danger'=>'','type'=>'fight','strength'=>'-1','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-01.png'),
			array('name'=>'Distrait','name_danger'=>'','type'=>'fight','strength'=>'-1','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-01.png'),
			array('name'=>'Distrait','name_danger'=>'','type'=>'fight','strength'=>'-1','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-01.png'),
			array('name'=>'Faible','name_danger'=>'','type'=>'fight','strength'=>0,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-02.png'),
			array('name'=>'Faible','name_danger'=>'','type'=>'fight','strength'=>0,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-02.png'),
			array('name'=>'Faible','name_danger'=>'','type'=>'fight','strength'=>0,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-02.png'),
			array('name'=>'Faible','name_danger'=>'','type'=>'fight','strength'=>0,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-02.png'),
			array('name'=>'Faible','name_danger'=>'','type'=>'fight','strength'=>0,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-02.png'),
			array('name'=>'Faible','name_danger'=>'','type'=>'fight','strength'=>0,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-02.png'),
			array('name'=>'Faible','name_danger'=>'','type'=>'fight','strength'=>0,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-02.png'),
			array('name'=>'Faible','name_danger'=>'','type'=>'fight','strength'=>0,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-02.png'),
			array('name'=>'Mange','name_danger'=>'','type'=>'fight','strength'=>0,'action'=>'lifepoints+2','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-03.png'),
			array('name'=>'Concentré','name_danger'=>'','type'=>'fight','strength'=>1,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-04.png'),
			array('name'=>'Concentré','name_danger'=>'','type'=>'fight','strength'=>1,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-04.png'),
			array('name'=>'Concentré','name_danger'=>'','type'=>'fight','strength'=>1,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-04.png'),
			array('name'=>'Ingénieux','name_danger'=>'','type'=>'fight','strength'=>2,'action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'combat-05.png'),

			// Danger cards
			array('name'=>'Connaissances','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'destroy','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-06.png'),
			array('name'=>'Equipement','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'draw+2','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-04.png'),
			array('name'=>'Equipement','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'draw+2','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-04.png'),
			array('name'=>'Immitation','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'copy','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-05.png'),
			array('name'=>'Livre','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'phase-1','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-01.png'),
			array('name'=>'Nourriture','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'lifepoints+1','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-02.png'),
			array('name'=>'Nourriture','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'lifepoints+1','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-02.png'),
			array('name'=>'Stratégie','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'switch+2','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-03.png'),
			array('name'=>'Stratégie','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'switch+2','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-03.png'),
			array('name'=>'Ruse','name_danger'=>'Vers l\'épave avec le radeau','type'=>'danger','strength'=>0,'action'=>'under_draw','free_cards'=>1,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>3,'card_image'=>'danger-07.png'),
			array('name'=>'Connaissances','name_danger'=>'Explore l\'ile','type'=>'danger','strength'=>1,'action'=>'destroy','free_cards'=>2,'lvl_1'=>1,'lvl_2'=>3,'lvl_3'=>6,'card_image'=>'danger-09.png'),
			array('name'=>'Imitation','name_danger'=>'Explore l\'ile','type'=>'danger','strength'=>1,'action'=>'copy','free_cards'=>2,'lvl_1'=>1,'lvl_2'=>3,'lvl_3'=>6,'card_image'=>'danger-12.png'),
			array('name'=>'Nourriture','name_danger'=>'Explore l\'ile','type'=>'danger','strength'=>1,'action'=>'lifepoints+1','free_cards'=>2,'lvl_1'=>1,'lvl_2'=>3,'lvl_3'=>6,'card_image'=>'danger-10.png'),
			array('name'=>'Nourriture','name_danger'=>'Explore l\'ile','type'=>'danger','strength'=>1,'action'=>'lifepoints+1','free_cards'=>2,'lvl_1'=>1,'lvl_2'=>3,'lvl_3'=>6,'card_image'=>'danger-10.png'),
			array('name'=>'Répétition','name_danger'=>'Explore l\'ile','type'=>'danger','strength'=>1,'action'=>'double','free_cards'=>2,'lvl_1'=>1,'lvl_2'=>3,'lvl_3'=>6,'card_image'=>'danger-11.png'),
			array('name'=>'Ruse','name_danger'=>'Explore l\'ile','type'=>'danger','strength'=>1,'action'=>'under_draw','free_cards'=>2,'lvl_1'=>1,'lvl_2'=>3,'lvl_3'=>6,'card_image'=>'danger-08.png'),
			array('name'=>'Arme','name_danger'=>'Explore l\'ile','type'=>'danger','strength'=>2,'action'=>'','free_cards'=>3,'lvl_1'=>2,'lvl_2'=>5,'lvl_3'=>8,'card_image'=>'danger-19.png'),
			array('name'=>'Connaissances','name_danger'=>'Explore l\'ile davantage','type'=>'danger','strength'=>2,'action'=>'destroy','free_cards'=>3,'lvl_1'=>2,'lvl_2'=>5,'lvl_3'=>8,'card_image'=>'danger-17.png'),
			array('name'=>'Expérience','name_danger'=>'Explore l\'ile davantage','type'=>'danger','strength'=>2,'action'=>'draw+1','free_cards'=>3,'lvl_1'=>2,'lvl_2'=>5,'lvl_3'=>8,'card_image'=>'danger-18.png'),
			array('name'=>'Nourriture','name_danger'=>'Explore l\'ile davantage','type'=>'danger','strength'=>2,'action'=>'lifepoints+1','free_cards'=>3,'lvl_1'=>2,'lvl_2'=>5,'lvl_3'=>8,'card_image'=>'danger-14.png'),
			array('name'=>'Répétition','name_danger'=>'Explore l\'ile davantage','type'=>'danger','strength'=>2,'action'=>'double','free_cards'=>3,'lvl_1'=>2,'lvl_2'=>5,'lvl_3'=>8,'card_image'=>'danger-15.png'),
			array('name'=>'Stratégie','name_danger'=>'Explore l\'ile davantage','type'=>'danger','strength'=>2,'action'=>'switch+1','free_cards'=>3,'lvl_1'=>2,'lvl_2'=>5,'lvl_3'=>8,'card_image'=>'danger-13.png'),
			array('name'=>'Vision','name_danger'=>'Explore l\'ile davantage','type'=>'danger','strength'=>2,'action'=>'shuffle','free_cards'=>3,'lvl_1'=>2,'lvl_2'=>5,'lvl_3'=>8,'card_image'=>'danger-16.png'),
			array('name'=>'Connaissances','name_danger'=>'Animaux sauvages','type'=>'danger','strength'=>3,'action'=>'destroy','free_cards'=>4,'lvl_1'=>4,'lvl_2'=>7,'lvl_3'=>11,'card_image'=>'danger-20.png'),
			array('name'=>'Expérience','name_danger'=>'Animaux sauvages','type'=>'danger','strength'=>3,'action'=>'draw+1','free_cards'=>4,'lvl_1'=>4,'lvl_2'=>7,'lvl_3'=>11,'card_image'=>'danger-21.png'),
			array('name'=>'Stratégie','name_danger'=>'Animaux sauvages','type'=>'danger','strength'=>3,'action'=>'switch+1','free_cards'=>4,'lvl_1'=>4,'lvl_2'=>7,'lvl_3'=>11,'card_image'=>'danger-23.png'),
			array('name'=>'Vision','name_danger'=>'Animaux sauvages','type'=>'danger','strength'=>3,'action'=>'shuffle','free_cards'=>4,'lvl_1'=>4,'lvl_2'=>7,'lvl_3'=>11,'card_image'=>'danger-22.png'),
			array('name'=>'Arme','name_danger'=>'Cannibales','type'=>'danger','strength'=>4,'action'=>'','free_cards'=>5,'lvl_1'=>5,'lvl_2'=>9,'lvl_3'=>14,'card_image'=>'danger-24.png'),
			array('name'=>'Arme','name_danger'=>'Cannibales','type'=>'danger','strength'=>4,'action'=>'','free_cards'=>5,'lvl_1'=>5,'lvl_2'=>9,'lvl_3'=>14,'card_image'=>'danger-24.png'),

			// Oldness cards
			array('name'=>'Apeuré','name_danger'=>'','type'=>'oldness','strength'=>0,'action'=>'best=0','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'oldness-01.png'),
			array('name'=>'Très fatigué','name_danger'=>'','type'=>'oldness','strength'=>0,'action'=>'stop','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'oldness-02.png'),
			array('name'=>'A faim','name_danger'=>'','type'=>'oldness','strength'=>0,'action'=>'lifepoints-1','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'oldness-03.png'),
			array('name'=>'Distrait','name_danger'=>'','type'=>'oldness','strength'=>'-1','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'oldness-04.png'),
			array('name'=>'Stupide','name_danger'=>'','type'=>'oldness','strength'=>'-2','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'oldness-05.png'),
			array('name'=>'Stupide','name_danger'=>'','type'=>'oldness','strength'=>'-2','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'oldness-05.png'),
			array('name'=>'Très stupide','name_danger'=>'','type'=>'oldness','strength'=>'-3','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'oldness-06.png'),
			array('name'=>'Idiot','name_danger'=>'','type'=>'oldness','strength'=>'-4','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>0,'card_image'=>'oldness-07.png'),
			array('name'=>'Suicidaire','name_danger'=>'','type'=>'oldness','strength'=>'-5','action'=>'','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>0,'card_image'=>'oldness-08.png'),
			array('name'=>'Affamé','name_danger'=>'','type'=>'oldness','strength'=>0,'action'=>'lifepoints-2','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>1,'lvl_3'=>0,'card_image'=>'oldness-09.png'),

			// Pirates cards
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'','free_cards'=>6,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>20,'card_image'=>'pirate-09.png'),
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'','free_cards'=>7,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>25,'card_image'=>'pirate-03.png'),
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'','free_cards'=>8,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>30,'card_image'=>'pirate-04.png'),
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'','free_cards'=>9,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>35,'card_image'=>'pirate-01.png'),
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'','free_cards'=>10,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>40,'card_image'=>'pirate-02.png'),
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'danger','free_cards'=>0,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'pirate-05.png'),
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'oldness_2pts','free_cards'=>5,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>0,'card_image'=>'pirate-08.png'),
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'combat_2pts','free_cards'=>7,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>16,'card_image'=>'pirate-10.png'),
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'moitie_combat','free_cards'=>9,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>22,'card_image'=>'pirate-07.png'),
			array('name'=>'','name_danger'=>'','type'=>'pirate','strength'=>0,'action'=>'combat_1pt','free_cards'=>10,'lvl_1'=>0,'lvl_2'=>0,'lvl_3'=>52,'card_image'=>'pirate-06.png')
		));
	}
}