<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2019/7/19
 * Time: 17:45
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('static_pages/home');
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }
}