<?php

use Illuminate\Database\Seeder;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          factory(App\Detail::class, 100)->create()->each(function (App\Detail $detail){
            $detail->category()->attach([
              rand(1,100),
            ]);
          });
      }
      }
