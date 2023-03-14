<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arraydata=[[
            'title' => 'Belajar insert Dengan Laravel',
            'slug' => ' belajar-model-dengan-laravel',
            'content' => 'Belajar dengan Laravel sungguh menyenangkan',
            'draft' => 0

        ],
        [
            'title' => 'Belajar controller Dengan Laravel',
            'slug' => ' belajar-model-dengan-laravel',
            'content' => 'Belajar dengan Laravel sungguh menyenangkan',
            'draft' => 0

        ],
        [
            'title' => 'Belajar Model Dengan Laravel',
            'slug' => ' belajar-model-dengan-laravel',
            'content' => 'Belajar dengan Laravel sungguh menyenangkan',
            'draft' => 0
            
        ],
    ];
        DB::table('posts')->insert($arraydata);
    }
}
