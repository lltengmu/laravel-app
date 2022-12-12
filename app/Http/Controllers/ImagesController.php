<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    public function __invoke()
    {
        $HomePageImages = DB::table('images')->get();
        return response([
            "code" => 200,
            "message" => "request successful",
            "type" => "success",
            "data" => $HomePageImages,
        ]);
    }
}
