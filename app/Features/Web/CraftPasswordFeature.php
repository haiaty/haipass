<?php
/**
 * User: haiaty.varotto
 * Date: 02/06/2017
 * Time: 00:49
 */
namespace App\Features\Web;


use App\Domain\CraftersPicker;
use App\Domain\PasswordCrafter;
use App\Domain\Pieces;
use App\Events\PasswordCrafted;

/**
 * The responsability of this class is encapsulate the steps of the web password crafter feature.
 */
class CraftPasswordFeature
{

    /**
     * @param Pieces $pieces the value object holding the information that is needed to craft password
     * @return string the crafted password
     * @throws \Exception
     */
    public function handle(Pieces $pieces) : string
    {
        $craftStrategy = CraftersPicker::pick($pieces->craftStrategyName());

        $craftedPassword = PasswordCrafter::craft($pieces, $craftStrategy);

        event(new PasswordCrafted());

        return $craftedPassword;
    }

}
