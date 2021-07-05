<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function index() {
        $msg = "Wiadomośc zastąpiana za pomocą AJAX";
        return response()->json(array('msg'=> $msg), 200);
     }
}
