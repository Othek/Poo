<?php
// [abstract] Personnage (variables):
// - nom (string)
// - dateDeCreation (\DateTime)
// - phyPower (int) (0-100)
// - magPower (int) (0-100)
// - armor (int) (0-100)
// - escape (int) (0-100) // chance to escape // rogue.escape = 95 // warrior.escape = 50 => mt_rand(0,  (escape - 100))
// - life (int) (0-100)
// - mana (int) (0-100)
// - classe (string) : guerrier, mage, voleur, archer, ....
// _______ inventory & stuff
// - weapon (Weapon)  : equipped item
// - shield (Shield) : equipped item
// - bag (Bag)

// Personnage (méthodes):
// - [public] useItem(Item $item) => if item.equipable === false
//
// - [public] equipItem (Item $item) => if item.equipable === true
// item is Shield : ($item === Shield && Personnage.weapon.isTwoHanded === false)
// item is weapon : ($item === Weapon) => si item.isTwoHanded === true => unequipItem($shield)
//
// - [public] unequipItem (Item $item) : deséquiper un item
//
// - [public] attackTarget(Personnage $target) : attaquer un personnage => code pour calculer les dégats et l'utilisation de mana
// $damage = [calcul des dmg];
// $target->receiveDamage($damage);
//
// - [public] receiveDamage(int $damage) : recevoir des dégats => code pour calculer les dégats
// 
// - [private] isDodged() : calculer si le personnage a esquivé l'attaque mt_rand(0,  (escape - 100)) === (escape - 100)
//
// - [public] isAlive() : vérifier si le personnage est en vie

// Mage extends Personnage
// Warrior extends Personnage
// Rogue extends Personnage

// [abstract] Foe extends Personnage => nom random, stats random
// Foe : bat|zombie|orc|gobelin|squelette
// each Foe override attackTarget(Personnage $target) => code pour calculer les dégats et l'utilisation de mana

// [abstract] item :
// - name (string)
// - description (string)
// - equipable (bool)
// - type (string) : weapon|shield|armor|potion|food|key|quest|misc

// weapon extend item :
// - damage (int)
// - isTwoHanded (bool)
// - weaponClass (string) : sword|axe|dagger|bow|staff|wand|spear|hammer|fist

// shield extend item :
// - armor (int)

// potion extend item :
// - const TYPE_HEAL = 'heal', TYPE_MANA = 'mana'
// - amount (float)
// - type (string)(self::TYPE_HEAL|self::TYPE_MANA)
// - used (bool) (false)

// Item > Weapon > Sword > LongSword
// Item > Weapon > Sword > GreatSword
// Item > Weapon > Staff > FireStaff
// Item > Shield > SmallShield
// Item > utility > Potion > HealthPotion
// Item > utility > Potion > ManaPotion

// Personnage->useItem(Item $item)
// Personnage->equipItem(Item $item) -> if item.equipable === true
// Personnage->attackTarget(Personnage $target)