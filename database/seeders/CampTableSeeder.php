<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Camp;
// use Illuminate\Support\Str;
// use Illuminate\Support\Str

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps=[
            [
                'title'=>'Gila Belajar',
                'slug'=>'gila-belajar',
                // 'slug'=>Str::of('Gila Belajar'),
                'price'=>280,
                'created_at'=>date('Y-m-d H:i:s', time()),
                'updated_at'=>date('Y-m-d H:i:s', time()),
            ],
            [
                'title'=>'Baru Mulai',
                'slug'=>'baru-mulai',
                // 'slug'=>Str::of('Gila Belajar'),
                'price'=>140,
                'created_at'=>date('Y-m-d H:i:s', time()),
                'updated_at'=>date('Y-m-d H:i:s', time()),
            ],
        ];

        Camp::insert($camps);


    }
}
