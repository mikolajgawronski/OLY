<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function regulamin(){
        return view('staticpages.regulamin');
    }
    public function o_nas(){
        return view('staticpages.o_nas');
    }
    public function kontakt(){
        return view('staticpages.kontakt');
    }
}
