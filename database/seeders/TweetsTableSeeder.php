<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Helpers as Helpers;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    

    public function run()
    {   
       $faker = Faker::create('fr_FR');
 
      
      // $hashtags = Helpers::HashtagGenerate();

       foreach(range(1,50) as $index){
        $rand1 = rand(1,5);
        $rand2 = rand(1,5);
           DB::table('tweets')->insert([
               'author' => 'JohnDoe'.$index,
               'message' => $faker->sentences(4,true),
               'hashtag' =>  Helpers::HashtagGenerate($rand1,$rand2),
               'created_at' => $faker->dateTime($max = 'now', $timezone = null)
           ]);
       }
    }
}

/*
date($format = 'Y-m-d', $max = 'now') // '1979-06-09'
time($format = 'H:i:s', $max = 'now') // '20:49:42'*/