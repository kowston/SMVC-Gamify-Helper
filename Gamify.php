<?php
namespace Helpers;

/*
 * Form Helper - Add Gaming Fuctionality. Based on http://www.ibm.com/developerworks/library/os-php-gamescripts1/ 
 *
 * @author Kerry Owston - kerry@kerryowston.co.uk - http://kerryowston.co.uk
 * @version 1.0
 * @date June 27, 2014
 * @date May 18 2015
 *
 * A derivitive of the work of Duane O'Brien 30 game scripts you can write in PHP
 */
class Gamify
{
	/**
	 * This method will return the result of rolling a die
	 * @param  int reperesents sides of die
	 * @return int represents the result of the roll
	 */
    public static function roll($sides)
    {
    	return mt_rand(1, $sides);
    }

    /**
     * @param  array of first names
     * @param  array of last names
     * @param  int total number of combinations to generate
     * @return array
     */
    public static function nameGen($first, $last, $total)
    {
        $one = count($first);
        $two = count($last);
        if($one == $two){
            shuffle($first);
            shuffle($last);

            for($i = 0; $i < $total; $i++){

            $names[] = $first[$i] . " " . $last[$i];

            }
        return $names;
        }

    	
    }
}

// problem is the array could have inequal ammounts of values resulting is results that have missing first or last names

//