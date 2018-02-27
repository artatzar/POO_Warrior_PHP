<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {

        static function createMyWarrior () {
          $guerrier = new PokemonWarrior($GLOBALS['warriorID']);
          $guerrier->SetImageUrl("https://assets.pokemon.com/assets/cms2/img/pokedex/full/729.png");
          $arme = new Weapon('Fusil', 100);
          $arme-> SetImageUrl("http://www.essai-armes.fr/wp-content/uploads/2017/10/HK-MR223-bo%C3%AEtier-de-culasse_petite.jpg");
          $guerrier->SetWeapon($arme);
          $guerrier->saveNew();

  }
        static function createOtherWarrior(){
          $guerrier= new MarvelWarrior ($id='Toto');
          $guerrier->SetImageUrl ("https://www.woolworths.com.au/shop/discover/heroes");
          $arme = new Weapon('Lance', 50);
          $arme-> SetImageUrl("https://i.annihil.us/u/prod/marvel//universe3zx/images/9/91/Gungrir.jpg");
          $guerrier->SetWeapon($arme);
          $guerrier->saveNew();
      }
  }



