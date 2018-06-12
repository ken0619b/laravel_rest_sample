<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HashTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tags = ['Gslab05','Home'];
      foreach($tags as $tag){
        DB::table('hashtags')->insert(
          [
            'id' => null,
            'tag' => $tag,
            'created_at' => Carbon::today(),
            'updated_at' => Carbon::today()
          ]);
      }
    }
}
