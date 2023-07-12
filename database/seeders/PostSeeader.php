<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->create([
            'title'=>'Первый пост',
            'content'=>'Lorem30.ldkfghdkjfghlohgdkjglsd;fkhijgs;odrtijhoiestrjhgoeritjh;oritjh;orityh;orityjoh;ertiyori',
            'description'=>'lorem fhgjgfdh',
            'is_published'=>true,
        ]);
    }
}
