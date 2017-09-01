<?php
/**
 * User: haiaty.varotto
 * Date: 04/06/2017
 * Time: 01:20
 */

namespace App\Domain\Crafters;


use App\Domain\Pieces;

interface Crafter
{
    /**
     * The method that implements the logic to craft a new password
     * @param Pieces $pieces
     * @return string
     */
    public function craftWith(Pieces $pieces): string;
}