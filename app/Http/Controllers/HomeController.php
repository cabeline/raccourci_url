<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \AshAllenDesign\ShortURL\Models\ShortURL;

class HomeController extends Controller
{
    public function index(){

        return view("home");
    }

    
    public function store(Request $request){
        $initUrl = $request->input('url');

         $builder = new \AshAllenDesign\ShortURL\Classes\Builder();
         $shortURLObject = $builder->destinationUrl($initUrl)->trackVisits()->make();
         $shortURL = $shortURLObject->default_short_url;

         return view("short",['initUrl'=>$initUrl,'shortURL'=>$shortURL]);
    }
}
