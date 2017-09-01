<?php
/**
 * User: haiaty.varotto
 * Date: 02/06/2017
 * Time: 00:25
 */
namespace App\Http\Controllers;

use App\Domain\Pieces;
use App\Features\Web\CraftPasswordFeature;
use Illuminate\Http\Request;
use App;

class HaiPassController extends Controller
{


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCraftPage(){

        return view('craft.craft');
    }


    /**
     * @param Request $request
     * @return string
     */
    public function craftPassword(Request $request){

        return (new CraftPasswordFeature())->handle(new Pieces($request->all()));
    }
}

