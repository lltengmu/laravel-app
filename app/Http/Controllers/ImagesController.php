<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    public function __invoke($pageName)
    {
        //当使用数据填充某些字段为json格式的时候，使用数据库模型读取数据可以不用对json字段进行解码
        $responseImages = array();
        foreach(Images::all() as $image){
            if(in_array($pageName,$image->pages)){
                array_push($responseImages,$image);
            };
        }
        return response([
            "code" => 200,
            "message" => "request successful",
            "type" => "success",
            "data" => $responseImages,
        ]);
    }
}
