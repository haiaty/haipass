<?php
/**
 * User: haiaty.varotto
 * Date: 04/06/2017
 * Time: 01:15
 */
namespace App\Domain;
use App\Domain\Crafters\Haipass;
use App\Domain\Crafters\OldHaipass;

/*
 *
 */
class CraftersPicker
{

    /**
     * This is a factory method in order to pick the right strategy
     * to build the password
     * @param $patternName
     * @return Haipass
     * @throws \Exception
     */
    public static function pick($patternName){


        switch($patternName){
            case "haipass":

                return new Haipass();
                break;
            default:
                throw new \Exception('implement the strategy for that pattern');
        }

    }

}
