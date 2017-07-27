<?php
/**
 * Created by PhpStorm.
 * User: sits
 * Date: 2017/7/27
 * Time: 15:24
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testController extends Controller{
    public function __construct()
    {
    }
    public function getTest(Request $request){
        $title=$request->json('title');
        return 1;
    }
}