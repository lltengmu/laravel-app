<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke()
    {
        return response([
            "code" => 200,
            "message" => "request successful",
            "type" => "success",
            "data" => [
                "message" => "接口匹配成功"
            ]
        ]);
    }
}
