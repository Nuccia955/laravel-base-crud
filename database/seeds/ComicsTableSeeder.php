<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Comic::truncate();
        // Get array of first comics
        $comics = config('comics');

        foreach($comics as $comic) {

            // 1. new instance (table row)
            $new_comic = new Comic();

            // 2. set properties
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->type = $comic['type'];

            //3. save new row
            $new_comic->save();
        }
    }
}
