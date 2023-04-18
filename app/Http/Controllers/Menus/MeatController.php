<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class MeatController extends Controller
{
    public function index()
    {
        $meats=Menu::where('section','meats')->get();
        if($meats){
            return view('menu.meats.index',[
                'meats'=>$meats
            ]);
        }else{
            return view('menu.meats.index',[
                'meats'
            ]);
        }

    }
}
