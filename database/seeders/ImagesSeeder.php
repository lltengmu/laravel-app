<?php

namespace Database\Seeders;

use App\Models\Images;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'path' => asset('storage/images/blackBord.png'),
                'title' => '黑板',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'pages' => json_encode(array('home','search')),
                'isSquare' => false,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/CoffeLive.png'),
                'title' => '咖啡生活',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'pages' => json_encode(array('home')),
                'isSquare' => true,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/City.png'),
                'title' => '城市',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'pages' => json_encode(array('home')),
                'isSquare' => false,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/Comfortable.png'),
                'title' => '舒适',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'pages' => json_encode(array('home')),
                'isSquare' => true,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/Road.png'),
                'title' => '马路',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'pages' => json_encode(array('home')),
                'isSquare' => true,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/Indoor.png'),
                'title' => '家居室内',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'pages' => json_encode(array('home')),
                'isSquare' => false,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/CityView.png'),
                'title' => '城市风光',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'pages' => json_encode(array('computer')),
                'isSquare' => false,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ]);
    }
}
