<?php
/**
 * User: haiaty.varotto
 * Date: 02/06/2017
 * Time: 01:13
 */
namespace Tests\Unit;
use App\Domain\CraftersPicker;
use App\Domain\PasswordCrafter;
use App\Domain\Pieces;
use Tests\TestCase;

class PasswordCrafterTest extends TestCase
{

    Const EXPECTED_PASSWORD = '66a32aa901090ef9be412??&';
    /**
     * @test
     */
    public function it_should_generate_the_right_password()
    {

        $inputs = [
            'web_app' => 'facebook',
            'pass_phrase' => 'i have decided'
        ];
        $pieces = new Pieces($inputs);
        $craftStrategy = CraftersPicker::pick('haipass');


        $this->assertEquals(static::EXPECTED_PASSWORD, PasswordCrafter::craft($pieces, $craftStrategy));
    }


    /**
     * @test
     */
    public function it_should_generate_the_right_password_when_webapp_is_full_url(){


        $inputs = [
            'web_app' => 'http://wwww.facebook.com',
            'pass_phrase' => 'i have decided'
        ];
        $pieces = new Pieces($inputs);
        $craftStrategy = CraftersPicker::pick('haipass');


        $this->assertEquals(static::EXPECTED_PASSWORD, PasswordCrafter::craft($pieces, $craftStrategy));
    }

    /**
     * @test
     */
    public function it_should_generate_the_right_password_when_webapp_is_partial_url(){

        $inputs = [
            'web_app' => 'http://facebook.com',
            'pass_phrase' => 'i have decided'
        ];
        $pieces = new Pieces($inputs);
        $craftStrategy = CraftersPicker::pick('haipass');


        $this->assertEquals(static::EXPECTED_PASSWORD, PasswordCrafter::craft($pieces, $craftStrategy));
    }


    /**
     * @test
     */
    public function it_should_generate_the_right_password_when_inputs_are_in_upper_case(){

        $inputs = [
            'web_app' => 'FACEBOOK',
            'pass_phrase' => 'i have decided'
        ];
        $pieces = new Pieces($inputs);
        $craftStrategy = CraftersPicker::pick('haipass');


        $this->assertEquals(static::EXPECTED_PASSWORD, PasswordCrafter::craft($pieces, $craftStrategy));
    }

}
