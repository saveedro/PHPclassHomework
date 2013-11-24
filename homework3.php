<?php 

	// Define an Mammal class, and 3 other classes for specific types of animals that are mammals
	// Each class should have 3 attributes and 3 methods that are publicly accessible
	// Note that any of the 3 classes could share the same properties or methods

	// For example, Class1 and Class2 has an instance variable named color whose name is the same in both classes
	// class Class1 {
	// 	public $color;	
	// }

	// class Class2 {
	// 	public $color;
	// }

class Mammal {
	public $baby = 'Live young';
	public $lactation = 'Yes';
	public $blooded = 'Warm blooded';

	public function breathe() {
		print "Inhale exhale!";
	}
	public function reproduce() {
		Print 'Let\'s make a baby!';
	}
	public function eat() {
		Print 'Eat all the things!';
	}
}

class Dolphin {
	public $color = 'Blue';
	public $size = 'Medium';
	public $eater = 'Carnivore';

	public function swim() {
		print'Splash!';
	}
	public function flip() {
		print 'Backflip!';
	}
	public function eat() {
		print 'Tasty fish!';
	}
}

class Elephant {
	public $color = 'Grey';
	public $size = 'Large';
	public $eater = 'Herbivore';

	public function run() {
		print 'Get out of the way!';
	}
	public function trunk() {
		print 'Cover your ears!';
	}
	public function eat() {
		print 'Delicious greens!';
	}
}

class Platypus {
	public $color = 'Brown';
	public $size = 'Medium';
	public $eater = 'Omnivore';

	public function swim() {
		print 'Awkward swimming!';
	}
	public function tail() {
		print 'Beaver flap!';
	}
	public function attack() {
		print 'Poison claws!';
	}
}

?>