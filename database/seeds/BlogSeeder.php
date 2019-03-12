<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('blogs')->truncate();
        $blogs = [];
        $created_at=Carbon::now();
        $faker = Factory::create();

        for($i=0;$i<9;$i++){
            $image= "ss.jpg";
            $blogs[]=[

                'title'=>$faker->sentence(4),
                'image'=>$image,
                'body'=>$faker->realText(500),
                'created_at'=>$created_at


                ];

        }

        DB::table('blogs')->insert($blogs);

    }
}
