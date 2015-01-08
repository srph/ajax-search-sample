<?php

// ============================

/**
 * @author Kier Borromeo (srph)
 * @link https://github.com/srph
 * @link https://twitter.com/_srph
 * @license MIT
 * @copyright 2015
 *
 * |  | _|__| ___________  ______   ____   ____ |__|
 * |  |/ /  |/ __ \_  __ \ \____ \ /  _ \ / ___\|  |
 * |    <|  \  ___/|  | \/ |  |_> >  <_> ) /_/  >  |
 * |__|_ \__|\___  >__|    |   __/ \____/\___  /|__|
 *      \/       \/        |__|         /_____/     
 *
 */

 // ============================
 
 /**
 * A model for entries.
 *
 * This could have been done with `array`,
 * but I felt that `object`s are better DTOs instead of `array`s.
 * 
 * Array:
 * ['name' => 'Kier', 'number' => 'Kier', 'address' => '69', 'avatar' => 'pogi.jpg']
 *
 * Object:
 * new Entry('Kier Borromeo', '69./.', '69 Concha St.', 'pogi.jpg'),
 *
 * Arrays look tedious, but could have been simpler if implemented
 * with a simple function instead of the class below.
 *
 * Like so:
 * function entry($name, $number, $address, $avatar)
 * {
 * 		return [
 *			'name'	=> $name
 *			// ...
 *		];
 * }
 *
 * The reason behind this is that `class`es are fucking sexy.
 * So fuck you and your argument.
 */
class Entry {

	public $name;
	public $number;
	public $address;
	public $avatar;

	/**
	 * Class constructor
	 * @param string $name
	 * @param string $number
	 * @param string $address
	 * @param string $avatar
	 */
	public function __construct(
		$name,
		$number = '',
		$address = '',
		$avatar = null
	)
	{
		$this->name = $name;
		$this->number = $number;
		$this->address = $address;
		$this->avatar = $avatar;
	}

}

/**
 * Our "phonebook" database
 */
$phonebook = [
	new Entry('Kier Borromeo', '696-9696', '1420 Prince David Condominium', 'super-pogi.jpg'),
	new Entry('Jealian Menor', '871-1452', '231 California St., Tagaytay, US', 'mahal.jpg'),
	new Entry('Mark Penaranda', '696-9696', '1420 Prince David Condominium', 'pangit.jpg'),
	new Entry('Brian Bodollo', '696-69696', '1420 Prince David Condominium', 'pangit.jpg'),
	new Entry('JC Ricaro', '872-4213.', '1420 Prince David Condominium', 'pangit.jpg'),
	new Entry('Kirby Borromeo', '691-1234', '1420 Prince David Condominium', 'pangit.jpg'),
];


$input = isset($_GET['search']) ? $_GET['search']: '';

// Echo out a JSON response
echo json_encode( search($phonebook, $input) );

/**
 * Our search "algorithm" for the phonebook
 * 
 * @param array $phonebook
 * @param string name
 * @return array
 */
function search(array $phonebook, $name = '')
{
	// We simply return the whole phonebook
	// if the search / input is blank or whatever
	if ( !count( trim($name) ) )
	{
		return $phonebook;
	}

	// Otherwise, here's an array to store
	// all names that contains anything in the input
	$stack = [];

	foreach($phonebook as $entry)
	{
		// Here we use a regex to check if there is an entry
		// that has anything from the input / search / query.
		//
		// Like if our input has 'a', it will match Aladdin 
		// If our input is 'kie', it will match 'Kier Ivan',
		// If our input is 'qwe', it will not match 'Kier Ivan'
		if ( preg_match_all('/' . strtolower($name) . '/i', $entry->name) ) {
			$stack[] = $entry;
		}
	}

	return $stack;
}