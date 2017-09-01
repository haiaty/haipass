<?php
/**
 * User: haiaty.varotto
 * Date: 02/06/2017
 * Time: 01:07
 */
namespace App\Domain;
use App\Domain\Pieces;

/**
 * The responsability of this class is to craft the password
 */
class PasswordCrafter
{

    /**
     * @param \App\Domain\Pieces $pieces
     * @param $craftStrategy mixed it can be both a Closure or a object implementing the Crafter interface
     * @return string
     * @throws \Exception
     */
    public static function craft(Pieces $pieces, $craftStrategy): string {

        if(is_callable($craftStrategy)){
            return $craftStrategy($pieces);
        }

        if(is_object($craftStrategy) and $craftStrategy instanceof \App\Domain\Crafters\Crafter){
            return $craftStrategy->craftWith($pieces);
        }

        throw new \Exception('Sorry, i don\'t know how to craft');
    }


}
