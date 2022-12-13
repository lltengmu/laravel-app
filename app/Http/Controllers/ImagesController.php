<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    public function __invoke()
    {
        $HomePageImages = DB::table('images')->get();
        foreach($HomePageImages as $item){
            var_dump($item->pages);
            $item->pages = json_decode($item->pages);
        }
        return response([
            "code" => 200,
            "message" => "request successful",
            "type" => "success",
            "data" => $HomePageImages,
        ]);
    }
}
