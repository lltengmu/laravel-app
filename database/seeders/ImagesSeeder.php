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
                'path' => asset('storage/images/Home/blackBord.png'),
                'title' => '黑板',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'isSquare' => false,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/Home/CoffeLive.png'),
                'title' => '咖啡生活',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'isSquare' => true,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/Home/City.png'),
                'title' => '城市',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'isSquare' => false,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/Home/Comfortable.png'),
                'title' => '舒适',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'isSquare' => true,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/Home/Road.png'),
                'title' => '马路',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'isSquare' => true,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
            [
                'path' => asset('storage/images/Home/Indoor.png'),
                'title' => '家居室内',
                'content' => 'Website Back....',
                'downloads' => mt_rand(1000,9999),
                'isSquare' => false,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
        ]);
    }
}
