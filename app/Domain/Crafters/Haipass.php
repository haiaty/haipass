<?php
/**
 * User: haiaty.varotto
 * Date: 05/06/2017
 * Time: 23:01
 */
namespace App\Domain\Crafters;

use App\Domain\Pieces;

class Haipass implements Crafter
{

    /**
     * @example:
     *
     * $hashCombined = 7c5d7f1dd7c1e91d59a846a42715a533fc869c685df9ba778dd5735b253446db
     * The password will be (spaces evidences the different steps to create the password in the method below):
     *
     * 7  7c5d7f1dd  D  b253446db  D  ?  ?  &
     *
     * @param Pieces $pieces
     * @return string
     */
    public function craftWith(Pieces $pieces): string
    {

        $password = '';

        $webApp = $pieces->nameOfTheWebApp();
        $passPhrase = $pieces->passPhrase();
        $haipassKey = $pieces->haipassKey();

        $hashCombined = hash('sha256', strtolower(trim(str_replace(' ', '', $haipassKey . $passPhrase . $webApp))));

        $password .= $this->upperOrNumberInPosition(0, $hashCombined);

        $password .= $this->segmentOf($hashCombined, $startFrom = 0, $withLenght = 9);

        $password .= $this->upperOrNumberInPosition(7, $hashCombined);

        $password .= $this->segmentOf($hashCombined, $startFrom = -9, $withLenght = 9);

        $password .= $this->upperOrNumberInPosition(3, $hashCombined);

        $password .= $this->specialCharInPosition(12, $hashCombined);

        $password .= $this->specialCharInPosition(10, $hashCombined);

        $password .= $this->specialCharInPosition(40, $hashCombined);

        return $password;
    }

    /**
     * If the value extracted in position is a number return it otherwise convert it to upper case  and returns
     * @param $position
     * @param $hashCombined
     * @return string
     */
    private function upperOrNumberInPosition($position, $hashCombined)
    {

        $letter = $this->extractLetter($position, $hashCombined);

        $isInt = (int)$letter;

        if ($isInt) {
            return $letter;
        }

        return strtoupper($letter);
    }

    /**
     * Takes a segment of a string. Encapsulates substr function
     * @param $string
     * @param $startFrom
     * @param $withLenght
     * @return string
     * @internal param $passPhrase
     */
    private function segmentOf($string, $startFrom, $withLenght)
    {
        return substr($string, $startFrom, $withLenght);
    }


    /**
     * Extract a letter from a string
     * @param $position
     * @param $hashCombined
     * @return string
     */
    private function extractLetter($position, $hashCombined)
    {
        return substr(trim($hashCombined), $position, 1);
    }

    /**
     * Gets a special char according to the a custom business rule
     * @param $position
     * @param $hashCombined
     * @return string
     */
    private function specialCharInPosition($position, $hashCombined)
    {
        $letter = $this->extractLetter($position, $hashCombined);

        $isInt = (int)$letter;

        if ($isInt) {

            return '&';
        }

        if (strcmp(strtolower($letter), 'n') <= 0) {
            return '?';
        }

        return '$';

    }
}
